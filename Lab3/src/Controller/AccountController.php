<?php

namespace App\Controller;

use App\Core\Form;
use App\Model\UserModel;

class AccountController
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'confirmPassword' => $_POST['confirmPassword']
            ];
            
            $userModel = new UserModel('users');
            $userModel->create($data);
            
            $_SESSION['success_message'] = 'Tạo tài khoản thành công!';
        }
        
        require_once 'src/View/index.php';
    }
}
