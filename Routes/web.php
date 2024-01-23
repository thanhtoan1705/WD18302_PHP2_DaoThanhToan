<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Routes\Router;

$router = new Router;


$slug = isset($_GET['slug']) ? $_GET['slug'] : NULL;
$router->get('/',[HomeController::class,'index']);
$router->get('/product',[ProductController::class,'index']);
$router->get('/cart',[CartController::class,'index']);
$router->get('/checkout',[CheckoutController::class,'index']);
$router->get('/login',[LoginController::class,'index']);
$router->post('/login',[LoginController::class,'loginUser']);
$router->get('/register',[RegisterController::class,'index']);
$router->post('/register',[RegisterController::class,'registerUser']);
$router->get('/account',[AccountController::class,'index']);
$router->get('/order',[OrderController::class,'index']);




if($slug){
   $router->get('/product',[ProductController::class,'detail']); 
}
$router->run();