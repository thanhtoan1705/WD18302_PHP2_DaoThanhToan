<?php
namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailHelper{

    private $_mail;

    function __construct() {
        $this->_mail = new PHPMailer(true);
    }

    private function config(){
        $this->_mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $this->_mail->isSMTP();                                            //Send using SMTP
        $this->_mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $this->_mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $this->_mail->Username   = 'user@example.com';                     //SMTP username
        $this->_mail->Password   = 'secret';                               //SMTP password
        $this->_mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $this->_mail->Port       = 465; 
    }

    private function recipients(){
        $this->_mail->setFrom('from@example.com', 'Mailer');
        $this->_mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
        $this->_mail->addAddress('ellen@example.com');               //Name is optional
        $this->_mail->addReplyTo('info@example.com', 'Information');
        $this->_mail->addCC('cc@example.com');
        $this->_mail->addBCC('bcc@example.com');
    }

    private function attachments(){
        $this->_mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        $this->_mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    }
}