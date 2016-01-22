<?php

class Controller_Admin_Band extends Controller_Admin_Base {

    public $errors = array();
    public $social = array('vk'=>null, 'fb'=>null);

    public function before() {
//        echo phpinfo();
        parent::before();
               
        $scripts = array(
            '/js/tinymce/tinymce.min.js',
        );

        $this->template->scripts = $scripts;
    }

    public function action_index() {

        $view = new View('admin/v_band/v_index');

        $errors = array();

        $band = ORM::factory('Page')->where('uri', '=', 'band')->find();

        if (!$band->loaded()) {

            $band = new Model_Page();
        }

        if ($this->request->method() === Request::POST) {

            $band->content = arr::get($_POST, 'content');
            $band->active = arr::get($_POST, 'active', 0);
            $band->uri = 'band';
            $band->alias = 'se';
            $band->title = 'se';
            try {
                $band->save();
            } catch (Exception $e) { 
                throw new Exception($e->getMessage());
                $this->errors[] = 'Невозможно сохранить изменения';
            }

            if (!empty($this->errors)) {
                $view->errors = $this->errors;
            } else {
                Session::instance()->set('success_message', 'Информация успешно сохранена');
                $this->redirect('/admin/band');
            }
        }
        
        $members = ORM::factory('Page')
                ->where('uri', '=', 'member')
                ->order_by('title', 'asc')
                ->find_all();
        
        $view->band = $band;
        $view->members = $members;
        $this->template->content = $view;
    }

    public function action_members() {

        $members = ORM::factory('Page')
                ->where('uri', '=', 'member')
                ->order_by('title', 'asc')
                ->find_all();


        $view = new View('admin/v_band/v_members');
        $view->members = $members;
        $this->template->content = $view;
    }

    public function action_member() {


        $id = $this->request->param('id');

        if ($id) {
            $member = new Model_Page($id);
        } else {
            $member = new Model_Page();
        }

        $errors = array();

        $view = new View('admin/v_band/v_member');

        if ($this->request->method() === Request::POST) {
            
            $member->title = $this->request->post('title');
            $member->alias = $this->request->post('alias');
            $member->active = $this->request->post('active');
            $member->content = htmlspecialchars(strip_tags(trim($this->request->post('content'))));
            $member->uri = 'member';
            $member->weight = $this->request->post('weight'); 
            $member->social = $this->request->post('social');

            if (uploadimage::notEmpty($_FILES['image'])) {

                $uploadimage = new uploadimage($_FILES['image']);

                if ($uploadimage->check()) {
                    $filename = $uploadimage
                            ->setFolder(DOCROOT . 'uploads/')
                            ->setDimension(150, 150)
                            ->save();
                    $member->image = $filename;
                    $view->filename = $filename;
                } else {
                    $errors[] = $uploadimage->error();
                }
            }


            if ($id) {
                $member->updated = date('Y-m-d', time());
            } else {
                $member->created = date('Y-m-d', time());
            }

            try {
                $member->save();
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('page');
            }

            if (!empty($errors)) {
                $view->errors = $errors;
            } else {
                Session::instance()->set('success_message', 'Изменения успешно сохранены');
                $this->redirect('/admin/band/members');
            }
        }

        $view->members = ORM::factory('Page')
                ->where('uri', '=', 'member')
//                ->order_by('weight', 'desc')
                ->order_by('title', 'asc')
                ->find_all();

        $view->weights = range(-50, 50);
        $view->member = $member;
        $this->template->content = $view;
    }

}
