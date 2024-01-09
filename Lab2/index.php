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