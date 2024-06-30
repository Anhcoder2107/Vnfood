<?php

require_once 'config/db.php';


class ProductModel {
    // get all product
    public function getAllProduct()
    {
        $db = new DB;
        $sql = "SELECT * FROM products";
        $products = $db->query($sql);
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    // get product by id
    public function getProductById($id)
    {
        $db = new DB;
        $sql = "SELECT * FROM products WHERE product_id = $id";
        $product = $db->query($sql);
        $product = $product->fetch(PDO::FETCH_ASSOC);
        return $product;
    }

    // create product
    //`product_id`,  `category_id`,  `product_name`, LEFT(`description`, 256),  `price`,  `thumbnail`,  `status`,  `create_at`,  `update_at` 
    public function createProduct($data)
    {
        $db = new DB;
        $sql = "INSERT INTO products (category_id, product_name, description, price, thumbnail, status, create_at, update_at) VALUES (:category_id, :product_name, :description, :price, :thumbnail, :status, :create_at, :update_at)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':category_id', $data['category_id']);
        $stmt->bindParam(':product_name', $data['product_name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':thumbnail', $data['thumbnail']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':create_at', $data['create_at']);
        $stmt->bindParam(':update_at', $data['update_at']);
        $stmt->execute();
    }

    // update product
    public function updateProduct($data)
    {
        $db = new DB;
        $sql = "UPDATE products SET category_id = :category_id, product_name = :product_name, description = :description, price = :price, thumbnail = :thumbnail, status = :status, update_at = :update_at WHERE product_id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':category_id', $data['category_id']);
        $stmt->bindParam(':product_name', $data['product_name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':thumbnail', $data['thumbnail']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':update_at', $data['update_at']);
        $stmt->bindParam(':id', $data['product_id']);
        $stmt->execute();
    }

    // delete product
    public function deleteProduct($id)
    {
        $db = new DB;
        $sql = "DELETE FROM products WHERE product_id = $id";
        $db->query($sql);
    }
}   