<?php

require 'admin/app/model/OrderModel.php';
require 'admin/app/model/OrderDetailModel.php';
require 'admin/app/model/CustomerModel.php';


class OrderController
{
    public function index()
    {
        $orderModel = new OrderModel;
        $orders = $orderModel->getAllOrder();

        //get customer name by customer id
        $customerModel = new CustomerModel;
        foreach ($orders as $key => $order) {
            $customer = $customerModel->getCustomerById($order['customer_id']);
            $orders[$key]['customer_name'] = $customer['customer_name'];
        }

        


        require 'admin/views/pages/order/orders.php';
    }

    public function detail()
    {
        $order_id = $_GET['id'];
        $orderModel = new OrderModel;
        $order = $orderModel->getOrderByOrderId($order_id);

        //get order detail by order id
        $orderDetailModel = new OrderDetailModel;
        $orderDetails = $orderDetailModel->getOrderDetailByOrderId($order_id);

        //get product name by product id
        $productModel = new ProductModel;
        foreach ($orderDetails as $key => $orderDetail) {
            $product = $productModel->getProductById($orderDetail['product_id']);
            $orderDetails[$key]['product_name'] = $product['product_name'];
        }
        require 'admin/views/pages/order/order-detail.php';
    }

    //update order
    public function update()
    {
        $order_id = $_GET['id'];
        $orderModel = new OrderModel;
        $order = $orderModel->getOrderByOrderId($order_id);

        //get cus name by customer id
        $customerModel = new CustomerModel;
        $customer = $customerModel->getCustomerById($order['customer_id']);
        $order['customer_name'] = $customer['customer_name'];

        if(isset($_POST['submit']))
        {
            $status = $_POST['status'];
            $orderModel->updateOrder($order_id, $status);
            header('Location: ' . APPURL . 'admin/orders');
        }

        require 'admin/views/pages/order/update-order.php';
    }
}