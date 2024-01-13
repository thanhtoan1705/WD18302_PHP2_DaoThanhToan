<?php

namespace App\Model;

use App\Repositories\ModelInterface;
use App\Repositories\BaseModelAbstract;
class BaseModel implements ModelInterface
{
    public $name = "kế thừa rồi nè";

    public function BaseModelMethod(){
        return $this->name;
    }

    public function getAll(){

    }

}
