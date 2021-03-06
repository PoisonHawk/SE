<?php

class Controller_Admin_Base extends Controller_Template
{
     public $title = "Админка";
     public $template = 'admin/v_layout';
     
      public function before() {
        parent::before();
        
        if(!Auth::instance()->logged_in('admin')){
            $this->redirect('/login');
        }
        
        $user = Auth::instance()->get_user();
                  
        $this->template->username = $user->username;
        
         $this->template->title = $this->title;
         
         $this->template->styles = array();
         $this->template->scripts = array();
        
    }
}

