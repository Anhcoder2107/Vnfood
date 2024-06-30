<?php


class OrderModel{
    //get all order
    public function getAllOrder()
    {
        $db = new DB;
        $query = "SELECT * FROM orders";
        $res =  $db->query($query);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //get order by order id
    public function getOrderByOrderId($order_id)
    {
        $db = new DB;
        $query = "SELECT * FROM orders WHERE order_id = $order_id";
        $res =  $db->query($query);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    //update order
    public function updateOrder($order_id, $status)
    {
        $db = new DB;
        $query = "UPDATE orders SET order_status = $status WHERE order_id = $order_id";
        $res =  $db->query($query);
        return $res;
    }
}