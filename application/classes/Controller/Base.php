<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_Base  extends Controller_Template
{
    public $template = 'v_layout';
    
    public function before() {
        parent::before();
        
        $site_name = 'Sympuls-e'; 
        
        $this->template->site_name = $site_name;
        
        $this->template->styles = array();
        $this->template->scripts = array();
    }
    
}
