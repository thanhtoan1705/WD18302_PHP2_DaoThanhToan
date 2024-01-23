<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller{
    public function index(){
        $this->View('/clients/auth/login');
    }
    public function loginUser()
    {
        $email = $_POST['Email'];
        $password = $_POST['Password'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['Email'] = "Invalid email address";
        }

        if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
            $_SESSION['Password'] = "Password includes capital letters, numbers and has 8 characters";
        }

        $this->View('/clients/auth/Login');
    }
}