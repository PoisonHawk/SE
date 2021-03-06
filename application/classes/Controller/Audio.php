<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Audio extends Controller_Base{
    
    public $title = 'Аудио';
    public $scripts = array(

        'js/soundmanager/script/soundmanager2.js',
        'js/soundmanager/demo/mp3-player-button/script/mp3-player-button.js'
        );
    
    public $styles = array(
            'js/soundmanager/demo/mp3-player-button/css/mp3-player-button.css'
    );
    
    public function action_index(){
        
        $album_list = array();
        
        $album = new Model_Albums();        
        $albums = $album->getAlbums();
        
        foreach($albums as $disk){
            
            $album_list[$disk['id']]       = array();
            $album_list[$disk['id']]['name']     = $disk['name'];
            $album_list[$disk['id']]['year']     = $disk['year'];
            $album_list[$disk['id']]['image']    = $disk['image'];
            $album_list[$disk['id']]['description'] = $disk['description'];
            $album_list[$disk['id']]['tracks']  = array();
             
            $audio = new Model_Audio();
            $tracks = $audio->getAudio($disk['id']);
            
            $count = 1;
            foreach($tracks as $track){
                
                $album_list[$disk['id']]['tracks'][$count] = array();
                $album_list[$disk['id']]['tracks'][$count]['name'] = $track['name'];
                $album_list[$disk['id']]['tracks'][$count]['file'] = $track['file'];
                $count++;
            }
            
        }
        
        
//        echo "<pre/>";
//        print_r($album_list);
        
        $view = new View('v_audio');
        $view->albums = $album_list;
        $this->template->content = $view;
    }
}

