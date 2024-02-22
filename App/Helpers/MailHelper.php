<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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

    public function sendOrderConfirmation($to, $subject, $message)
    {
        try {
            $this->config();
            $this->setDefaultRecipients();
            $this->_mail->addAddress($to);
            $this->_mail->Subject = $subject;

            $htmlMessage = $this->getOrderConfirmationHTML($message);

            $this->_mail->isHTML(true);
            $this->_mail->Body = $htmlMessage;
            $this->_mail->AltBody = strip_tags($htmlMessage);

            $this->_mail->send();

            // Sending a copy to the admin
            $adminEmail = 'toan11158@gmail.com';
            $adminSubject = "New Order - {$subject}";
            $adminMessage = "You have a new order!\n\n";

            foreach ($message as $item) {
                $adminMessage .= "{$item['name']} - {$item['quantity']} items\n";
            }

            $this->_mail->ClearAddresses();
            $this->_mail->addAddress($adminEmail);
            $this->_mail->Subject = $adminSubject;
            $this->_mail->Body = $adminMessage;
            $this->_mail->AltBody = strip_tags($adminMessage);

            $this->_mail->send();

            return true;
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$this->_mail->ErrorInfo}";
        }
    }

    private function getOrderConfirmationHTML($message)
    {
        ob_start();
        include('D:\ASM-PHP2\Resources\Views\Clients\Order\order-confirmation-template.php');
        return ob_get_clean();
    }
}
