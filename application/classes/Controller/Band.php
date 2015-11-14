<?php

class Controller_Band extends Controller_Base{

    public function action_index(){
        
               
        $sql = 'SELECT content FROM pages WHERE uri = \'band\'';
        $res = DB::query(1, $sql)
                ->execute()
                ->as_array();
        
        
        $sql = 'SELECT alias, title, image FROM pages WHERE uri = \'member\' AND active= 1 ORDER BY weight DESC, title ASC ';
        $links = DB::query(1, $sql)
                ->execute()
                ->as_array('alias');
               
        if (count($res) == 0){
            throw HTTP_Exception_404::$error_view('Страница не найдена');
        }
        
        $view = new View('v_page');
        $view->text = $res[0]['content'];
        $view->links = $links;
        $this->template->content = $view;
        
    }
    
    public function action_members(){
        
        $members = ORM::factory('Page')
                ->where('uri','=','member')
                ->and_where('active', '=', '1')
                ->order_by('weight', 'desc')
                ->order_by('title', 'asc')
                ->find_all();
            
        $view = new View('v_band/v_members');
        $view->members = $members;
        $this->template->content =  $view;
        
    }
    
    public function action_member(){
        
        $alias = $this->request->param('id');
        
        $member = new Model_Page(array('alias' => $alias));
        
        if (!$member->loaded()) {
            throw new HTTP_Exception_404('Страница не найдена');
        }
        
        $view = new View('v_band/v_member');
        $view->member = $member;
        $this->template->content = $view;
        
    }
}    
