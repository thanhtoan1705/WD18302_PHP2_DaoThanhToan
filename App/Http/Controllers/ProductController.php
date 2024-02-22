<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;


class ProductController extends Controller
{
    public function index()
    {
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts();

        $data = [
            'products' => $products
        ];

        $this->View('/clients/product/index', $data);
    }

    public function detail()
    {
        $productModel = new ProductModel();
        $product = $productModel->getProductById($_GET['slug']);

        $data = [
            'product' => $product
        ];

        $this->View('/Clients/Product/Detail', $data);
    }
}
