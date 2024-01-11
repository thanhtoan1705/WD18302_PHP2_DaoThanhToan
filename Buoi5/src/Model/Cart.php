<?php

namespace App\Model;

class Cart extends Product
{
    // public $name = "Sản phẩm 1";

    public function InfoProducts(){
        return $this->name;
    }
}
