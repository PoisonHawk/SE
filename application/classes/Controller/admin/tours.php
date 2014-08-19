<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Tours extends Controller_Admin_Base{
    
    public function action_index(){
        
        $tours = array();
        
        $tour = new Model_Tours();
        $tours = $tour->getTours();
        
        $view =  new View('admin/v_tours');
        $view->tours = $tours;
        $this->template->content = $view;
        
        
        
    }
    
    public function action_processtour(){
       
        $errors = array();        
        $id = $this->request->param('id');
        
        $view = new View('admin/v_processform_tours');
        
        $tour = new Model_Tours();
        
        if(isset($id)){
            
            $t = $tour->getTours($id);
            
            $view->date = $t[0]['date'];
            $view->city = $t[0]['city'];
            $view->fest = $t[0]['fest'];
            $view->club = $t[0]['club'];
        }
        
        if(isset($_POST['send'])){         
            
            $date = arr::get($_POST,'date');
            $city = arr::get($_POST,'city');
            $fest = arr::get($_POST,'fest');
            $club = arr::get($_POST,'club');
            
            $post =  new Validation($_POST);
            
            $post->rule('date','not_empty')
                 ->rule('city','not_empty')
                 ->rule('fest','not_empty')
                 ->rule('club','not_empty');
            
            if($post->check()){               
                
                 
                 if(isset($id)){
                    $tour->processTour($date, $city, $fest, $club,$id); 
                 }
                 else{
                    $tour->processTour($date, $city, $fest, $club); 
                 }
                 
                 $this->redirect('/admin/tours');
            }
            else
            {
                $errors = $post -> errors('comments');
                
            }                  
           
        }
        
        $view->errors = $errors;
        $this->template->content = $view;
    }
    
    //todo переделать
    public function action_delete(){
        
        
        $id = $this->request->param('id');  
        
        $tour = new Model_Tours();
        $tour->delTour($id);
        
        $this->redirect('/admin/tours');
    }
    
}

