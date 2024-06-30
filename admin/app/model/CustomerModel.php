<?php


class CustomerModel{
    //get all customer
    public function getAllCustomer()
    {
        $db = new DB;
        $query = "SELECT * FROM customers";
        $res =  $db->query($query);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //get customer by customer id
    public function getCustomerById($customer_id)
    {
        $db = new DB;
        $query = "SELECT * FROM customers WHERE customer_id = $customer_id";
        $res =  $db->query($query);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}