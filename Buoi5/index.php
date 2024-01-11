<?php
require_once 'vendor/autoload.php';

// use App\Model\Product;
// use App\Model\BaseModel;
// use App\Controller\BaseController;
// use App\Core\Route;
// use App\Core\Database;
// use App\Model\Cart;
use App\Model\Bill;

// $model = new Product();
// $control = new BaseController();
// $route = new Route();
// $Database = new Database();

// $cart = new Cart();
$bill = new bill();
echo $bill->infoBill();
// echo $cart->InfoProducts();
// echo $model->BaseModelMethod();