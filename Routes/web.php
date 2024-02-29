<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginGoogleController;
use App\Routes\Router;

$router = new Router;


$slug = isset($_GET['slug']) ? $_GET['slug'] : NULL;
$router->get('/', [HomeController::class, 'index']);
$router->get('/product', [ProductController::class, 'index']);
$router->get('/cart', [CartController::class, 'index']);
$router->post('/cart', [CartController::class, 'processCart']);
$router->get('/checkout', [CheckoutController::class, 'index']);
$router->post('/checkout', [CheckoutController::class, 'index']);
$router->get('/login', [LoginController::class, 'index']);
$router->post('/login', [LoginController::class, 'loginUser']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->get('/register', [RegisterController::class, 'index']);
$router->post('/register', [RegisterController::class, 'registerUser']);
$router->get('/account', [AccountController::class, 'index']);
$router->post('/account', [AccountController::class, 'updateAccount']);
$router->get('/order', [OrderController::class, 'index']);




if ($slug) {
   $router->get('/product', [ProductController::class, 'detail']);
   $router->get('/cart', [CartController::class, 'deleteCart']);
}

$router->get('auth/google', [LoginGoogleController::class, 'redirectToGoogle']);
$router->get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);
$router->run();
