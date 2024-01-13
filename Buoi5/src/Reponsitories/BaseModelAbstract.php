<?php

namespace App\Repositories;

abstract class BaseModelAbstract{
    
    protected $model;

    public function getModel(){
        return $this->model;
    }

}