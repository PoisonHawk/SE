<?php

class Controller_Admin_Audio extends Controller_Admin_Base{
    
    public $image = '';
    
    public function action_index(){
        
        $a = new Model_Albums();
        $albums = $a->getAlbums();
      
        $content = View::factory('admin/v_audio');
        
        $content->albums = $albums;
        $this->template->content = $content;
    }
    
    public function action_albums(){
        
        $view = new View('admin/v_albums');
        
        $id = $this->request->param('id');
        
        if(isset($id)){
            $album = new Model_Albums($id);
            $view->filename = $album->image;
            $view->title_album = $album->name;
            $view->year = $album->year;
            
            $query = DB::select('name', 'file')
                    ->from('audio')
                    ->where('album_id','=',$id);
            
            $audio  = $query->execute()->as_array(); 
            $count  = $query->execute()->count();
            $view->count = $count;
            $view->audio = $audio;
            $view->title_album = $album->name;
            $view->year = $album->year;
        }

        
        if($this->request->method() === Request::POST and isset($_POST['save'])){
            
            //Загрузка изображения альбома
            if (isset($_FILES['image_album']))
            {
                $filename = $this->_save_image($_FILES['image_album']);
                $this->image = $filename;
                $view->filename = $filename;
            }
            
            if ( ! $filename)
            {
                $error_message = 'There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file.';
                $view->errors = $error_message;
            }
                       
            $title = trim(arr::get($_POST,'title_album'));
            $year = trim(arr::get($_POST,'year'));            
            
            if(isset($id)){
                $album = new Model_Albums($id);                
            }
            else{
                $album = new Model_Albums();                
            }            
            
            //сохраняем информацию об альбоме
            $album->name    = $title;
            $album->year    = $year;
            $album->image   = $this->image;
            $album->save();
                               
            $album_id=$album->pk();            
            
            
            //добавление треков
            $count_add = arr::get($_POST,'count');
            
            for($i=1;$i<=$count_add;$i++){
                $name = trim(arr::get($_POST,'title_track_'.$i));
                
                $audio = new Model_Audio(array('num'=>$i, 'album_id' => $album_id));
                if(!$audio->loaded()){
                   $audio = new Model_Audio(); 
                }
                $audio->name    = $name;
                $audio->num     = $i;
                $audio->album_id= $album_id;
                
                //загрузка файлов аудио
                if(isset($_FILES["file_track_$i"])){
//                    echo "<pre/>";
//                    print_r($_FILES);
//                    die();

                    //загрузка файлов
                    $file = $this->_save_audio($_FILES["file_track_$i"],$name);
                    $audio->file = $file;
                }
                                
                $audio->save();
            }   
            
            //удаление треков
            if(isset($id)){
                for($i=$count_add+1;$i<=$count;$i++){
                    $audio = new Model_Audio(array('num' => $i, 'album_id'=>$album_id));
                    $audio->delete();
                }
            }
            
            $this->redirect('/admin/audio/albums/'.$id);
            
            
        }
        
        
        
        $this->template->content = $view;
        
    }
    
    protected function _save_image($image){
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
 
        $directory = DOCROOT.'uploads/';
 
        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';
 
            Image::factory($file)
                ->resize(200, 200, Image::AUTO)
                ->save($directory.$filename);
 
            // Delete the temporary file
            unlink($file);
 
            return $filename;
        }
 
        return FALSE;
    }
    
    protected function _save_audio($audio, $name=NULL){
        if (
            ! Upload::valid($audio) OR
            ! Upload::not_empty($audio))
            //! Upload::type($audio, array('mp3')))
        {
            return FALSE;
        }
        
        $directory = DOCROOT.'audios/';
        
        $pos = strpos($audio['name'],'.');
        $ext = substr($audio['name'],$pos+1);
        
        $name = $name.'.'.$ext;
        
        if (Upload::save($audio, $name, $directory))
        {
            //$filename = strtolower(Text::random('alnum', 20)).'.jpg';
            $filename = $name;
            
            
            // Delete the temporary file
            //unlink($file);
 
            return $filename;
        }
        
        return False;
        
//        $filename = Upload::save($audio, $name, $directory);
//        
//        if($filename){
//            return $filename;
//        }
//        else{
//            return FALSE;
//        }    
    }
    
    public function action_audioremove(){
        
    }
    
}

