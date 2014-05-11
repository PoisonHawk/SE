<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template
{
    public $template = 'v_layout';
    public $title='';
    
    public function before() {
        parent::before();
        
        $site_name = 'Sympuls-e'; 
        
        $menu = Kohana::$config->load('settings.site.menu');
        $current =  $this->request->controller();
        
        $this->template->title=$this->title;
        
        $this->template->current = $current;
        $this->template->menu =$menu;
        
        $this->template->site_name = $site_name;
        
        $this->template->styles = array();
        $this->template->scripts = array();
    }
    
}
