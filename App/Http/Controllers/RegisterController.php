<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        $this->View('/clients/auth/Register');
    }

    public function registerUser()
    {
        $username = $_POST['Username'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $phone = $_POST['Phone'];

        if (!preg_match('/^[a-zA-Z0-9]{4,}$/', $username)) {
            $_SESSION['Username'] = "Invalid username";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['Email'] = "Invalid email address";
        }

        if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
            $_SESSION['Password'] = "Invalid password";
        }

        if (!preg_match('/^[0-9]{10,}$/', $phone)) {
            $_SESSION['Phone'] = "Invalid phone number";
        }

        $this->View('/clients/auth/Register');
    }
}
