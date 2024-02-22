<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderModel;

class OrderController extends Controller
{
    public function index()
    {
        $orderModel = new OrderModel();
        $userId = $_SESSION['user']['id'];
        $orders = $orderModel->getAll()->joinBill()->joinProduct()->joinUser($userId)->get();

        $data = [
            'orders' => $orders
        ];

        $this->view('/clients/Order/Order', $data);
    }
}
