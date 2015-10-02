<?php

class Controller_Admin_News extends Controller_Admin_Base{
    
    public function before() {
        parent::before();
        
        $scripts = array(
            '/js/tinymce/tinymce.min.js',
        );
        
        $this->template->scripts = $scripts;
    }
    
    
    public function action_index(){
        
        //$last_news = array();        
        //$news = new Model_News();
        //$last_news = $news->getNews();
        
        $per_page = 10;
        $page = $page = max(1, $this->request->param('page'));
        
        $offset = $per_page*($page-1);        
        $count = ORM::factory('News')->count_all();
        $page_data = array(
            'total_items'       => $count,
            'items_per_page'    => $per_page,
            'curent_page'       => array(
                'source'        => 'route',
                'key'           => 'page', 
            ),
            'auto_hide'         => true,
            'view'              => 'pagination/basic',
        );
                
        
        $res = ORM::factory('news')
                ->order_by('date','DESC')
                ->limit($per_page)
                ->offset($offset)                
                ->find_all();
        
        $pagination = Pagination::factory($page_data);
        
        $content = View::factory('admin/v_news');
        $content->news = $res;
        $content->pagination = $pagination;
        $this->template->content = $content;
        
    }
    
    public function action_processnew(){
        
        $id = $this->request->param('id');        
        
        $errors = array();
        $post = arr::get('$_POST','send','');
        
        $content = View::factory('admin/v_processform');
        
        if(isset($id)){
            
            $new = new Model_News();
            $n = $new->getNews($id);
            
            $content->title = $n[0]['title'];
            $content->desc = $n[0]['description'];
                    
        }
        
        if(isset($_POST['send'])){
           
            //$date   = arr::get($_POST,'date','');
            $title  = arr::get($_POST,'title','');
            $desc   = arr::get($_POST,'desc','');
            
            $post = new Validation($_POST);
            
            $post->rule('title','not_empty')
                    ->rule('desc','not_empty');
            
            if($post->check()){
             
                $new = new Model_News();
                if(isset($id))
                {
                   $new->processNew($title,$desc,$id); 
                }
                else{
                    $new->processNew($title,$desc);
                }    
                
                $this->redirect('/admin/news');
            }
            else {
                $errors = $post -> errors('comments');
            }
            
        }
        
        
        $content->errors = $errors;
        
        $this->template->content = $content;
    }
    
    
    //todo переделать
    public function action_delete(){
        
        
        $id = $this->request->param('id');  
        
        $new = new Model_News();
        $new->delNew($id);
        
        $this->redirect('/admin/news');
    }
}
