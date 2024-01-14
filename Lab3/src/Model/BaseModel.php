<?php

namespace App\Model;

use App\Core\Crudable;

abstract class BaseModel implements Crudable
{
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    abstract public function create(array $data);

}


