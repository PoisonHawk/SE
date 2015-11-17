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
                
                Database::instance()->begin();
                try {
                    
                    $gallery =  new Model_Gallery();
                    $gallery->title = $title;  
                    $gallery->created = time();
                    $gallery->save();       
                    $pk = $gallery->pk();
                                        
                    
                    $path = DOCROOT.'/photos/'.$pk;                    
                    mkdir($path, 0777);
                    
                    $token = md5(md5(rand(1,1000000)));
                    $view->token = $token;                
                    Session::instance()->set('token',$token);
                    
                } catch (Exception $e) {
                    Database::instance()->rollback();
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
        $sql = "Select id, title, image, description, category from gallery order by created";
        
        $data =  DB::query(1, $sql)->execute()->as_array();
                       
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
                
        $gallery = new Model_Gallery($id);
        
        if ($this->request->method() === Request::POST and isset($_POST['edit'])) {

            $gallery->title = $this->request->post('title');
            $gallery->category = $this->request->post('category');
            $gallery->description = $this->request->post('description');

            try{
                $gallery->save();
            } catch(ORM_Validation_Exception $e){
                $errors = $e->errors('gallery');
            } 

            if (!empty($errors)) {
                $view->errors = $errors;
            } else {
                Session::instance()->set('success_message', 'Изменения успешно сохранены');
                $this->redirect('/admin/gallery/item/'.$id);
            }
        }
                
        if($this->request->method() === Request::POST and isset($_POST['upload'])){
                       
            if(isset($_FILES['image'])){                
                       
                $filename = $this->_save_file($_FILES['image'],$id);
            }
            
            if (!$filename)
            {
                $error_message = 'There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file.';
                $view->message = $error_message;
            }
            $this->redirect('/admin/gallery/item/'.$id);
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
                        
            if (!empty($filelist) and (is_null($gallery->image) or !file_exists(DOCROOT.$gallery->image))) {
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
        $view->title = $gallery->title;
        $view->categories = array('live'=> 'Live', 'promo' => 'Promo');
        $view->category = $gallery->category;
        $view->description = $gallery->description;
        
        $albums = Orm::factory('Gallery')
                ->order_by('created')
                ->find_all();
        
        $view->albums = $albums;
       
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
            
            //чтение exif заголовков
            //todo возможны ошибки
            if(in_array($image->mime, array('image/jpeg', 'image/jpg'))){
                $exif = read_exif_data($image->file);
                    if(isset($exif['Orientation'])){
                    if ($exif['Orientation']==3)$image->rotate(180);
                    elseif ($exif['Orientation']==6)$image->rotate(270);
                    elseif ($exif['Orientation']==8)$image->rotate(-90); 
                }
            }

            //to origin                     
            $image  ->resize('902','360')                    
                    ->save($path_origin.$filename);
            
            //to thumbs                        
            $image  
                    ->crop('250', '250')
//                    ->resize('150','150')                    
                    ->save($path_thumbs.$filename);
            
             unlink($file);
 
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
    
    public function action_removealbum(){
        
        $this->auto_render = false;
        
        $id = $this->request->param('id');
        
        $ans['error'] = true;
        
        if(!$id){
            $ans['text'] = 'Не указан id альбома';
            $this->response->body(json_encode($ans));
            return;
        }
        
        //удалаяем каталог с менем $id 
        $dir = DOCROOT.'/photos/'.$id;
        
        $this->catalogremover($dir);
                
        //удаляем из базы запись 
        ORM::factory('Gallery', $id)->delete();
        
        $ans['error'] = false;
        $ans['text'] = 'Альбом удален';
        
        $this->response->body(json_encode($ans));
        return;
        
    }
    
    
    private function catalogremover ($dir){
        $list=glob($dir."/*");
        for ($i=0; $i < count($list); $i++) {

            if (is_dir($list[$i])) {
                //echo "<br>Входим в директорию $list[$i] <br>";
                $this->catalogremover($list[$i]);
            }
            else {
                unlink($list[$i]);
                //echo "Файл $list[$i] Удалён <br>";
            };
        };

            rmdir($dir);
            //echo "Директория $dir Удалена <br>";
    }
    
}

