<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserModel;

class AccountController extends Controller {
    private $accountModel;

    public function __construct() {
        $this->accountModel = new UserModel();
    }

    public function index() {
        unset($_SESSION['error'], $_SESSION['success']);
        $this->view('/clients/auth/Account');
    }

    public function updateAccount() {
        $requiredFields = ['name', 'email', 'phone', 'address'];
        
        foreach ($requiredFields as $field) {
            if (empty($_POST[$field])) {
                $_SESSION['error'] = "Please fill in all required fields.";
                header("Location: /account");
                exit;
            }
        }
    
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
    
        if (!ctype_digit($phone)) {
            $_SESSION['error'] = "Phone number must contain only digits.";
            var_dump( $_SESSION['error']);
            die;
            header("Location: /account");
            exit;
        }
    
        $existingUser = $this->accountModel->userExists('email', $email);
        if ($existingUser && $existingUser['id'] != $id) {
            $_SESSION['error'] = "Email is already in use.";
            header("Location: /account");
            exit;
        }
    
        $existingUser = $this->accountModel->userExists('name', $name);
        if ($existingUser && $existingUser['id'] != $id) {
            $_SESSION['error'] = "Username is already in use.";
            header("Location: /account");
            exit;
        }
    
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => "'" . $address . "'",
        ];
    
        $updated = $this->accountModel->updateAccount($id, $data);
    
        if ($updated) {
            $_SESSION['success'] = "Account updated successfully.";
        } else {
            $_SESSION['error'] = "Failed to update account.";
        }
    
        $this->View('/clients/auth/account');
    }
    
    
    
}

