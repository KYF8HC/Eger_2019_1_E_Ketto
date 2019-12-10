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

        $data['category'] = $model->get_category();
        $data['user'] = $model->get_user();
        $data['text'] = $model->get_text();
        
        require_once 'application/views/template/header.php';
        require_once 'application/views/'.$view.'.php';
        require_once 'application/views/template/footer.php';
    }
    
    public function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }
}