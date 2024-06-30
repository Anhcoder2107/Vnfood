<?php


class RouterWeb {
    public function __construct()
    {
        $request = $_SERVER['REQUEST_URI'];
        $request = ltrim($request, '/');
        $url = explode('/', $request);
        // config route
        require 'app/controller/auth/ForgotPasswordController.php';
        require 'app/controller/auth/LoginController.php';
        require 'app/controller/auth/RegisterController.php';
        require 'app/controller/auth/LogoutController.php';
        require 'app/controller/HomeController.php';
        require 'app/controller/Controller.php';
        require 'app/controller/ProductController.php';
        require 'app/controller/CartController.php';
        require 'app/controller/CheckoutController.php';
        require 'app/controller/BlogController.php';

        $route = [
            '' => 'HomeController::index',

            //auth
            'login' => 'LoginController::index',
            'register' => 'RegisterController::index',
            'forgot-password' => 'ForgotPasswordController::index',
            'reset-password' => 'ForgotPasswordController::resetPassword',
            'logout' => 'LogoutController::logout',
            'profile' => 'Homecontroller::profile',
            'history-order' => 'Homecontroller::historyOrder',

            //product
            'products' => 'ProductController::index',
            'product' => 'ProductController::show',

            //cart
            'cart' => 'CartController::index',
            'cart/add' => 'CartController::add',
            'cart/update' => 'CartController::update',
            'cart/delete' => 'CartController::remove',
            'cart/clear' => 'CartController::clear',

            //checkout
            'checkout' => 'CheckoutController::index',
            'checkout/success' => 'CheckoutController::success',

            //blog 
            'blogs' => 'BlogController::index',
            'blog' => 'BlogController::show',

            //contact
            'contact' => 'ContactController::index',

            

        ];

        // check route
        $url_last = end($url);
        $url_after = array_slice($url, 0, -1);
        $url_after = end($url_after);
        $para = '';



        

        if(strpos($url_last, '?') !== false) {
            $url_last = explode('?', $url_last);
            $para = $url_last[1];
            $url_last = $url_last[0];
        }else {
            $url_last = end($url);
        }

        $error_page = '';
        //check example proudct/create -> ProductController::create
        foreach ($route as $key => $value) {
            $key = explode('/', $key);
            if(isset($key[1])){
                if($url_last == $key[1] && $url_after == $key[0]) {
                    $value = explode('::', $value);
                    $controller = $value[0];
                    $method = $value[1];
                    if ($para == '') {
                        $controller = new $controller;
                        $controller->$method();
                    }else if ($para != ''){
                        $para = explode('=', $para);
                        $controller = new $controller;
                        $controller->$method($para[1]);
                    }
                    $error_page = '';
                    break;
                }else{
                    $error_page = '404';
                }
            }else {
                if($url_last == $key[0]) {
                    $value = explode('::', $value);
                    $controller = $value[0];
                    $method = $value[1];
                    if ($para == '') {
                        $controller = new $controller;
                        $controller->$method();
                    }else if ($para != ''){
                        $para = explode('=', $para);
                        $controller = new $controller;
                        $controller->$method($para[1]);
                    }
                    $error_page = '';
                    break;
                }else{
                    $error_page = '404';
                }
            }
        }

        if($error_page == '404'){
            require 'admin/views/error-404.php';
        }
    }
}