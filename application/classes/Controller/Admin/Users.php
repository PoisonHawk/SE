<?php

class Controller_Admin_Users extends Controller_Admin_Base{
    
    public function before(){
        
        //todo запрет доступа не sa;
        parent::before();
        
        if (!Auth::instance()->logged_in('sa')) {
            throw new HTTP_Exception_403('Доступ запрещен');
        }
        
    }
    
    public function action_index(){
        
        $users = ORM::factory('User')->find_all();        
               
        $view =  new View('admin/v_users/v_index');
        $view->users = $users;
        $this->template->content = $view;
        
    }
    
    public function action_user(){
        
        $id = $this->request->param('id');
        
        if (!$id) {
            $user =  new Model_User();
        } else {
            $user = new model_User($id);
        }
        
        $view =  new View('admin/v_users/v_user');
        
        if ($this->request->method() === Request::POST) {
            
            $username = arr::get($_POST, 'username');
            $password = arr::get($_POST, 'password');
            $role = arr::get($_POST, 'role');
            $email = arr::get($_POST, 'email');
            
            
            $errors =  array();
            if (!Valid::not_empty($username)) {
                $errors[] = 'Поле username не должно быть пустым';
            };
            
            if (!Valid::not_empty($password)) {
                $errors[] = 'Поле password не должно быть пустым';
            };
            
            if (empty($errors)) {
                
                $user->username = $username;
                $user->password = $password;
                $user->email = $email;
                $user->save();
                
                
                $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
                
                if ($role == 'admin') {
                    $user->add('roles', ORM::factory('Role')->where('name', '=', 'admin')->find());
                }
                
                $this->redirect('/admin/users/');
                
            } else {                
                $view->errors = $errors;                
            }
            
        }
        
        
        
        $view->user = $user;
        $view->users = ORM::factory("User")->find_all();
        $this->template->content = $view;
        
    }
    
    
    public function action_remove(){
        
        $id = $this->request->param('id');
        
        $this->auto_render= false;
        
        if (!$id) {
            
            return;
        }
        
        ORM::factory('User', $id)->delete();
        
        $this->redirect('/admin/users');
        
    }
    
        
}