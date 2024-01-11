<?php

namespace App\Controller;

class BaseController{
    public $name;
    public $price;
    public function show()
    {
        return $this->name.'Là mẫu laptop mới nhất 2024 có giá là' . $this->price;
    }
}