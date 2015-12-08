<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Videos extends Controller_Base{
    
    public function before(){
         $this->scripts = array('/js/slider.js');
        parent::before();
                
    }
        
    public function action_index(){
        
        $type = arr::get($_GET, 'cat', 'all');
        
        $videos = ORM::factory('Video');
        
        if ($type !== 'all') {
                $videos = $videos->where('category', '=', $type);
        }
         
        $videos = $videos->order_by('created', 'DESC')
                ->find_all();
        
        $view = new View('v_video');       
        $view->videos = $videos;
        $this->template->content = $view;
        
    }
    
}

