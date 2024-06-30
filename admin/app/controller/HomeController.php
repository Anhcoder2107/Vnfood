<?php 



class HomeController
{
    public function index()
    {
        //get all products
        $productModel = new ProductModel;
        $products = $productModel->getAllProduct();

        //get categorie name by category id
        $categoryModel = new CategoryModel;
        foreach ($products as $key => $product) {
            $category = $categoryModel->getCategoryById($product['category_id']);
            $products[$key]['category_name'] = $category['category_name'];
        }

        //get all categories
        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAllCategory();

        //get all orders
        $orderModel = new OrderModel;
        $orders = $orderModel->getAllOrder();

        //get all customers
        $customerModel = new CustomerModel;
        $customers = $customerModel->getAllCustomer();
        require 'admin/views/index.php';
    }
}