<?php

class Admin extends Controller {

    public $model;

    public function __construct() {
        parent::__construct();

        $this->model = $this->load_model('admin_model');
    }

    public function index() {
        $this->load_view('admin/index');
    }
}