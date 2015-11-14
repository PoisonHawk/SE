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
            $view->image = $t[0]['image'];
            $view->event_link = $t[0]['event_link'];
        }
        
        if(isset($_POST['send'])){         
            
            $date = arr::get($_POST,'date');
            $city = arr::get($_POST,'city');
            $fest = arr::get($_POST,'fest');
            $club = arr::get($_POST,'club');
            $event_link = arr::get($_POST, 'event_link', null);
            $file = arr::get($_FILES, 'image');
            
            if ($date !== '') {
                $d = explode('-', $date);
                $view->date = mktime(0,0,0,$d[1],$d[0],$d[2]);
            }
            $view->city = $city;
            $view->fest = $fest;
            $view->club = $club;
//            $view->image = $file;
            $view->event_link = $event_link;
            
            if (Upload::not_empty($file)) {
                
                $directory = DOCROOT.'uploads/';
                
                if ($f = Upload::save($file, null, $directory)) {
                   
                    $image = Image::factory($f);
                    
                    $filename = strtolower(Text::random('alnum', 20).'.jpg');
                       
                    $image  ->resize('500')                    
                            ->save($directory.$filename);
                    
                    $image = $filename;
                };
               
            } else {
                $image = arr::get($_POST, 'image');
            }            
            
            $post =  new Validation($_POST);
            
            $post->rule('date','not_empty')
                 ->rule('city','not_empty')
                 ->rule('fest','not_empty')
                 ->rule('club','not_empty')
                 ->rule('event_link', 'url');
            
            if($post->check()){               
                
                 
                 if(isset($id)){
                    $tour->processTour($date, $city, $fest, $club,$event_link, $image, $id); 
                 }
                 else{
                    $tour->processTour($date, $city, $fest, $club, $event_link, $image); 
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

