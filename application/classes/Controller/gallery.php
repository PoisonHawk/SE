<?php

class Controller_Gallery extends Controller_Base{
    
    public $scripts =  array('js/jquery.galleriffic.js','js/jquery.opacityrollover.js');
    
    public function action_index(){
        
        $view = new View('v_gallery');
        
        if(!empty($this->scripts)){
            $this->template->scripts = $this->scripts;
        }
        
        
        $this->template->content = $view;
    }
}
