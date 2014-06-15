<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Admin_Base{
    
    public $title = "Админка";
    
    public function action_index(){
        
        $this->redirect('/admin/news');
        
        $content = new View('admin/v_index');
        $this->template->title = $this->title;
        $this->template->content = $content;
    }
    
}

