<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_index extends Controller_Base {

    public $title = 'Новости';
    
    public function before(){
         $this->scripts = array('/js/slider.js');
        parent::before();
                
    }

    public function action_index() {
        
        //получаем количество новостей
        $sql = 'select value as count_news from settings where name = \'count_news\'';
        $res = DB::query(1, $sql)
                ->execute()
                ->as_array();

        $count_news = $res[0]['count_news'];
        
        //загружаем новости
        $last_news = ORM::factory('News')->order_by('date', 'desc')->limit($count_news)->find_all();
       
        $tours = ORM::factory('Tours')
                ->where('date', '>', time())
                ->order_by('date')
                ->limit(10)
                ->find_all();
                
        //последнее добавленное видео
        $last_video = ORM::factory('Video')->order_by('created', 'Desc')->limit(1)->find();

        //последний добавленный альбом фотографий
        $last_image_album = ORM::factory('Gallery')->order_by('created', 'desc')->limit(1)->find();
        
        $photos =  array();
                
        $path = DOCROOT.'/photos/'.$last_image_album->id.'/thumbs';
        
        $iterator = new FilesystemIterator($path);
        foreach($iterator as $item){
            $photos[] = $item->getFilename();            
        }
        
        
        $last_album = ORM::factory('Albums')
                ->order_by('year', 'desc')
                ->order_by('created', 'desc')
                ->limit(1)->find();
        
        $storelinks = ORM::factory('Storealbums')
                ->where('album_id', '=', $last_album->id)
                ->find_all();
                
        
        $content = View::factory('v_index', array(
            'news' => $last_news, 
            'tours' => $tours, 
            'last_video' => $last_video,
            'last_image_album' => $last_image_album->id,
            'last_album' => $last_album,
            'store_links' => $storelinks,
            'photos' => $photos));

        $this->template->title = $this->title;
        $this->template->content = $content;
    }

    public function action_band() {
        $this->template->title = 'Группа';

        $content = View::factory('v_band');
        $this->template->content = $content;
    }

}
