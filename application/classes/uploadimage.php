<?php

/* Класс загрузки изображений */

class uploadimage {

    protected $maxSize = '2M';
    public $name = null;
    public $type = null;
    public $tmp_name = null;
    public $size = null;
    protected $default_path = '/images';
    public $image = array();
    protected $errors = null;
    public $allow_exts = array('jpg', 'jpeg', 'png', 'gif');
    protected $dimensionX = 350;
    protected $dimensionY = 350;
    protected $quality = 100;
    protected $thumb = false;
    
    public function __construct($image) {

        $this->name = $image['name'];
        $this->type = $image['type'];
        $this->tmp_name = $image['tmp_name'];
        $this->size = $image['size'];
        $this->image = $image;
    }

    public function save() {

        if ($file = Upload::save($this->image, NULL, $this->default_path)) {

            $filename = strtolower(Text::random('alnum', 20) . '.jpg');

            $image = Image::factory($file);

            //to origin                     
//            $image->resize('900', '360')
//                    ->save($path_origin . $filename);

            //to thumbs                  
            if ($this->thumb) {
                $size = $image->width > $image->height ? $image->height : $image->width;
                $image = $image->crop($size, $size);
            }else{
                $size = $image->width;
            }
            
            $image->crop($size, $size)
                    ->resize($this->dimensionX, $this->dimensionY)
//                    ->render(NULL, $this->quality)
                    ->save($this->default_path . $filename);

            unlink($file);

            return $filename;
        } else {
            $this->error = 'Не удалось сохранить изображение';
            return false;
        }
    }

    /**
     * Устанавливает максимальный размер изображения
     * @param type $size
     * @return \uploadimage
     */
    public function setMaxSize($size) {
        $this->maxSize = $size;
        return $this;
    }
    
    /**
     * Устанвливает папку для сохранения изображения
     * @param type $path_folder
     * @return \uploadimage
     */
    public function setFolder($path_folder) {
        $this->default_path = $path_folder;
        return $this;
    }
    
    public function setQuality($number){
        if(!$number or $number > $this->quality) {
            return $this;
        }
        
        $this->quality = $number;
        return $this;
    }
    
    public function check(){
        
        if (!Upload::not_empty($this->image)) {
            $this->error = 'Ошибка загрузки файла';
            return false;
                        
        }
        
        //проверка на ошибки
        if (!Upload::valid($this->image)) {
            $this->error = 'Файл не является изображением';
            return false;
        } 
        
        if (! Upload::type($this->image, $this->allow_exts)) {
            $this->error = 'Неверное расширение файла';        
            return false;
        }
        
        
        $size = Num::bytes($this->maxSize);
        
        if ($this->size >= $size) {
            $this->errors = 'Файл превышает допустимый размер';
            return false;
        }
                
        return true;
        
    }
    
    public function setDimension($x, $y) {
        $this->dimensionX = $x;
        $this->dimensionY = $y;
        return $this;
    }
    
    public function error(){
        return $this->error;
    }
    
    
    public static function notEmpty($file) {
//var_dump($file);
//        die();
//        if (($file['name'] !== ''
//                AND $file['type'] !== ''
//                AND $file['tmo_name'] !== ''
//                AND $file['error'] !== 4)) {
//            return true;
//        } 
//        
//        return false;
        
        if ($file['error'] !== 4) {
            return true;
        } else {
            return false;
        }

        
    }
    
    public function thumb($width = NULL, $height = NULL){
        $this->thumb = true;
        return this;
    }
    

}
