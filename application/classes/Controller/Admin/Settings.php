<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Settings extends Controller_Admin_Base {

    public function action_index() {

        $view = new View('admin/v_settings');

        $errors = array();

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

        $view->phone = $phone;
        $view->mail = $mail;

        $this->template->content = $view;
    }

}
