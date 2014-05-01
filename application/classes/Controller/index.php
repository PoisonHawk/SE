<?php defined('SYSPATH') or die('No direct script access.');

class Controller_index extends Controller_Base
{
    public $title = 'Новости';
    
    public function action_index()
    {
       
       
       $news = new Model_News();
       
       $last_news = $news->getNews();
       
       $t = new Model_Tours();
       $tours = $t->getTours();
       
       $content = View::factory('v_index', array('news'=>$last_news,'tours'=>$tours));
       
       $this->template->title = $this->title;
       $this->template->content = $content;
    }
    
    public function action_band()
    {
       $this->template->title = 'Группа';
       
       $content = View::factory('v_band');
       $this->template->content = $content;
    }
}

