<?php

class Controller_Gallery extends Controller_Base{
    
    public $scripts =  array('js/jquery.galleriffic.js','js/jquery.opacityrollover.js');
    public $styles = array('css/black.css');
    protected $_path_origin = 'C:/WServers/home/sympulse/www/photos/origin/';
    protected $_path_thumbs = 'C:/WServers/home/sympulse/www/photos/thumbs/';
    
    public function action_index(){
        
        //подключаем скрипты
        if(!empty($this->scripts)){
            $this->template->scripts = $this->scripts;
        }
        
        if(!empty($this->styles)){
            $this->template->styles = $this->styles;
        }
        
        $view = new View('v_gallery');
        if($this->request->method() === Request::POST){
           
            if(isset($_FILES['image'])){
                
                       
                $filename = $this->_save_file($_FILES['image']);
            }
            
            if (!$filename)
            {
                $error_message = 'There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file.';
                $view->message = $error_message;
            }
            
        }
       
        $filelist =  array();
        
        $iterator = new FilesystemIterator($this->_path_thumbs);
        foreach($iterator as $item){
            $filelist[] = $item->getFilename();            
        }
        
        $view->filelist = $filelist;
        
        $this->template->content = $view;
    }
    
    protected function _save_file($image){
        
        $allowed = array('jpg','jpeg','png','gif');
       //проверка на ошибки
        if( !Upload::valid($image) OR
            !Upload::not_empty($image) OR
            !Upload::type($image, $allowed))
        {
            return false;
        }
        
        if($file = Upload::save($image, NULL, $this->_path_origin)){
            
            $filename = strtolower(Text::random('alnum', 20).'.jpg');
            
            
            $image = Image::factory($file);
            
            //to origin                     
            $image  ->resize('902','360')                    
                    ->save($this->_path_origin.$filename);
            
            //to thumbs                        
            $image  ->crop('350', '350')
                    ->resize('150','150')
                    ->save($this->_path_thumbs.$filename);
            
             unlink($image);
 
            return $filename;
            
        }
        else{
            return false;
        }
    }
}
