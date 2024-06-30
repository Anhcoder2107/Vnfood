<?php


class OrderModel {
    //get all orders
    public function getAllOrders()
    {
        $db = new DB;
        $sql = "SELECT * FROM orders";
        $orders = $db->query($sql);
        $orders = $orders->fetchAll(PDO::FETCH_ASSOC);
        return $orders;
    }

    //get order by id
    public function getOrderById($id)
    {
        $db = new DB;
        $sql = "SELECT * FROM orders WHERE order_id = $id";
        $order = $db->query($sql);
        $order = $order->fetch(PDO::FETCH_ASSOC);
        return $order;
    }

    //create order
    //``order_id`,  `customer_id`, LEFT(`description`, 256), LEFT(`delivery_address`, 256), LEFT(`delivery_phone`, 256), LEFT(`delivery_name`, 256),  `order_status`,  `order_date`, LEFT(`payment_method`, 256)
    public function createOrder($customer_id, $description, $delivery_address, $delivery_phone, $delivery_name, $order_status, $order_date, $payment_method)
    {
        $db = new DB;
        $sql = "INSERT INTO orders (customer_id, description, delivery_address, delivery_phone, delivery_name, order_status, order_date, payment_method) VALUES ($customer_id, '$description', '$delivery_address', '$delivery_phone', '$delivery_name', '$order_status', '$order_date', '$payment_method')";
        $db->query($sql);
        return $db->lastInsertId();
    }

    //update order
    public function updateOrder($order_id, $customer_id, $description, $delivery_address, $delivery_phone, $delivery_name, $order_status, $order_date, $payment_method)
    {
        $db = new DB;
        $sql = "UPDATE orders SET customer_id = $customer_id, description = '$description', delivery_address = '$delivery_address', delivery_phone = '$delivery_phone', delivery_name = '$delivery_name', order_status = '$order_status', order_date = '$order_date', payment_method = '$payment_method' WHERE order_id = $order_id";
        $db->query($sql);
        return $db->lastInsertId();
    }

    //get last id
    public function getLastOrderId()
    {
        $db = new DB;
        $sql = "SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1";
        $order = $db->query($sql);
        $order = $order->fetch(PDO::FETCH_ASSOC);
        return $order['order_id'];
    }

    //getOrderByCustomerId
    public function getOrderByCustomerId($customer_id)
    {
        $db = new DB;
        $sql = "SELECT * FROM orders WHERE customer_id = $customer_id";
        $orders = $db->query($sql);
        $orders = $orders->fetchAll(PDO::FETCH_ASSOC);
        return $orders;
    }
}