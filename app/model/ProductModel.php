<?php




class ProductModel {

    //get all products
    public function getAllProducts()
    {
        $db = new DB;
        $sql = "SELECT * FROM products";
        $products = $db->query($sql);
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    //get product by id
    public function getProductById($id)
    {
        $db = new DB;
        $sql = "SELECT * FROM products WHERE product_id = $id";
        $product = $db->query($sql);
        $product = $product->fetch(PDO::FETCH_ASSOC);
        return $product;
    }

    //getProductsByCategory
    public function getProductsByCategory($category_id)
    {
        $db = new DB;
        $sql = "SELECT * FROM products WHERE category_id = $category_id";
        $products = $db->query($sql);
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    //search product
    public function searchProduct($keyword)
    {
        $db = new DB;
        $sql = "SELECT * FROM products WHERE product_name LIKE '%$keyword%'";
        $products = $db->query($sql);
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    //sort product by price
    public function sortProductByPrice($sort)
    {
        $db = new DB;
        $sql = "SELECT * FROM products ORDER BY price $sort";
        $products = $db->query($sql);
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    //sort product by name
    public function sortProductByName($sort)
    {
        $db = new DB;
        $sql = "SELECT * FROM products ORDER BY product_name $sort";
        $products = $db->query($sql);
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    
}