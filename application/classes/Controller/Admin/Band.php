<?php

class Controller_Admin_Band extends Controller_Admin_Base{
    
    public $errors = array();
    
    public function before() {
        parent::before();
        
        $scripts = array(
            '/js/tinymce/tinymce.min.js',
        );
        
        $this->template->scripts = $scripts;
    }
    
    public function action_index(){
        
        $view = new View('admin/v_band/v_index');
               
        $errors = array();
        
        $band = ORM::factory('Page')->where('uri', '=', 'band')->find();
        
        if (!$band->loaded()) {
           
            $band = new Model_Page();
        }
        
        if ($this->request->method() === Request::POST) {
                                            
            $band->content = arr::get($_POST, 'content');           
            $band->active = arr::get($_POST, 'active', 0);
            $band->uri = 'band';
            
            try{
                $band->save();
            } catch (Exception $e) {
                $this->errors[] = 'Невозможно сохранить изменения';                
            }
            
            if (!empty($this->errors)) {
                $view->errors =$this->errors;
            } else {
                Session::instance()->set('success_message', 'Информация успешно сохранена');
                $this->redirect('/admin/band');
            }
            
        }
        
        $view->band = $band;
        $this->template->content = $view;
        
    }
    
    
    public function action_members(){
        
        $members = ORM::factory('Page')->where('uri','=','member')->find_all();
                
      
        $view = new View('admin/v_band/v_members');
        $view->members = $members;
        $this->template->content = $view;
    }
    
    
    public function action_member(){
        
        
        $id = $this->request->param('id');
                
        if ($id) {
        $member = new Model_Page($id);
        } else {
            $member = new Model_Page();
        }
        
        $errors = array();
        
        $view = new View('admin/v_band/v_member');
        
        if ($this->request->method() === Request::POST) {
                        
            $member->title = $this->request->post('title');
            $member->alias = $this->request->post('alias');
            $member->active = $this->request->post('active');
            $member->uri = 'member';
            
            try {
                $member->save();
                
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('page');
            }
            
            if (!empty($errors)) {
                $view->errors = $errors;
            } else {
                Session::instance()->set('success_message', 'Изменения успешно сохранены');
                $this->redirect('/admin/band/members');
            }
        }
        
       
        $view->member = $member;
        $this->template->content = $view;
        
    }
    
}

