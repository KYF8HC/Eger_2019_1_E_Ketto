<?php

class Gallery extends Controller {

    public $model;

    public function __construct() {
        parent::__construct();

        $this->model = $this->load_model('gallery_model');
    }

    public function index() {
        $data = $this->model->get_img();

        $this->load_view('gallery/index', $data);
    }
}