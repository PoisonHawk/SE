<?php

class Controller_New extends Controller_Base{
    
    public $title = 'Новости';
    
    
    public function action_index(){
        
        $id = $this->request->param('id');
        
        $new = new Model_New($id);
        
        if (!$new->loaded()){
            throw new HTTP_Exception_404('Страница не найдена');
        }
            
        $view = new View('v_new');
        $view->new = $new;   
        $this->template->content = $view;
        
    }
    
}

