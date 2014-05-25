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
            
            $query = DB::select('name')
                    ->from('audio')
                    ->where('album_id','=',$id);
            
            $audio  = $query->execute()->as_array(); 
            $count  = $query->execute()->count();
            $view->count = $count;
            $view->audio = $audio;
            $view->title_album = $album->name;
            $view->year = $album->year;
        }
        
        if($this->request->method() === Request::POST and isset($_POST['upload'])){
       
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
        }
        
        if($this->request->method() === Request::POST and isset($_POST['save'])){
            
            $title = arr::get($_POST,'title_album');
            $year = arr::get($_POST,'year');            
            
            if(isset($id)){
                $album = new Model_Albums($id);                
            }
            else{
                $album = new Model_Albums();                
            }            
          
            $album->name    = $title;
            $album->year    = $year;
            $album->image   = $this->image;
            $album->save();
                               
            $album_id=$album->pk();            
            
            
            //добавление треков
            $count_add = arr::get($_POST,'count');
            
            for($i=1;$i<=$count_add;$i++){
                $name = arr::get($_POST,'title_track_'.$i);
                
                $audio = new Model_Audio(array('num'=>$i, 'album_id' => $album_id));
                if(!$audio->loaded()){
                   $audio = new Model_Audio(); 
                }
                $audio->name    = $name;
                $audio->num     = $i;
                $audio->album_id= $album_id;
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
    
}

