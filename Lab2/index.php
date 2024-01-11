<?php
require_once 'vendor/autoload.php';

use App\Model\BaseModel;
use App\Controller\BaseController;
use App\Core\Route;
use App\Core\Database;

$model = new BaseModel();
$control = new BaseController();
$route = new Route();
$Database = new Database();

$control->name = "Dell XPS 9530 ";
$control->price = " 32.000.000 VND";
echo $control->show().'<br>';

$model->user = "thanhtoan123".'<br>';
echo $model->Update();

$route->route = "admin";
echo $route->AddMiddleware().'<br>';