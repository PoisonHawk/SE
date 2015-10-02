<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contacts extends Controller_Base{
    
    public $title = 'Контакты';
    
    public function action_index(){
        
        
        if(!empty($_POST)){
            
            $name = arr::get($_POST,'name');
            $mail = arr::get($_POST,'name1');
            $text_message =  arr::get($_POST,'message');
                        
            $config = Kohana::$config->load('email');            
           
            Email::connect($config);
          
            $to = Kohana::$config->load('settings.email');
            
//            echo "<pre/>";
//            print_r($to);
//            die();
            $subject = 'sympuls-e';
            $from = (string)$mail;
            
            $message = "Имя: $name \r\n";
            $message .= "Email: <$mail> \r\n";
            $message .= $text_message;
                        
            Email::send($to, "savochkin2010@yandex.ru", $subject, $message, $html = false);         
          
        }
                
        $view = new View('v_contacts');
        $this->template->content = $view;        
    }
}


