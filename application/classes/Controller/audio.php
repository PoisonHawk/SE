<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Audio extends Controller_Base{
    
    public $title = 'Аудио';
    
    public function action_index(){
        
        $album_list = array();
        
        $album = new Model_Albums();        
        $albums = $album->getAlbums();
        
        foreach($albums as $disk){
            
            $album_list[$disk['id']]       = array();
            $album_list[$disk['id']]['name']     = $disk['name'];
            $album_list[$disk['id']]['year']     = $disk['year'];
            $album_list[$disk['id']]['image']    = $disk['image'];
            
            $audio = new Model_Audio();
            $tracks = $audio->getAudio($disk['id']);
            foreach($tracks as $track){
                
                $album_list[$disk['id']]['tracks'][] = $track['name'];
                
            }
            
        }
        
        
        
        
        $view = new View('v_audio');
        $view->albums = $album_list;
        $this->template->content = $view;
    }
}

