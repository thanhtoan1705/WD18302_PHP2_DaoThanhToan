<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CartModel;

class CartController extends Controller
{

    private $cartModel;

    public function __construct()
    {
        $this->cartModel = new CartModel();
    }
    public function index()
    {
        $userId = $_SESSION['user']['id'];

        $carts = $this->cartModel->getAllCartsByUserId($userId);

        $data = [
            'carts' => $carts
        ];

        $this->View('/clients/cart/cart', $data);
    }

    public function addToCart()
    {
        $productId = $_POST['productId'];
        if (!isset($_SESSION['user'])) {
            $_SESSION['error_message'] = 'Please log in to add products to cart.';
            header("Location: /product/$productId");
            exit();
        }

        $productId = $_POST['productId'];
        $userId = $_POST['userId'];
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $total = $_POST['price'] * $_POST['quantity'];

        $cartModel = new CartModel();
        $cartModel->addToCart($productId, $userId, $name, $quantity, $price, $image, $total);

        header("Location: /cart");
        exit();
    }

    public function deleteCart()
    {
        $cartId = $_GET['slug'];

        $deleteStatus = $this->cartModel->deleteCart($cartId);

        if ($deleteStatus) {
            header("Location: /cart");
            exit();
        } else {
            echo 'chưa xóa được';
        }
    }

    public function getCartItemCount()
    {
        if (isset($_SESSION['user'])) {
            $userId = $_SESSION['user']['id'];
            $itemCount = $this->cartModel->getCartItemCount($userId);
            return $itemCount;
        }

        return 0;
    }
}
