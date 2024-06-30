<?php 




class RegisterController {
    public function index(){
        $error = [];
        $data = $_POST;

        if(isset($_POST['submit'])){
            $customerModel = new CustomerModel();

            //check email empty
            if(empty($_POST['email'])){
                $error['email'] = 'Email is required';
                
            }

            //check password empty
            if(empty($_POST['password'])){
                $error['password'] = 'Password is required';
            }

            //check name empty
            if(empty($_POST['customer_name'])){
                $error['customer_name'] = 'Name is required';
            }

            //check phone empty
            if(empty($_POST['phone_number'])){
                $error['phone_number'] = 'Phone is required';
            }

            //check address empty
            if(empty($_POST['address'])){
                $error['address'] = 'Address is required';
            }

            //check email exist
            $customer = $customerModel->CheckEmailExist($_POST['email']);
            if($customer){
                $error['email'] = 'Email is exist';
            }

            if(empty($error)){
                $customer_name = $_POST['customer_name'];
                $phone_number = $_POST['phone_number'];
                $address = $_POST['address'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $customer = $customerModel->Register($customer_name, $phone_number, $address, $gender, $email, $password);

                if($customer){
                    $_SESSION['customer'] = $customer;
                    header('Location: ' . APPURL . 'login');
                }else{
                    $error['register'] = 'Register failed';
                }
            }
        }   

        require 'views/auth/register.php';
    }
}