<?php

require 'app/model/ProductModel.php';
require 'app/model/CategoryModel.php';

class ProductController {
    public function index()
    {
        $productModel = new ProductModel;
        $products = $productModel->getAllProducts();

        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAllCategories();

        if(isset($_GET['category'])) {
            $products = $productModel->getProductsByCategory($_GET['category']);
        }

        if(isset($_GET['search'])) {
            $products = $productModel->searchProduct($_GET['search']);
        }


        //pagination
        $totalProducts = count($products);
        $productsPerPage = 6;
        $totalPages = ceil($totalProducts/$productsPerPage);
        $currentPage = 1;
        if(isset($_GET['page'])) {
            $currentPage = $_GET['page'];
        }
        $offset = ($currentPage - 1) * $productsPerPage;
        $products = array_slice($products, $offset, $productsPerPage);


        require 'views/shop-grid.php';
    }

    public function show($id)
    {
        $productModel = new ProductModel;
        $product = $productModel->getProductById($id);
        require 'views/show.php';
    }
}