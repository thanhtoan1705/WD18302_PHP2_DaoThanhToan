<?php

namespace App\Model;

class Bill extends Cart
{
    public function infoBill()
    {
        return $this->name;
    }
}
