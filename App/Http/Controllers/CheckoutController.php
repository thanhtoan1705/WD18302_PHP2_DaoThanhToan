<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller{
    public function index(){
        $this->View('/clients/checkout/checkout');
    }
}