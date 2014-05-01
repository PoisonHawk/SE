<?php

class Controller_Admin_Base extends Controller_Template
{
     public $title = "Админка";
     public $template = 'admin/v_layout';
     
      public function before() {
        parent::before();
        
         $this->template->title = $this->title;
         
         $this->template->styles = array();
         $this->template->scripts = array();
        
    }
}

