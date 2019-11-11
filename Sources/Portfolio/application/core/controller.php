<?php

class Controller {

    public function __construct() {
        
    }

    public function load_model($model) {
        require_once 'application/models/'.$model.'.php';
        return new $model;
    }

    public function load_view($view, $data = []) {
        $model = $this->load_model('admin_model');

        $menu = $model->get_menu();
        
        require_once 'application/views/template/header.php';
        require_once 'application/views/'.$view.'.php';
        require_once 'application/views/template/footer.php';
    }
}