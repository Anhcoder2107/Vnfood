<?php



class OrderDetailModel {
    //get order detail by order id
    public function getOrderDetailByOrderId($order_id)
    {
        $db = new DB;
        $query = "SELECT * FROM orderdetail WHERE order_id = $order_id";
        $res =  $db->query($query);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

}