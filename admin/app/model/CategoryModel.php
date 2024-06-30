<?php

require_once 'config/db.php';

class CategoryModel {
    // get all category
    public function getAllCategory()
    {
        $db = new DB;
        $sql = "SELECT * FROM categories";
        $categories = $db->query($sql);
        $categories = $categories->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    // get category by id
    public function getCategoryById($id)
    {
        $db = new DB;
        $sql = "SELECT * FROM categories WHERE category_id = $id";
        $category = $db->query($sql);
        $category = $category->fetch(PDO::FETCH_ASSOC);
        return $category;
    }

    // create category
    //`category_id`,  `category_name`, `description`,
    public function createCategory($data)
    {
        $db = new DB;
        $sql = "INSERT INTO categories (category_name, description) VALUES (:category_name, :description)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':category_name', $data['category_name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->execute();
    }

    // update category
    public function updateCategory($data)
    {
        $db = new DB;
        $sql = "UPDATE categories SET category_name = :category_name, description = :description WHERE category_id = :category_id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':category_name', $data['category_name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':category_id', $data['category_id']);
        $stmt->execute();
    }

    // delete category
    public function deleteCategory($id)
    {
        $db = new DB;
        $sql = "DELETE FROM categories WHERE category_id = $id";
        $db->query($sql);
    }
}