<?php defined('SYSPATH') or die('No direct script access.');

class Controller_index extends Controller_Base
{
    public $title = 'Новости';
    
    public function action_index()
    {
       
       
       $news = new Model_News();
       
       $last_news = $news->getNews();
       
       $content = View::factory('v_index', array('news'=>$last_news));
       
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

