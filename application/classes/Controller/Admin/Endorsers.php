<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Endorsers extends Controller_Admin_Base {

    public function action_index() {

        $endorsers = ORM::factory('Endorser')->find_all();

        $view = new View('admin/v_endorser/v_index');
        $view->endorsers = $endorsers;

        if ($message = Session::instance()->get('success_message')) {

            $view->message = $message;
            Session::instance()->delete('success_message');
        }

        if ($error_message = Session::instance()->get('error_message')) {

            $view->error_message = $error_message;
            Session::instance()->delete('error_message');
        }


        $this->template->content = $view;
    }

    public function action_item() {
        $view = new View('admin/v_endorser/v_index');

        $this->template->content = $view;
        $errors = array();
        $id = $this->request->param('id');

        $view = new View('admin/v_endorser/v_item');

        $endorser = new Model_Endorser();

        if (isset($id)) {
            $endorser = new Model_Endorser($id);

            $view->name = $endorser->name;
            $view->image = $endorser->image;
            $view->link = $endorser->link;
        }

        if (isset($_POST['send'])) {

            $name = arr::get($_POST, 'name');
            $link = arr::get($_POST, 'link', null);
            $file = arr::get($_FILES, 'image');

            $view->name = $name;
            $view->link = $link;
                        
            //todo ghjdерка на тип и размер
            if (Upload::not_empty($file)) {

                if ($f = Upload::save($file, null, UPLOADSPATH)) {

                    $image = Image::factory($f);

                    $filename = strtolower(Text::random('alnum', 20) . '.png');

                    $image->resize('150')
                            ->save(UPLOADSPATH . $filename);

                    $image = $filename;
                } else {
                    $errors[] = 'Ошибка при загрузке файла';
                };
            } else {
                $image = arr::get($_POST, 'image');
            }

            if (!Valid::not_empty($name)) {
                $errors[] = 'Название не должно быть пустым';
            }

            if ($link and ! Valid::url($link)) {
                $errors[] = 'Ссылка должна быть корректным Url адресом';
            }

            if (!$id and ! $image) {
                $errors[] = 'Выберите изображение для загрузки';
            }
            
            if (!Upload::type($file, array('png'))) {
                $errors[] = 'Изображение должно быть в формате png';
            }

            if (empty($errors)) {

                $endorser->name = $name;
                $endorser->link = $link;
                $endorser->image = $image;
                $endorser->save();

                $this->redirect('/admin/endorsers');
            }
        }

        $view->errors = $errors;
        $this->template->content = $view;
    }

    /**
     * Удаляет запиьс из Бд и изображение
     */
    public function action_delete() {

        $id = $this->request->param('id');

        $view = new View('admin/v_endorser/v_index');

        $endorser = new Model_Endorser($id);

        if ($endorser->loaded()) {

            $filename = $endorser->image;

            Database::instance()->begin();

            try {
                $endorser->delete();

                // если файл существует
                $file = UPLOADSPATH . $filename;

                if (file_exists($file) AND is_file($file)) {
                    unlink($file);
                }
            } catch (Exception $e) {
                Database::instance()->rollback();

                //todo логирование ошибки

                Session::instance()->set('error_message', 'При удалении произошла ошибка');
                $this->redirect('/admin/endorsers');
            }

            Database::instance()->commit();

            Session::instance()->set('success_message', 'Запись успешно удалена');
            $this->redirect('/admin/endorsers');
        } else {
            Session::instance()->set('error_message', 'При удалении произошла ошибка');
            $this->redirect('/admin/endorsers');
        }
    }

}
