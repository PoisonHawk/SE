<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Videos extends Controller_Base{
    
    public function action_index(){
        
        $type = arr::get($_GET, 'type', 'playthrough');
        
        
        $videos = ORM::factory('Video')
                ->where('category', '=', $type)
                ->order_by('created', 'DESC')
                ->find_all();
        
        $view = new View('v_video');
        $view->videos = $videos;
        $this->template->content = $view;
        
    }
    
}

