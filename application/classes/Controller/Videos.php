<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Videos extends Controller_Base{
    
    public function before(){
         $this->scripts = array('/js/slider.js');
        parent::before();
                
    }
    
    
    public function action_index(){
        
        $type = arr::get($_GET, 'type', 'playthrough');
        
        
        $v_playthrough = ORM::factory('Video')
                ->where('category', '=', 'playthrough')
                ->order_by('created', 'DESC')
                ->find_all();
        
        $v_live = ORM::factory('Video')
                ->where('category', '=', 'live')
                ->order_by('created', 'DESC')
                ->find_all();
        
        $v_music = ORM::factory('Video')
                ->where('category', '=', 'music')
                ->order_by('created', 'DESC')
                ->find_all();
        
        $view = new View('v_video');
        $view->v_playthrough = $v_playthrough;
        $view->v_live = $v_live;
        $view->v_music = $v_music;
        $this->template->content = $view;
        
    }
    
}

