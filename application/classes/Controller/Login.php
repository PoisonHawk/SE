<?php

class Controller_Login extends Controller_Template {

    public $template = 'v_login';

    public function action_index() {


        if ($this->request->method() === Request::POST) {

            $auth = Auth::instance();

            $login = arr::get($_POST, 'login');
            $password = arr::get($_POST, 'password');


            if ($auth->login($login, $password, TRUE)) {

                $this->redirect('/admin/index');
            } else {

                $this->template->errors = 'Неверное имя или пароль';
            }
        }
    }

    public function action_logout() {
        Auth::instance()->logout();

        $this->redirect('/admin');
    }

    public function action_addadmin() {

        $this->auto_render = false;

        return;

        $model = ORM::factory('User');
        $model->values(array(
            'username' => $username,
            'password' => $password,
            //'password_confirm' => 'admin',
            'email' => $email,
        ));
        $model->save();
        // не забудьте добавить login и admin роли
        // добавляем роль; add() выполнит запрос немедленно:
        $model->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
        $model->add('roles', ORM::factory('Role')->where('name', '=', 'admin')->find());
    }

}
