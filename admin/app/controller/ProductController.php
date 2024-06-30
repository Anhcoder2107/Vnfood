<?php

require 'admin/app/model/ProductModel.php';


class ProductController 
{
    public function index()
    {
        $productModel = new ProductModel;
        $products = $productModel->getAllProduct();

        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAllCategory();

        //get category name
        foreach ($products as $key => $product) {
            $category = $categoryModel->getCategoryById($product['category_id']);
            $products[$key]['category_name'] = $category['category_name'];
        }

        require 'admin/views/pages/product/product.php';
    }

    // create product
    public function create()
    {
        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAllCategory();
        $err = [];
        if (isset($_POST['submit'])) {

            //check if image is empty
            if($_FILES["img"]["name"][0] == '') {
                $err['img'] = 'Please choose an image';
            }

            if(empty($_POST['product_name'])) {
                $err['product_name'] = 'Please enter product name';
            }

            if(empty($_POST['price'])) {
                $err['price'] = 'Please enter price';
            }

            if(empty($_POST['category_id'])) {
                $err['category_id'] = 'Please select category';
            }

            if(empty($_POST['description'])) {
                $err['description'] = 'Please enter description';
            }

            if(count($err) == 0) {
                $productModel = new ProductModel;

                //upload image
                $target_dir = "views/images/products/";
                $target_file = $target_dir . basename($_FILES["img"]["name"][0]);
                move_uploaded_file($_FILES["img"]["tmp_name"][0], $target_file);
                
                $_POST['thumbnail'] = $_FILES["img"]["name"][0];
                $_POST['create_at'] = date('Y-m-d H:i:s');
                $_POST['update_at'] = date('Y-m-d H:i:s');
                $productModel->createProduct($_POST);
                header('Location: '. APPURL . 'admin/product');
            }
        }
        require 'admin/views/pages/product/create.php';
    }


    // edit product
    public function edit($id)
    {

        $err = [];
        $productModel = new ProductModel;
        $product = $productModel->getProductById($id);

        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAllCategory();

        if (isset($_POST['submit'])) {


            if(empty($_POST['product_name'])) {
                $err['product_name'] = 'Please enter product name';
            }

            if(empty($_POST['price'])) {
                $err['price'] = 'Please enter price';
            }

            if(empty($_POST['category_id'])) {
                $err['category_id'] = 'Please select category';
            }

            if(empty($_POST['description'])) {
                $err['description'] = 'Please enter description';
            }

            if(count($err) == 0) {
            //upload image
                $target_dir = "images/products/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                $_POST['thumbnail'] = $product['thumbnail'];
                if($_FILES["img"]["name"] == '') {
                    $_POST['thumbnail'] = $product['thumbnail'];
                }else {
                    $_POST['thumbnail'] = $_FILES["img"]["name"];
                }
                $_POST['update_at'] = date('Y-m-d H:i:s');
                $_POST['product_id'] = $id;

                $productModel->updateProduct($_POST);
                header('Location: '. APPURL . 'admin/product');
            }
        }
        require 'admin/views/pages/product/edit.php';
    }

    // delete product
    public function delete($id)
    {
        $productModel = new ProductModel;
        $productModel->deleteProduct($id);
        header('Location: '. APPURL . 'admin/product');
    }
}