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
        $checkoutModel = new CheckoutModel();
        $cartItems = $cartModel->getCartItems();

        $data = [
            'cartItems' => $cartItems
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paymentMethod = isset($_POST['payment_method']) ? $_POST['payment_method'] : 0;
           
    
            if ($paymentMethod == 1) {
                $this->momo($cartItems);
                $checkoutModel->addBill($cartItems, $paymentMethod);
            } else {
                $checkoutModel->addBill($cartItems, $paymentMethod);
            }
        } else {
        }

        $this->View('/clients/checkout/checkout', $data);
    }

    public function momo($cartItems)
    {
        $subtotal = array_reduce($cartItems, function ($carry, $item) {
            return $carry + $item['price'] * $item['quantity'];
        }, 0);
        $total = $subtotal;
        function execPostRequest($url, $data)
        {
            $ch = curl_init($url);
            //Tắt kiểm tra SSL
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data)
                )
            );
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            //execute post
            $result = curl_exec($ch);
            if ($result === false) {
                echo 'Curl Error: ' . curl_error($ch);
                echo 'Curl Error Code: ' . curl_errno($ch);
            }
            //close connection
            curl_close($ch);
            return $result;
        }
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $total * 24000;
        $orderId = rand(00, 9999);
        $redirectUrl = "http://php2/cart";
        $ipnUrl = "http://php2/cart";

        $extraData = "";


        if (!empty($_POST)) {
            $partnerCode = $partnerCode;
            $accessKey = $accessKey;
            $serectkey = $secretKey;
            $orderId = $orderId; // Mã đơn hàng
            $orderInfo = $orderInfo;
            $amount = $amount;
            $ipnUrl = $ipnUrl;
            $redirectUrl = $redirectUrl;
            $extraData = $extraData;

            $requestId = time() . "";
            $requestType = "payWithATM";
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $serectkey);
            $data = array(
                'partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            );
            $result = execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json
            if (isset($jsonResult['payUrl']) && !empty($jsonResult['payUrl'])) {
                header('Location: ' . $jsonResult['payUrl']);
                die;
            } else {
                echo "Lỗi: Không tìm thấy payUrl.";
            }
        }
    }
}
