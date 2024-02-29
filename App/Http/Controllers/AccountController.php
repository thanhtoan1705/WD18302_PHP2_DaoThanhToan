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
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        if (empty($name) || empty($email) || empty($phone) || empty($address)) {
            $_SESSION['error1'] = "Please fill in all required fields.";
            header("Location: /account");
            exit;
        }
    

    
        if (!ctype_digit($phone)) {
            $_SESSION['phone'] = "Phone number must contain only digits.";
            header("Location: /account");
            exit;
        }
    
        $existingUser = $this->accountModel->userExists('email', $email);
        if ($existingUser && $existingUser['id'] != $id) {
            $_SESSION['email'] = "Email is already in use.";
            header("Location: /account");
            exit;
        }
    
        $existingUser = $this->accountModel->userExists('name', $name);
        if ($existingUser && $existingUser['id'] != $id) {
            $_SESSION['name'] = "Username is already in use.";
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

