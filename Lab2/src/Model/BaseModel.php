<?php

namespace App\Model;

class BaseModel
{
    public $user;
    
    public function Update()
    {
        return $this->user.' là tên tài khoản';
    }
}
