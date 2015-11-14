<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Settings extends Controller_Admin_Base {

    public function action_index() {

        $view = new View('admin/v_settings');

        $errors = array();
        
        $range = range(3,10);
        
        if ($this->request->method() === Request::POST) {

            Database::instance()->begin();

            try {
                $phone = arr::get($_POST, 'phone', null);

                if ($phone AND ! Valid::phone($phone)) {
                    $errors[] = 'Не верный формат телефона';
                } else {
                    DB::query(1, 'update settings set value = :phone where name = \'phone\'')
                            ->param(':phone', $phone)
                            ->execute();
                }

                $mail = arr::get($_POST, 'mail', null);

                if ($mail and ! Valid::email($mail)) {
                    $errors[] = 'Не верный формат email';
                } else {
                    DB::query(1, 'update settings set value = :mail where name = \'mail\'')
                            ->param(':mail', $mail)
                            ->execute();
                }
                
                $count_news = arr::get($_POST, 'count_news', 3);
                
                DB::query(1, 'update settings set value = :count_news where name = \'count_news\'')
                        ->param(':count_news', $count_news)
                        ->execute();
                
                
                $social_vk = arr::get($_POST, 'social_vk', null);

                if ($social_vk and ! Valid::url($social_vk)) {
                    $errors[] = 'Не верный формат url';
                } else {
                    DB::query(1, 'update settings set value = :social_vk where name = \'social_vk\'')
                            ->param(':social_vk', $social_vk)
                            ->execute();
                }
                
                $social_fb = arr::get($_POST, 'social_fb', null);

                if ($social_fb and ! Valid::url($social_fb)) {
                    $errors[] = 'Не верный формат url';
                } else {
                    DB::query(1, 'update settings set value = :social_fb where name = \'social_fb\'')
                            ->param(':social_fb', $social_fb)
                            ->execute();
                }
                
                $social_tw= arr::get($_POST, 'social_tw', null);

                if ($social_tw and ! Valid::url($social_tw)) {
                    $errors[] = 'Не верный формат url';
                } else {
                    DB::query(1, 'update settings set value = :social_tw where name = \'social_tw\'')
                            ->param(':social_tw', $social_tw)
                            ->execute();
                }
                
                $social_yt= arr::get($_POST, 'social_yt', null);

                if ($social_yt and ! Valid::url($social_yt)) {
                    $errors[] = 'Не верный формат url';
                } else {
                    DB::query(1, 'update settings set value = :social_yt where name = \'social_yt\'')
                            ->param(':social_yt', $social_yt)
                            ->execute();
                }

                
            } catch (Exception $e) {
                Database::instance()->rollback();
                throw $e;
            }


            if (!empty($errors)) {
                $view->errors = $errors;
            } else {
                Database::instance()->commit();
                $this->redirect('/admin/settings');
            }
        }




        //phone
        $sql = 'select value from settings where name = \'phone\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $phone = isset($res[0]['value']) ? $res[0]['value'] : '';

        //mail
        $sql = 'select value from settings where name = \'mail\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $mail = isset($res[0]['value']) ? $res[0]['value'] : '';

        
        //count news
        $sql = 'select value from settings where name = \'count_news\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $count_news = isset($res[0]['value']) ? $res[0]['value'] : '';
        
        
        //social
        //vk
        $sql = 'select value from settings where name = \'social_vk\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_vk = isset($res[0]['value']) ? $res[0]['value'] : '';
        $view->social_vk = $social_vk;
        
        //fb
        $sql = 'select value from settings where name = \'social_fb\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_fb = isset($res[0]['value']) ? $res[0]['value'] : null;
        $view->social_fb = $social_fb;
        
        //tw
        $sql = 'select value from settings where name = \'social_tw\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_tw = isset($res[0]['value']) ? $res[0]['value'] : '';
        $view->social_tw = $social_tw;
        
        //yt
        $sql = 'select value from settings where name = \'social_yt\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_yt = isset($res[0]['value']) ? $res[0]['value'] : '';
        $view->social_yt = $social_yt;
        
        $view->phone = $phone;
        $view->mail = $mail;
        $view->counts = array_combine(range(3,10),range(3,10));
        $view->count_news = $count_news;

        $this->template->content = $view;
    }

}
