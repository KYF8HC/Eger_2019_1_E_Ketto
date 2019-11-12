<?php

class admin_model extends Model {

    public function get_user() {
        return $this->getRecord("SELECT * FROM `user` WHERE `id` =".USER_ID);
    }

    public function update_user() {

    }

    public function update_category() {

    }

    public function update_img() {

    }
}