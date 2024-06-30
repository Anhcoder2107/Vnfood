<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'config/db.php';
require 'app/model/CustomerModel.php';


class ForgotPasswordController
{

    public function index()
    {
        $error = [];
        
        if(isset($_POST['submit'])){
            if(empty($_POST['email'])){
                $error['email'] = 'Email is required';
            }
            if(empty($error)){
                $email = $_POST['email'];
                $customerModel = new CustomerModel;
                $customer = $customerModel->CheckEmailExist($email);
                if($customer){
                    $generateCode = $this->genderateCode();
                    $_SESSION['code'] = $generateCode;
                    $_SESSION['email'] = $email;
                    $this->sendEmail($email, $generateCode);
                    header('Location: ' . APPURL . 'reset-password');
                }else{
                    $error['email'] = 'Email not exist';
                }
            }
        }
        require 'views/auth/forgot-password.php';
    }

    public function resetPassword()
    {
        if(!isset($_SESSION['email']) && !isset($_SESSION['code'])){
            header('Location: ' . APPURL . 'forgot-password');
        }
        $error = [];
        if (isset($_POST['submit'])) {
            $code = $_POST['code'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $email = $_SESSION['email'];
            $code_session = $_SESSION['code'];

            // check code empty
            if (empty($code)) {
                $error['code'] = 'Code is required';
            }

            // check password empty
            if (empty($password)) {
                $error['password'] = 'Password is required';
            }

            // check confirm password empty
            if (empty($confirm_password)) {
                $error['confirm_password'] = 'Confirm password is required';
            }

            if(empty($error)){
                if ($code == $code_session) {
                    if ($password == $confirm_password) {
                        $customerModel = new CustomerModel;
                        $customer = $customerModel->UpdatePassword($email, $password);
                        if ($customer) {
                            unset($_SESSION['code']);
                            unset($_SESSION['email']);
                            header('Location: ' . APPURL . 'login');
                        } else {
                            $error['password-fail'] = 'Update password fail';
                        }
                    } else {
                        $error['password'] = 'Password not match';
                    }
                } else {
                    $error['code'] = 'Code not match';
                }
            }
        }
        require 'views/auth/reset-password.php';
    }

    public function genderateCode()
    {
        $code = rand(100000, 999999);
        return $code;
    }


    public function sendEmail($email, $code)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = FALSE;                             //SMTP::DEBUG_SERVER Enable verbose debug output
            $mail->isSMTP();                                      //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                 //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                             //Enable SMTP authentication
            $mail->Username   = 'soccerstorek68@gmail.com';       //SMTP username
            $mail->Password   = 'fnjzncvxnwyylbcw';               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      //Enable implicit TLS encryption
            $mail->Port       = 465;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($email, 'VNFOOD');
            $mail->addAddress($email, 'VNFOOD');     //Add a royexhvzesxplwejoecipient
            $mail->addAddress($email);             //Name is optional

            
            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Forgot Password';
            $mail->Body = 'Code: ' . $code; 

            //send mail
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}