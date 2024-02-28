<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Models\CheckoutModel;

class MailHelper
{
    private $_mail;

    public function __construct()
    {
        $this->_mail = new PHPMailer(true);
    }

    private function config()
    {
        $this->_mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->_mail->isSMTP();
        $this->_mail->Host       = 'smtp.gmail.com';
        $this->_mail->SMTPAuth   = true;
        $this->_mail->Username   = 'toandtpc06598@fpt.edu.vn';
        $this->_mail->Password   = 'qmmz czez dmqr dzna';
        $this->_mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->_mail->Port       = 465;
    }

    private function setDefaultRecipients()
    {
        $this->_mail->setFrom('toandtpc06598@fpt.edu.com', 'Mailer');
        $this->_mail->addAddress('toan11156@gmail.com', 'toan12');
        $this->_mail->addAddress('ellen@example.com');
        $this->_mail->addReplyTo('info@example.com', 'Information');
        $this->_mail->addCC('cc@example.com');
        $this->_mail->addBCC('bcc@example.com');
    }

    public function sendConfirmationEmail($data, $cartItems, $idBill)
    {
        $this->config();
        $this->setDefaultRecipients();
        $this->_mail->Subject = 'Order Confirmation';

        $templateFile = APP_URL . 'Resources/Views/Clients/Order/order-confirmation-template.php';
        $templateContent = file_get_contents($templateFile);
        $totalAll = array_sum(array_column($cartItems, 'total'));

        $Checkout = new CheckoutModel();
        $billInfo = $Checkout->getBillInfo($idBill);

        // Thay thế các giá trị placeholder bằng dữ liệu thực
        $templateContent = str_replace('{{code_order}}', $billInfo['code_order'], $templateContent);
        $templateContent = str_replace('{{name}}', $data['name'], $templateContent);
        $templateContent = str_replace('{{email}}', $data['email'], $templateContent);
        $templateContent = str_replace('{{phone}}', $data['phone'], $templateContent);
        $templateContent = str_replace('{{address}}', $billInfo['address'], $templateContent);
        $templateContent = str_replace('{{total}}', $data['total'], $templateContent);
        $templateContent = str_replace('{{payment_method}}', $billInfo['payment_methods'], $templateContent);
        $templateContent = str_replace('{{total_all}}', $totalAll, $templateContent);

        $productRows = '';
        $paymentMethodText = ($billInfo['payment_methods'] == 0) ? 'Payment upon delivery' : 'Payment via Momo';
        foreach ($cartItems as $item) {
            $productRows .= '
        <tr>
            <td>' . $billInfo['code_order'] . '</td>
            <td>' . $item['name'] . '</td>
            <td>$' . $item['price'] . '</td>
            <td>' . $item['quantity'] . '</td>
            <td>$' . $item['total'] . '</td>
            <td>' . $billInfo['address'] . '</td>
            <td>' . $paymentMethodText. '</td>
        </tr>';
        }
        $productRows .= '
        <tr>
            <td colspan="4">TOTAL</td>
            <td>$'. $totalAll .'</td>
            <td colspan="2"></td>
        </tr>';

        $templateContent = str_replace('{{product_rows}}', $productRows, $templateContent);
        $body = $templateContent;


        $this->_mail->isHTML(true);
        $this->_mail->Subject = 'Order Confirmation';
        $this->_mail->Body = $body;
        $this->_mail->send();
    }
}
