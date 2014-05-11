<?php

class Controller_Admin_Audio extends Controller_Admin_Base{
    
    public function action_index(){
        
        $a = new Model_Albums();
        $albums = $a->getAlbums();
        
        $content = View::factory('admin/v_audio');
        
        $content->albums = $albums;
        $this->template->content = $content;
    }
    
    public function action_albums(){
        
        
        $view = new View('admin/v_albums');
        $this->template->content = $view;
        
    }
    
}

