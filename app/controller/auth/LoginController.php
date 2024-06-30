<?php

require_once 'app/model/CustomerModel.php';



class LoginController {
    public function index(){
        $error = [];

        if(isset($_POST['submit'])){

            //check email empty
            if(empty($_POST['email'])){
                $error['email'] = 'Email is required';
                
            }

            //check password empty
            if(empty($_POST['password'])){
                $error['password'] = 'Password is required';
            }

            if(empty($error)){
                $email = $_POST['email'];
                $password = $_POST['password'];
    
                $customerModel = new CustomerModel();
                $customer = $customerModel->Login($email, $password);
    
                if($customer){
                    $_SESSION['customer'] = $customer;
                    header('Location: ' . APPURL);

                }else{
                    $error['login'] = 'Email or password is incorrect';
                }
            }
        }   
        require 'views/auth/login.php';
    }
}