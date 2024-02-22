<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserModel;

class LoginController extends Controller
{
    public function index()
    {
        unset($_SESSION['Username'], $_SESSION['Password'], $_SESSION['LoginError']);
        $this->View('/clients/auth/login');
    }
    public function loginUser()
    {
        $username = isset($_POST['Username']) ? trim($_POST['Username']) : '';
        $password = isset($_POST['Password']) ? trim($_POST['Password']) : '';
    
        $_SESSION['Username'] = empty($username) ? "Username cannot be empty" : '';
    
        $_SESSION['Password'] = (empty($password) || !preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) ? "Invalid password format (should include capital letters, numbers, and have at least 8 characters)" : '';
    
        if (empty($_SESSION['Username']) && empty($_SESSION['Password'])) {
            $userModel = new UserModel();
            $user = $userModel->userExists('name', $username);
    
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                header("Location: /");
                exit;
            } else {
                $_SESSION['LoginError'] = "Invalid username or password";
            }
        }
    
        $this->View('/clients/auth/login');
    }
    

    public function logout(){
        unset($_SESSION['user']);
        header("Location: /");
        exit;
    }
}
