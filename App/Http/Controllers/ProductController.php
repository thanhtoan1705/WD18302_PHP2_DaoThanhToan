<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductController extends Controller{
    // index show list product
    public function index(){
        $this->View('/clients/product/index');
    }

    // show chi tiết
    public function detail(){
        $this->View('/clients/product/detail');
    }
}