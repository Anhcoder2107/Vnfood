<?php

// tai khoan ngan hang test
//Ngân hàng	NCB
// Số thẻ	9704198526191432198
// Tên chủ thẻ	NGUYEN VAN A
// Ngày phát hành	07/15
// Mật khẩu OTP	123456




require_once 'app/model/OrderModel.php';
require_once 'app/model/OrderDetailModel.php';

class CheckoutController {
    public function index()
    {

        if(!isset($_SESSION['customer'])) {
            header('Location: ' . APPURL . 'login');
        }
        //check if cart is empty
        if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
            header('Location: ' . APPURL . 'cart');
        }
        
        if(isset($_POST['submit'])) {
            $cart = $_SESSION['cart'];
            $total = 0;
            foreach($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }
            if($_POST['payment']){
                $payment = $_POST['payment'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $note = $name . ' - ' . $phone . ' - ' . $address;
                $customer_id = $_SESSION['customer']['customer_id'];
                $orderModel = new OrderModel;
                $status = 0;
                $order_date = date('Y-m-d H:i:s');
                $orderModel->createOrder($customer_id, $note, $address, $phone, $name, $status,$order_date, $payment);

                $orderDetail = new OrderDetailModel;
                $orderId = $orderModel->getLastOrderId();
                foreach($cart as $item) {
                    $orderDetail->createOrderDetail($orderId, $item['product_id'], $item['quantity'], $item['price'], $item['price'] * $item['quantity']);
                }
                
                unset($_SESSION['cart']);
                header('Location: ' . APPURL . 'history-order');
            }else{
                $_SESSION['data'] = $_POST;
                $_SESSION['total'] = $total;

                require 'app/controller/vnpay_create_payment.php';
            }
        }

        require 'views/checkout.php';
    }


    //success
    public function success()
    {
        if($_GET['vnp_ResponseCode'] != '00') {
            header('Location: ' . APPURL . 'checkout');
        }else if(!isset($_SESSION['data']) || !isset($_SESSION['cart']) || !isset($_SESSION['total'])) {
            header('Location: ' . APPURL . 'checkout');
        }else{
            $data = $_SESSION['data'];
            $cart = $_SESSION['cart'];
            $total = $_SESSION['total'];
    
            $payment = $data['payment'];
            $name = $data['name'];
            $phone = $data['phone'];
            $address = $data['address'];
            $note = $name . ' - ' . $phone . ' - ' . $address;
            $customer_id = $_SESSION['customer']['customer_id'];
            $status = 1;
            $order_date = date('Y-m-d H:i:s');
            $orderModel = new OrderModel;
            $orderModel->createOrder($customer_id, $note, $address, $phone, $name, $status, $order_date, $payment);

            $orderDetail = new OrderDetailModel;
            $orderId = $orderModel->getLastOrderId();
            foreach($cart as $item) {
                $orderDetail->createOrderDetail($orderId, $item['product_id'], $item['quantity'], $item['price'], $item['price'] * $item['quantity']);
            }
            unset($_SESSION['data']);
            unset($_SESSION['cart']);
            unset($_SESSION['total']);
            header('Location: ' . APPURL . 'history-order');
        }


        require 'views/confirm.php';
    }

}