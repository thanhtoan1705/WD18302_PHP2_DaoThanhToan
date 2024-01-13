<?php
require_once 'vendor/autoload.php';

// use App\Model\Product;
// use App\Model\BaseModel;
// use App\Controller\BaseController;
// use App\Core\Route;
// use App\Core\Database;
// use App\Model\Cart;
// use App\Model\Bill;

// buoi 6
use App\Core\Base;
$base = new Base();

// var_dump($base);

// echo $base->name. "<br>";

echo $base->getName(). "<br>";

$base->setName("Javascript");

echo $base->getName(). "<br>";

echo Base::$document. "<br>";
//ket thuc phan

// use App\Core\Database;

// $model = new Product();
// $control = new BaseController();
// $route = new Route();
// $Database = new Database();

// $cart = new Cart();
// $bill = new bill();
// echo $bill->infoBill();
// echo $cart->InfoProducts();
// echo $model->BaseModelMethod();


