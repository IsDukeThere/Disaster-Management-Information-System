<?php
class user extends controller
{
    public function index()
    {
        $data = 'user';

        $this->views('user/index', $data);
    }

    public function about()
    {
        $data = 'about';

        $this->views('user/about', $data);
    }
}
