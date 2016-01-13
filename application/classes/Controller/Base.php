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
        
        
        //social
        //vk
        $sql = 'select value from settings where name = \'social_vk\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_vk = isset($res[0]['value']) ? $res[0]['value'] : '';
        $this->template->social_vk = $social_vk;
        
        //fb
        $sql = 'select value from settings where name = \'social_fb\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_fb = isset($res[0]['value']) ? $res[0]['value'] : '';
        $this->template->social_fb = $social_fb;
        
        //tw
        $sql = 'select value from settings where name = \'social_tw\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_tw = isset($res[0]['value']) ? $res[0]['value'] : '';
        $this->template->social_tw = $social_tw;
        
        //yt
        $sql = 'select value from settings where name = \'social_yt\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_yt = isset($res[0]['value']) ? $res[0]['value'] : '';
        $this->template->social_yt = $social_yt;
        
        $endorsers = ORM::factory('Endorser')->find_all();
        $this->template->endorsers = $endorsers;
        
        
        
    }
    
}
