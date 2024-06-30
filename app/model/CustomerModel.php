<?php

class CustomerModel {
    public function Login($email, $password){
        $db = new DB;
        $sql = "SELECT * FROM customers WHERE email = :email AND password = :password";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Register 
    //`customer_id`,  `customer_name`,  `phone_number`, LEFT(`address`, 256),  `gender`,  `email`,  `password`
    public function Register($customer_name, $phone_number, $address, $gender, $email, $password){
        $db = new DB;
        $sql = "INSERT INTO customers(customer_name, phone_number, address, gender, email, password) VALUES(:customer_name, :phone_number, :address, :gender, :email, :password)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':customer_name', $customer_name);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }

    public function CheckEmailExist($email){
        $db = new DB;
        $sql = "SELECT * FROM customers WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function UpdatePassword($email, $password){
        $db = new DB;
        $sql = "UPDATE customers SET password = :password WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }

    //update customer
    public function UpdateCustomer($customer_id, $customer_name, $phone_number, $address)
    {
        $db = new DB;
        $sql = "UPDATE customers SET customer_name = :customer_name, phone_number = :phone_number, address = :address WHERE customer_id = :customer_id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':customer_id', $customer_id);
        $stmt->bindParam(':customer_name', $customer_name);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':address', $address);
        return $stmt->execute();
    }
}