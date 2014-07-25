<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contacts extends Controller_Base{
    
    public function action_index(){
        
        
        if(!empty($_POST)){
            
//            echo "<pre/>";
//            print_r($_POST);
            
            $name = arr::get($_POST,'name');
            $mail = arr::get($_POST,'name1');
            $text_message =  arr::get($_POST,'message');
            
            
            $config = Kohana::$config->load('email');
            
           
            Email::connect($config);
          

            $to = 'poisonhawk@yandex.ru';
            $subject = 'sympuls-e';
            $from = $mail;
            $message = $text_message;

            Email::send($to, $from, $subject, $message, $html = false);
            
        }
        
        
        $view = new View('v_contacts');
        $this->template->content = $view;
        
    }
}


