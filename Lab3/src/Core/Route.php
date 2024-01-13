<?php

namespace App\Core;

class Route{
    public $route;

    public function AddMiddleware()
    {
        return $this->route.' Là đường dẫn';
    }
}