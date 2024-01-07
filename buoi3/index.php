<?php
require_once "vendor/autoload.php";

use App\Core\Database;
use App\Controller\Admin\ProductController as AdminProductController;
use App\Controller\Client\ProductController as ClientProductController;

$database = new Database();
$products = new AdminProductController();
$productsClinet = new ClientProductController();
// var_dump($database->name);
$database->connect("ahihi");
$database->name;