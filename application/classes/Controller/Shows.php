<?php

class Controller_Shows extends Controller_Base{
    
    public function action_index(){
        
        $tours =  ORM::Factory('Tours')
                ->where('date', '>', time())
                ->order_by('date', 'asc')
                ->find_all();
        
        $view = new View('v_shows', array('tours'=>$tours));
        $this->template->content = $view;
        
    }
    
}


