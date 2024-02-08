<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CartModel;

class CartController extends Controller{

    private $cartModel;

    public function __construct()
    {
        $this->cartModel = new CartModel();
    }
    public function index(){

        $carts = $this->cartModel->getAllCarts();

        $data = [
            'carts' => $carts
        ];

        $this->View('/clients/cart/cart', $data);
    }

    public function addToCart()
    {
        $productId = $_POST['productId'];
        $userId = $_POST['userId'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $total = $_POST['price']*$_POST['quantity'];

        $cartModel = new CartModel();
        $cartModel->addToCart($productId, $userId, $quantity, $price, $image, $total);

        header("Location: /cart");
        exit();
    }

    public function deleteCart(){
        $carts = $this->cartModel->getCartById($_GET['slug']);
    }
}