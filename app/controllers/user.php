<?php
class user extends controller
{
    public function index()
    {
        $data = [];

        $this->views('user/index', $data);
    }

    public function about()
    {
        $data = [];

        $this->views('user/about', $data);
    }
}
