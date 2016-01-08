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
        
        $id = $id ? $id : NULL;
        
        $album = new Model_Albums($id);                
        
        if(isset($id)){
                       
            $query = DB::select('id', 'name', 'file')
                    ->from('audio')
                    ->where('album_id','=',$id)
                    ->execute();
            
            $audio  = $query->as_array(); 
            $count  = $query->count();
            
            
            $storealbums= db::query(1, 'select title, url from store_albums where album_id=:aid')
                    ->param(':aid', $id)
                    ->execute()
                    ->as_array('title');

            
            $view->filename     = $album->image;
            $view->count        = $count;
            $view->audio        = $audio;
            $view->title_album  = $album->name;
            $view->year         = $album->year;
            $view->description  = $album->description;
            $view->store_albums = $storealbums;
        }
        
        
        if($this->request->method() === Request::POST and isset($_POST['save'])){
                     
            $errors = array();
            
            $title              = trim(arr::get($_POST,'title_album'));
            $year               = trim(arr::get($_POST,'year')); 
            $album_image        = arr::get($_FILES, 'image_album', $album->image);
            $description        = arr::get($_POST, 'description');
            $descriiption       = strip_tags($description, '<br></br>');
            $store_albums       = arr::get($_POST, 'store_albums');
                       
            //валидация формы
            $validation = Validation::factory($this->request->post())
                ->rule('title_album', 'not_empty')
                ->rule('year', 'numeric')
                ->rule('year', 'exact_length', array(':value',4));  
                
            
            if(!$validation->check()){
                
                $errors = $validation->errors('validation');
                
            }
            
            if (!empty($store_albums)) {
                foreach($store_albums as $sa_title => $sa_url) {
                                
                    if($sa_url !== '' and !Valid::url($sa_url)){

                        $errors[] = 'Url '.$sa_title.' не валиден ';

                    }
                }
            }
            
            //Загрузка изображения альбома, если выбран                               
            if (Upload::not_empty($_FILES['image_album']))
            {
                $filename = $this->_save_image($_FILES['image_album']);

                if ($filename)
                {   
                    $album->image   = $filename;
                    $view->filename = $filename;
                    
                } else {
                    $errors[] = 'There was a problem while uploading the image.
                        Make sure it is uploaded and must be JPG/PNG/GIF file.';
                }  

            }
            
            Database::instance()->begin();
            try{
                //сохраняем информацию об альбоме
                $album->name    = $title;
                $album->year    = $year;
                $album->created = time(); 
                $album->description = $description;
                $album->save();

                $album_id=$album->pk();            

                //добавление ссылок на покупку альбома
                if (!empty($store_albums)) {
                    foreach($store_albums as $sa_title => $sa_url) {
                        
                        if ($id) {
                            $store = new Model_Storealbums(array('album_id'=>$id));
                        } else {
                            $store = new Model_Storealbums();
                        }
                        
                        $store->title = $sa_title;
                        $store->url = $sa_url;
                        $store->album_id = $id;
                        $store->save();
                        
                    }
                }
                
                //добавление треков
                $count_add = arr::get($_POST,'count');

                for($i=1;$i<=$count_add;$i++){
                    
                    $name = trim(arr::get($_POST,'title_track_'.$i));

                    $audio = new Model_Audio(array('num'=>$i, 'album_id' => $album_id));
                    if(!$audio->loaded()){
                       $audio = new Model_Audio(); 
                    }
                    
                    //загрузка файлов аудио
//                    if(Upload::not_empty($_FILES["file_track_$i"])){
//                        //загрузка файлов
//                                                                        
//                        $file = $this->_save_audio($_FILES["file_track_$i"],$name);
//                        if(!$file){
//                            $errors[] = 'There was a problem while uploading the image.
//                        Make sure it is uploaded and must be mp3/ogg file.';
//                        }
//                        $audio->file = $file;
//                    }

                    $audio->name    = $name ? $name : substr($audio->file, 0, strrpos($audio->file, '.'));
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
             
            }catch(Exception $e) {
                Database::instance()->rollback();
                $view->errors = 'Произошла ошибка';
                
            }    
                
                if (empty($errors)){
                    Database::instance()->commit();
                    $this->redirect('/admin/audio/albums/'.$id);
                } else {
                    Database::instance()->rollback();
                    $view->errors = $errors;
                }
            
        }
        
        
        $view->list_albums = ORM::factory('Albums')->order_by('created', 'desc')->find_all();
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
            ! Upload::not_empty($audio) OR
            ! Upload::type($audio, array('mp3', 'ogg')))
        {
            return FALSE;
        }
                
        //устанавливаем имя файла
        if($name){
            $pos = strrpos($audio['name'],'.');
            $ext = substr($audio['name'],$pos+1);        
            $name = $name.'.'.$ext;
        } else {
            $name = $audio['name'];
        }
        
        $name = str_replace(' ', '_', $name);
       
        if ($file = Upload::save($audio, $name, AUDIOPATH))
        {            
            // Delete the temporary file
            //unlink($file);
 
            return $name;
        }
        
        return False;
  
    }
    
    public function action_audioremove(){
        
        $this->auto_render = false;
        
        $id = $this->request->param('id');
        
        $audio = new Model_Audio($id);
        
        $filename = $audio->file;
        
        $file = DOCROOT.'/audios/'.$filename;
        
        $ans = array('status' => 'error');
        
        if(file_exists($file)){        
                        
            if(unlink($file)){            
                $audio->file = '';
                $audio->save();
                $ans = array('status'=> 'ok');
            }
        }
        
        $this->response->body(json_encode($ans));
    }
    
    public function action_delete(){
                
        
        $id = $this->request->param('id');
        
        Database::instance()->begin();
        
        try{
            $query = DB::delete('albums')->where('id', '=', $id)->execute();

            $query = DB::delete('audio')->where('album_id', '=', $id)->execute();
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage());
            Database::instance()->rollback();
        }
        
        Database::instance()->commit();
        
        $this->redirect('/admin/audio/');
    }
}

