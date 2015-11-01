<?php

class Controller_Admin_Video extends Controller_Admin_Base{
    
    public $categories = array(
        'live'=> 'Live',
        'playthrough' => 'Playthrough',
        'music'=> 'Music Video',
    );
        
    public function action_index(){
               
        $per_page = 10;
        $page = $page = max(1, $this->request->param('page'));
        
        $offset = $per_page*($page-1);        
        $count = ORM::factory('Video')->count_all();
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
                
        
        $res = ORM::factory('Video')
                ->order_by('created','DESC')
                ->limit($per_page)
                ->offset($offset)                
                ->find_all();
        
        $pagination = Pagination::factory($page_data);
        
        $content = View::factory('admin/v_video/v_index');
        $content->videos = $res;
        $content->categories = $this->categories;
        $content->pagination = $pagination;
        $this->template->content = $content;
        
    }
    
    
    public function action_item() {

        $id = $this->request->param('id');

        if ($id) {
            $video = new Model_Video($id);
        } else {
            $video = new Model_Video();
        }

        $errors = array();
        
        $view = new View('admin/v_video/v_item');

        if ($this->request->method() === Request::POST) {
            
            $video->title = $this->request->post('title');
            
            $link = explode('/',$this->request->post('link'));
           
            $video->videocode = end($link);
            $video->link = $this->request->post('link');
            $video->category = $this->request->post('category');
            
            if ($id) {
                $video->updated = date('Y-m-d H:i:s', time());
            } else {
                $video->created = date('Y-m-d H:i:s', time());
            }

            try {
                $video->save();
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('video');
            }

            if (!empty($errors)) {
                $view->errors = $errors;
            } else {
                Session::instance()->set('success_message', 'Изменения успешно сохранены');
                $this->redirect('/admin/video/');
            }
        }
        
        $view->categories = $this->categories;
        $view->video = $video;
        $this->template->content = $view;
    }
}