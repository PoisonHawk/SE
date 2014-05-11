<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Audio extends Controller_Base{
    
    public $title = 'Аудио';
    
    public function action_index(){
        
        $view = new View('v_audio');
        $this->template->content = $view;
    }
}

