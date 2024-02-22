<?php

namespace App\Models;
use App\Helpers\MailHelper;

class CheckoutModel extends BaseModel
{

    protected $table = 'bills';
    protected $billDetailsTable = 'bill_details';

    public function addBill($cartItems, $paymentMethod)
    {
        $subtotal = array_reduce($cartItems, function ($carry, $item) {
            return $carry + $item['price'] * $item['quantity'];
        }, 0);

        $total = $subtotal;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $orderNotes = $_POST['comment'];

            $data = [
                'id_user' => $_SESSION['user']['id'],
                'code_order' => $this->generateRandomCodeOrder(),
                'name' => $username,
                'email' => $email,
                'phone' => $phone,
                'status' => 0,
                'address' => $address,
                'note' => $orderNotes,
                'total' => $total,
                'payment_methods' => $paymentMethod,
                'order_date' => date('Y-m-d H:i:s')
            ];

            $billId = $this->table($this->table)->create($data);
            if ($billId) {
                $this->insertBillDetails($billId, $cartItems);
                $this->deleteCartItems($_SESSION['user']['id']);

                // $orderInfo = $this->getOrderInfo($billId);
                // $to = $email;
                // $subject = "Order Confirmation";
                // $message = "Thank you for your order!\n\n";
                // $mailHelper = new MailHelper();
                // $mailHelper->sendOrderConfirmation($to, $subject, $message);
                header("Location: /cart");
            }
        }
    }

    private function insertBillDetails($billId, $cartItems)
    {
        foreach ($cartItems as $cartItem) {
            $billDetailsData = [
                'id_bill' => $billId,
                'id_pro' => $cartItem['id_pro'],
                'price' => $cartItem['price'],
                'quantity' => $cartItem['quantity'],
            ];

            $this->table($this->billDetailsTable)->create($billDetailsData);
        }
    }

    private function generateRandomCodeOrder()
    {
        $randomNumber = mt_rand(100000, 999999);
        $codeOrder = 'DH' . $randomNumber;
        return $codeOrder;
    }


    private function deleteCartItems($userId)
    {
        $cartModel = new CartModel();
        $cartModel->deleteAllCartsByUserId($userId);
    }

    private function getOrderInfo($billId)
    {
        $this->where('id', '=', $billId);
        return $this->getOne($billId);
    }

    public function getOrderHistory($userId)
    {
        $this->tableName = 'bill_details';
        $this->where('user_id', '=', $userId);
        $this->orderBy('order_date', 'DESC');
        return $this->get();
    }
}
