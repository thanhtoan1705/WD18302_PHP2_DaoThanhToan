<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AccountController extends Controller{
    public function index(){
        $this->View('/clients/auth/Account');
    }
}