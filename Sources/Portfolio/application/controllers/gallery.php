<?php

class Gallery extends Controller {

    public $model;

    public function __construct() {
        parent::__construct();

        $this->model = $this->load_model('gallery_model');
    }

    public function index($category_id = '') {
        $data['img'] = $this->model->get_img($category_id);

        $this->load_view('gallery/index', $data);
    }
}