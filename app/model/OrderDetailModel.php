<?php


class OrderDetailModel {

    //get all order details
    public function getAllOrderDetails()
    {
        $db = new DB;
        $sql = "SELECT * FROM orderdetail";
        $order_details = $db->query($sql);
        $order_details = $order_details->fetchAll(PDO::FETCH_ASSOC);
        return $order_details;
    }

    //get order detail by order id
    public function getOrderDetailByOrderId($id)
    {
        $db = new DB;
        $sql = "SELECT * FROM orderdetail WHERE order_id = $id";
        $order_detail = $db->query($sql);
        $order_detail = $order_detail->fetchAll(PDO::FETCH_ASSOC);
        return $order_detail;
    }

    //create order detail
    // `order_id`,  `product_id`,  `number`,  `price`,  `total_price`
    public function createOrderDetail($order_id, $product_id, $number, $price, $total_price)
    {
        $db = new DB;
        $sql = "INSERT INTO orderdetail (order_id, product_id, number, price, total_price) VALUES (:order_id, :product_id, :number, :price, :total_price)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':order_id', $order_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->bindParam(':number', $number);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':total_price', $total_price);
        $stmt->execute();
        return $db->lastInsertId();
    }
}