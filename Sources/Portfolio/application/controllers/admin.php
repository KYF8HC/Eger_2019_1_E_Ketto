<?php

class Admin extends Controller {

    public $model;

    public function __construct() {
        parent::__construct();

            $this->model = $this->load_model('admin_model');
    }

    public function index() {

        if (isset($_SESSION['user_id'])) {
            if (empty($_POST)) {
                $data['texts'] = $this->model->get_text();
                $this->_render_page('index', $data);

            } else {
                $this->model->update_text();
                $this->redirect(URL.'admin');
            }
        } else
            $this->redirect(URL.'admin/login');
    }

    public function contact() {

        if (isset($_SESSION['user_id'])) {

            if (empty($_POST)) {
                $this->_render_page('contact');

            } else {
                $this->model->update_user();
                $this->redirect(URL.'admin/contact');
            }
        } else
            $this->redirect(URL.'admin/login');
    }

    public function gallery() {

        if (isset($_SESSION['user_id'])) {
            $data['category'] = $this->model->get_category();
            $data['imgs'] = $this->model->get_img();
            $this->_render_page('gallery', $data);
        } else
            $this->redirect(URL.'admin/login');
    }

    public function login() {

        if (!empty($_POST) && $this->model->verify_user())
            $this->redirect(URL.'admin');
        else
            require_once 'application/views/admin/login.php';
    }

    public function logout() {
        session_unset();
        $this->redirect(URL);
        sesison_start();
    }

    public function save_category() {
        $this->model->save_category();
        $this->redirect(URL.'admin/gallery');
    }

    public function save_image() {
        $this->model->save_image();
        $this->redirect(URL.'admin/gallery');
    }

    public function delete($table = NULL, $id = NULL) {
        
        if ($table != NULL && $id != NULL)
            $this->model->delete($table, $id);
        
        $this->redirect(URL.'admin/gallery');
    }

    // send data to javascript
    public function json() {
        $categorys = $this->model->get_category();
        echo json_encode($categorys);
    }

    protected function _render_page($view, $data = []) {
        $data['user'] = $this->model->get_user();

        require_once 'application/views/admin/header.php';
        require_once 'application/views/admin/'.$view.'.php';
        require_once 'application/views/admin/footer.php';
    }
}