<?php

class Controller_Gallery extends Controller_Base{
    
    public $title = 'Галерея';
    
    public $scripts =  array('js/jquery.colorbox.js');
    public $styles = array('css/colorbox.css');
    public $message = null;
    
    
    public function action_index(){
        
        //подключаем скрипты
        if(!empty($this->scripts)){
            $this->template->scripts = $this->scripts;
        }
        
        if(!empty($this->styles)){
            $this->template->styles = $this->styles;
        }
        
        $cat = arr::get($_GET, 'cat',  'all');
        
        $view = new View('gallery/v_gallery');
        
        
        //Список альбомов
        $sql = "Select id, title, image from gallery";
        
        if ($cat !== 'all') {
            $sql .= ' where category =:category ';
        }
        
        $sql .=" order by created desc";
        
        $data =  DB::query(1, $sql)->param(':category', $cat)->execute()->as_array();
                       
        if (empty($data)) {
            $this->message = __('В данном разделе нет загруженных изображений');
        }
       
        $view->message = $this->message;
        $view->data = $data;
                    
        
        $this->template->content = $view;
    }
    
    
    public function action_item(){
        
        $view = new View('gallery/v_item');
        
        $id = $this->request->param('id');        
        
        $filelist =  array();
        
        
        $path = DOCROOT.'/photos/'.$id.'/thumbs';
        
        $iterator = new FilesystemIterator($path);
        foreach($iterator as $item){
            $filelist[] = $item->getFilename();            
        }
        
        $view->filelist = $filelist;
        $view->id = $id;
        $this->template->content =$view;
        
    }
    
      
    
}
