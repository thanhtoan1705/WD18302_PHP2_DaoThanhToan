<?php

namespace App\Models;

use App\Models\CrudInterface;
use App\Traits\QueryBuilder;

abstract class BaseModel implements CrudInterface
{
    use QueryBuilder;

    private $_connection;

    private $_query;

    public function __construct()
    {
        $this->_connection = new Database();
    }


    public function getAll()
    {
        $this->_query = "SELECT * FROM $this->tableName ";
        return $this;
    }

    public function getOne(int $id)
    {
        $this->where('id', '=', $id);
        return $this->first();
    }

    public function create(array $data)
    {
        return $this->insert($data);
    }

    public function update($data)
    {
        $whereUpdate = str_replace('WHERE', '', $this->where);
        $whereUpdate = trim($whereUpdate);
        $tableName = $this->tableName;
        $updateStatus = $this->updateData($tableName, $data, $whereUpdate);
        return $updateStatus;
    }

    public function delete(int $id): bool
    {
        return true;
    }
}
