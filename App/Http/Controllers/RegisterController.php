<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserModel;

class RegisterController extends Controller
{
    public function index()
    {
        unset($_SESSION['Username'], $_SESSION['Email'], $_SESSION['Password'], $_SESSION['Phone'], $_SESSION['Address'], $_SESSION['registration_success']);
        $this->View('/clients/auth/Register');
    }

    public function registerUser()
    {
        $username = isset($_POST['Username']) ? trim($_POST['Username']) : '';
        $email = isset($_POST['Email']) ? trim($_POST['Email']) : '';
        $password = isset($_POST['Password']) ? trim($_POST['Password']) : '';
        $phone = isset($_POST['Phone']) ? trim($_POST['Phone']) : '';
        $address = isset($_POST['Address']) ? trim($_POST['Address']) : '';
        $role = 1;

        $_SESSION['Username'] = empty($username) ? "Username cannot be empty" : (preg_match('/^[a-zA-Z0-9]{4,}$/', $username) ? '' : "Invalid username format (alphanumeric, at least 4 characters)");

        $_SESSION['Email'] = empty($email) ? "Email address cannot be empty" : (filter_var($email, FILTER_VALIDATE_EMAIL) ? '' : "Invalid email address");

        $_SESSION['Password'] = empty($password) ? "Password cannot be empty" : (preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password) ? '' : "Password must include capital letters, numbers, and have at least 8 characters");

        $_SESSION['Phone'] = empty($phone) ? "Phone number cannot be empty" : (preg_match('/^[0-9]{10,}$/', $phone) ? '' : "Invalid phone number (at least 10 digits)");

        $_SESSION['Address'] = empty($address) ? "Address cannot be empty" : '';

        $userModel = new UserModel();
        if ($userModel->userExists('name', $username)) {
            $_SESSION['Username'] = "Username already exists";
        }

        if ($userModel->userExists('email', $email)) {
            $_SESSION['Email'] = "Email already exists";
        }

        if (empty($_SESSION['Username']) && empty($_SESSION['Email']) && empty($_SESSION['Password']) && empty($_SESSION['Phone']) && empty($_SESSION['Address'])) {
            $userModel->createUser([
                'name' => $username,
                'email' => $email,
                'password' => $password,
                'phone' => $phone,
                'address' => $address,
                'role' => $role,
            ]);

            $_SESSION['registration_success'] = "Registration successful. Please log in.";
            header("Location: /login");
            exit;
        }

        $this->View('/clients/auth/Register');
    }
}
