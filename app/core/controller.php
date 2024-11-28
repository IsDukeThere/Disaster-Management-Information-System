<?php
class controller {
    public function views ($views, $data = []) {
        require_once '../app/views/' . $views . '.php';
    }
}