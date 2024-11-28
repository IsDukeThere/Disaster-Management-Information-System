<?php
class controller {
    public function views ($views, $data = []) {
        require_once '../views' . $views . '.php';
    }
}