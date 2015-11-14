<?php

class Controller_Media extends Controller_Base{
    
    public function before(){
        
        $this->redirect('/videos');
        
        parent::before();
    }
    
}
