<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;

class HomeController extends Controller
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAllProducts();

        $data = [
            'products' => $products
        ];

        return $this->View('/Clients/Home/index', $data);
    }
}

