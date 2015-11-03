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

            $subject = 'sympuls-e';
            $from = (string)$mail;
            
            $message = "Имя: $name \r\n";
            $message .= "Email: <$mail> \r\n";
            $message .= $text_message;
                        
            Email::send($to, "savochkin2010@yandex.ru", $subject, $message, $html = false);         
          
        }
            
         //phone
        $sql = 'select value from settings where name = \'phone\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $phone = isset($res[0]['value']) ? $res[0]['value'] : '';

        //mail
        $sql = 'select value from settings where name = \'mail\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $mail = isset($res[0]['value']) ? $res[0]['value'] : '';

                
        $view = new View('v_contacts');
        $view->phone = $phone;
        $view->mail = $mail;
        $this->template->content = $view;        
    }
}


