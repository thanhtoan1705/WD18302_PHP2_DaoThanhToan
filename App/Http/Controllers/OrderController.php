<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class OrderController extends Controller{
    public function index(){
        $this->View('/clients//Order/Order');
    }
}