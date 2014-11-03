<?php

/*Класс загрузки изображений */

class uploadimage {
    
    public $name = null;
    public $type = null;
    public $tmp_name = null;
    public $size = null;
    public $default_path = '/images';
    public $image = array();
    
    public $errors = null;
    public $allow_exts = array('jpg','jpeg','png','gif');
    
    public function __construct($image) {
        
       if (!Upload::valid($image)){
           $this->error = 'Файл не является изображением';
           return;
       } 
        
        
       $this->name      = $image['name'];
       $this->type      = $image['type'];
       $this->tmp_name  = $image['tmp_name'];
       $this->size      = $image['size'];
       $this->image     = $image;
       
    }
    
    public function _save_file($path){
                
       //проверка на ошибки
        if( !Upload::valid($this->image) OR
            !Upload::not_empty($this->image) OR
            !Upload::type($this->image, $this->allow_exts))
        {
            return false;
        }
                     
        
        if($file = Upload::save($this->image, NULL, $path)){
            
            $filename = $strtolower(Text::random('alnum', 20).'.jpg');
            
            $image = Image::factory($file);
            
            //to origin                     
            $image  ->resize('900','360')                    
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
    
}

