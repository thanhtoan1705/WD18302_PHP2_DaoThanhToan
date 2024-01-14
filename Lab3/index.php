<?php
require_once 'vendor/autoload.php';

use App\Controller\AccountController;

$controller = new AccountController();
$controller->index();
