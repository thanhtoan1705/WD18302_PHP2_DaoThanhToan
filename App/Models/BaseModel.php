<?php

namespace App\Models;

use App\Models\CrudInterface;
use App\Traits\QueryBuilder;

abstract class BaseModel implements CrudInterface
{
    use QueryBuilder;

    public $_connection;

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
        // $a = $this->insert($data);
        // $id = $this->_connection->lastId();
        // var_dump($a);
        // echo 'a';
        // exit();
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

    public function delete($condition): bool
    {
        return $this->deleteData($this->tableName, $condition);
    }
}
