<?php

class Controller_News extends Controller_Base{
    
    public $title = 'Новости';
    public $count = 10;
    
    public function action_index(){
        
        $page = arr::get($_GET, 'page', 1);
                
        $count_news = ORM::factory('News')                
                ->count_all();
        
        $offset = $this->count*($page-1);
        
        $news = ORM::factory('News')
                ->order_by('date', 'desc')
                ->offset($offset)
                ->limit($this->count)
                ->find_all();
        
        if (count($news) == 0) {
            throw new HTTP_Exception_404('Страница не найдена');
        }
            
        $view = new View('v_news');
        $view->news = $news;
        $view->count_news = $count_news;
        $view->current_page = $page;
        $view->count_pages = ceil($count_news/$this->count);        
        $this->template->content = $view;
        
    }
    
    
    public function action_new(){
        
        $id = $this->request->param('id');
        
        $new = new Model_News((int)$id);
        
        if (!$new->loaded()){
            throw new HTTP_Exception_404('Страница не найдена');
        }
            
        $view = new View('v_new');
        $view->new = $new;   
        $this->template->content = $view;
        
    }
    
}

