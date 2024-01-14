<?php

namespace App\Model;

use App\Model\BaseModel;
use App\Core\Connect;

class UserModel extends BaseModel
{
    public function create(array $data)
    {
        if (isset($data['firstname'], $data['lastname'], $data['email'], $data['password'])) {

            $connect = new Connect();
            $conn = $connect->pdo_get_connection();

            try {
                $query = "INSERT INTO {$this->table} (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->execute([$data['firstname'], $data['lastname'], $data['email'], $data['password']]);
                
            } catch (\PDOException $e) {
                echo "Error: " . $e->getMessage();
            } finally {
                unset($conn);
            }
        } else {
            echo "Error: Some required fields are missing.";
        }
    }
}


