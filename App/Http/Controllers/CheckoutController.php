<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\CartModel;

use App\Models\CheckoutModel;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartModel = new CartModel();
        $cartItems = $cartModel->getCartItems();

        $data = [
            'cartItems' => $cartItems
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paymentMethod = isset($_POST['payment_method']) ? $_POST['payment_method'] : 0;
            $checkoutModel = new CheckoutModel();
            $checkoutModel->addBill($cartItems, $paymentMethod);
            // header("Location: /cart");
        } else {

        }



        $this->View('/clients/checkout/checkout', $data);
    }
}
