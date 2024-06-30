<?php



class CategoryModel{
    
    public function getAllCategories()
    {
        $db = new DB;
        $sql = "SELECT * FROM categories";
        $categories = $db->query($sql);
        $categories = $categories->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    public function getCategoryById($id)
    {
        $db = new DB;
        $sql = "SELECT * FROM categories WHERE category_id = $id";
        $category = $db->query($sql);
        $category = $category->fetch(PDO::FETCH_ASSOC);
        return $category;
    }
}