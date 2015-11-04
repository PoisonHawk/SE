<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_index extends Controller_Base {

    public $title = 'Новости';

    public function action_index() {
        
        //получаем количество новостей
        $sql = 'select value as count_news from settings where name = \'count_news\'';
        $res = DB::query(1, $sql)
                ->execute()
                ->as_array();

        $count_news = $res[0]['count_news'];
        
        //загружаем новости
        $last_news = ORM::factory('News')->order_by('date', 'desc')->limit($count_news)->find_all();
        
        $t = new Model_Tours();
        $tours = $t->getTours();

        $last_video = ORM::factory('Video')->order_by('created', 'Desc')->limit(1)->find();

        $content = View::factory('v_index', array('news' => $last_news, 'tours' => $tours, 'last_video' => $last_video));

        $this->template->title = $this->title;
        $this->template->content = $content;
    }

    public function action_band() {
        $this->template->title = 'Группа';

        $content = View::factory('v_band');
        $this->template->content = $content;
    }

}
