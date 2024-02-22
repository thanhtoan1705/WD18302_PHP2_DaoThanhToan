<?php

namespace App\Models;

use App\Models\BaseModel;

class UserModel extends BaseModel
{
    protected $table = 'users';

    public function createUser($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $this->table($this->table)->create($data);
    }    

    public function userExists($field, $value)
    {
        return $this->table($this->table)
            ->where($field, '=', $value)
            ->first();
    }

    public function updateAccount($id, $data) {
        
        $updated = $this->table($this->table)->where('id', '=', $id)->update($data);
    
        if ($updated) {
            $updatedUser = $this->getAccountById($id);
    
            if (!empty($updatedUser)) {
                $_SESSION['user'] = $updatedUser;
            }
        }
    
        return $updated;
    }              

    public function getAccountById($accountId)
    {
        return $this->table($this->table)->getOne($accountId);
    }
}