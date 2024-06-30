<?php

require 'admin/app/model/UserModel.php';

class LoginController
{
    public function index()
    {

        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $error = [];
            $data = $_POST;

            if(empty($username)) {
                $error['username'] = 'Username is required';
            }

            if(empty($password)) {
                $error['password'] = 'Password is required';
            }

            if(count($error) == 0) {
                $userModel = new UserModel();
                $result = $userModel->login($username, $password);
                if($result) {
                    $_SESSION['user-admin'] = $result;
                    header('Location: '.APPURL.'admin');
                }else {
                    $error['login'] = 'Username or password is incorrect';
                }
            }

        }

        require 'admin/views/pages/auth/login.php';
    }
}