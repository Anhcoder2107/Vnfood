<?php

require 'admin/app/model/CategoryModel.php';


class CategoryController 
{
    public function index()
    {
        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAllCategory();
        require 'admin/views/pages/category/category.php';
    }

    // create category
    public function create()
    {   
        $err = [];
        if(isset($_POST['submit'])) {
            if(empty($_POST['category_name'])) {
                $err['category_name'] = 'Please enter category name';
            }
            if(count($err) == 0) {
                $name = $_POST['category_name'];
                $description = $_POST['description'];
                $categoryModel = new CategoryModel;
                $data = [
                    'category_name' => $name,
                    'description' => $description
                ];
                $categoryModel->createCategory($data);
                header('Location: ' . APPURL . 'admin/category');
            }
        }
        require 'admin/views/pages/category/create.php';
    }

    // edit category
    public function edit($id)
    {
        $err = [];
        $categoryModel = new CategoryModel;
        $category = $categoryModel->getCategoryById($id);
        if(isset($_POST['submit'])) {
            if(empty($_POST['category_name'])) {
                $err['category_name'] = 'Please enter category name';
            }
            if(count($err) == 0) {
                $name = $_POST['category_name'];
                $description = $_POST['description'];
                $data = [
                    'category_name' => $name,
                    'description' => $description,
                    'category_id' => $id
                ];
                $categoryModel->updateCategory($data);
                header('Location: ' . APPURL . 'admin/category');
            }
        }
        require 'admin/views/pages/category/edit.php';
    }

    // delete category
    public function delete($id)
    {
        $categoryModel = new CategoryModel;
        $categoryModel->deleteCategory($id);
        header('Location: ' . APPURL . 'admin/category');
    }
}