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
        $data = [
            'name' => isset($_POST['name']) ? $_POST['name'] : '',
            'email' => isset($_POST['email']) ? $_POST['email'] : '',
            'phone' => isset($_POST['phone']) ? $_POST['phone'] : '',
            'address' => isset($_POST['address']) ? $_POST['address'] : '',
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

