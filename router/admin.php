<?php


class RouterAmdin {
    public function __construct()
    {

        
        
        $request = $_SERVER['REQUEST_URI'];
        $request = ltrim($request, '/');
        $request = rtrim($request, '/');
        $url = explode('/', $request);
        // config route

        require 'admin/app/controller/ProductController.php';
        require 'admin/app/controller/HomeController.php';
        require 'admin/app/controller/CategoryController.php';
        require 'admin/app/controller/BlogController.php';
        require 'admin/app/controller/auth/LoginController.php';
        require 'admin/app/controller/auth/LogoutController.php';
        require 'admin/app/controller/OrderController.php';

        $route = [
            'home' => 'HomeController::index',

            // auth route
            'login' => 'LoginController::index',
            'logout' => 'LogoutController::index', 

            // product route
            'product' => 'ProductController::index',
            'product/create' => 'ProductController::create',
            'product/edit' => 'ProductController::edit',
            'product/delete' => 'ProductController::delete',

            // category route
            'category' => 'CategoryController::index',
            'category/create' => 'CategoryController::create',
            'category/edit' => 'CategoryController::edit',
            'category/delete' => 'CategoryController::delete',

            // blog route
            'blog' => 'BlogController::index',
            'blog/create' => 'BlogController::create',
            'blog/edit' => 'BlogController::edit',
            'blog/delete' => 'BlogController::delete',

            // order route
            'orders' => 'OrderController::index',
            'order/detail' => 'OrderController::detail',
            'order/update' => 'OrderController::update',

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

        if(!isset($_SESSION['user-admin']) || empty($_SESSION['user-admin'])) {
            if($url_last != 'login'){
                header('Location: '.APPURL.'admin/login');
            }
        }


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
                        $controller = new $controller;
                        $controller->$method($para);
                    }
                }
            }
        }
    }
}