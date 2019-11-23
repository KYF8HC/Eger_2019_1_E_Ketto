<?php

class Admin extends Controller {

    public $model;

    public function __construct() {
        parent::__construct();

        $this->model = $this->load_model('admin_model');
    }

    public function index() {
        if (isset($_SESSION['user_id'])) {
            $data['user'] = $this->model->get_user();        
            $data['category'] = $this->model->get_category();
            $data['imgs'] = $this->model->get_img();
            
            require_once 'application/views/admin/index.php';
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
    }

    public function update_user() {
        $this->model->update_user();
        $this->redirect(URL.'admin');
    }

    public function save_category() {
        $this->model->save_category();
        $this->redirect(URL.'admin');
    }

    public function delete($table = NULL, $id = NULL) {
        
        if ($table != NULL && $id != NULL)
            $this->model->delete($table, $id);
        
        $this->redirect(URL.'admin');
    }
}