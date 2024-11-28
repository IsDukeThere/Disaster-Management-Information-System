<?php
class user extends controller {
    public function index() {
        $data = 'user';

        $this->views('../views/user/index', $data);

    }

    public function about() {

    }

}