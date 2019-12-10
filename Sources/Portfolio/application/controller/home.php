<?php

class Home extends Controller {

    public function index() {
        $this->load_view('home/index');
    }

    public function services() {
        $this->load_view('home/services');
    }

    public function about() {
        $this->load_view('home/about');
    }

    public function contact() {
        $this->load_view('home/contact');
    }
}