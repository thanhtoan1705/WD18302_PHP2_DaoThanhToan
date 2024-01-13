<?php

namespace App\Model;

use App\Model\BaseModel;

class UserModel extends BaseModel
{
    public function create(array $data)
    {
        $this->validateData($data);
        $query = "INSERT INTO {$this->table} (name, email) VALUES ('{$data['name']}', '{$data['email']}')";
        $this->executeQuery($query);
    }

    public function read($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = $id";
        $this->executeQuery($query);
    }

    public function update($id, array $data)
    {
        $this->validateData($data);
        $query = "UPDATE {$this->table} SET name = '{$data['name']}', email = '{$data['email']}' WHERE id = $id";
        $this->executeQuery($query);
    }

    public function delete($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = $id";
        $this->executeQuery($query);
    }
}
