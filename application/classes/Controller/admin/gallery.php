<?php

class Controller_Admin_Gallery extends Controller_Admin_Base{
    
   
    
    public function action_index(){
       
        
        
        $view =  new View('admin/v_gallery');
       
        $this->template->content = $view;
    }
}

