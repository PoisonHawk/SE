<?php

class Controller_Admin_Gallery extends Controller_Admin_Base{
    
   protected $_path_origin = '/origin/';
   protected $_path_thumbs = '/thumbs/';
   public $message = null; 
   public $errors = array();
    
   
   //todo оптимизировать все что ниже
   public function action_index(){
        
        $view = new View('admin/v_gallery/v_gallery');
               
        if ($this->request->method() === Request::POST){
                                   
            $title =  arr::get($_POST,'title');            
            $token = arr::get($_POST,'token');
                                    
            if (Session::instance()->get('token')!= $token) {
                $this->errors[] = 'Ошибка системы безопасности';
            }
            
            if (empty($title) ){
                $this->errors[] = 'Название альбома не может быть пустым';
            }
            
            if (empty($this->errors)){
                
                database::instance()->begin();
                try {
                    
                    $gallery =  new Model_Gallery();
                    $gallery->title = $title;                    
                    $gallery->save();       
                    $pk = $gallery->pk();
                                        
                    
                    $path = DOCROOT.'/photos/'.$pk;                    
                    mkdir($path, 0777);
                    
                    $token = md5(md5(rand(1,1000000)));
                    $view->token = $token;                
                    Session::instance()->set('token',$token);
                    
                } catch (Exception $e) {
                    database::instance()->rollback();
                    throw new Exception($e->getMessage());
                }
                
                Database::instance()->commit();
                                
            }
            else {
                $token = md5(md5(rand(1,1000000)));
                $view->token = $token; 
            }
            
        }
        else {
            
            $token = md5(md5(rand(1,1000000)));
            $view->token = $token;
            Session::instance()->set('token',$token);            
        }
                
        //Список альбомов
        $sql = "Select id, title, image from gallery";
        
        $data =  db::query(1, $sql)->execute()->as_array();
                       
        if (empty($data)) {
            $this->message = __('Не создано ни одного альбома');
        }
        
        $view->errors = $this->errors;
        $view->message = $this->message;
        $view->data = $data;
        
        $this->template->content = $view;
    }
    
    public function action_item(){
                
        $view =  new View('admin/v_gallery/v_item');
        
        $id = $this->request->param('id');
                
        if($this->request->method() === Request::POST){
           
            if(isset($_FILES['image'])){                
                       
                $filename = $this->_save_file($_FILES['image'],$id);
            }
            
            if (!$filename)
            {
                $error_message = 'There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file.';
                $view->message = $error_message;
            }
            
        }
       
        $filelist =  array();
        
        $path_thumbs = DOCROOT.'photos/'.$id.$this->_path_thumbs;
        $path_origin = DOCROOT.'photos/'.$id.$this->_path_origin;
        
        if (file_exists($path_thumbs) and is_dir($path_thumbs)){
        
            $iterator = new FilesystemIterator($path_thumbs);
            
            //получаем список фотографий
            foreach($iterator as $item){
                $filelist[] = $item->getFilename();            
            }
            
            //устанавливаем первое фото из альбома на обложку альбома
            $gallery = new Model_Gallery($id);
            
            if (is_null($gallery->image)) {
                $gallery->image = $filelist[0];
                $gallery->save();
            }
            
        } else {
            mkdir($path_thumbs, 0777);
            mkdir($path_origin, 0777);
        }   
            
        $view->filelist = $filelist;
        $view->id = $id;
        $view->path_thumbs = $path_thumbs;
        $view->origin_thumbs = $path_origin;
       
        $this->template->content = $view;
    }
    
    
    
    protected function _save_file($image, $id){
        
        $allowed = array('jpg','jpeg','png','gif');
       //проверка на ошибки
        if( !Upload::valid($image) OR
            !Upload::not_empty($image) OR
            !Upload::type($image, $allowed))
        {
            return false;
        }
        
        $path_thumbs = DOCROOT.'photos/'.$id.$this->_path_thumbs;
        $path_origin = DOCROOT.'photos/'.$id.$this->_path_origin;
        
        if($file = Upload::save($image, NULL, $path_origin)){
            
            $filename = $id.'_'.strtolower(Text::random('alnum', 20).'.jpg');
            
            $image = Image::factory($file);
            
            //to origin                     
            $image  ->resize('902','360')                    
                    ->save($path_origin.$filename);
            
            //to thumbs                        
            $image  ->crop('350', '350')
                    ->resize('150','150')
                    ->save($path_thumbs.$filename);
            
             unlink($image);
 
            return $filename;
            
        }
        else{
            return false;
        }
    }
    
    //todo оптимизировать!!!
    public function action_remove(){
        
        $this->auto_render = false;
        
        $ans = array();
                
        $path = arr::get($_POST,'path',null);
        
        if (is_null($path)) {
            $ans['error'] = 'error';
        }        
        
        if (!isset($ans['error'])) {
            try{
                //удаляем миниатюру
                unlink(DOCROOT.$path);
                //удаляем оригинал
                unlink(DOCROOT.str_replace('thumbs', 'origin', $path));
            }    
            catch(Exception $e){
                $ans['error'] = 'error';
                $this->response->body(json_encode($ans));
                return;
            }    
            
        }
        
        $ans['success'] = 'success';
        $this->response->body(json_encode($ans));
        
    }
    
}

