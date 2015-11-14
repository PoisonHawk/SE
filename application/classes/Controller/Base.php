<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template
{
    public $template = 'v_layout';
    public $title='';
    public $scripts = array();
    public $styles = array();
    
    public function before() {
        parent::before();
          
        if (!in_array($this->request->controller(), array('Videos', 'Band', 'Contacts'))) {
//            die('Ты не имеешь права смотреть другие страницы!');
        }
        
        $site_name = 'Sympuls-e'; 
        
        $menu = Kohana::$config->load('settings.site.menu');
        $current = $this->request->controller();
        
        $this->template->title=$this->title;
        
        $this->template->current = $current;
     
        
        
        $this->template->menu = $menu;
        
        $this->template->site_name = $site_name;
        
        $this->template->styles = $this->styles;
        $this->template->scripts = $this->scripts;        
    }
    
}
