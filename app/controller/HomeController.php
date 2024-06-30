<?php





class HomeController {
    public function index()
    {
        // echo $_SESSION['customer']['customer_name'];

        $productModel = new ProductModel;
        $products = $productModel->getAllProducts();
        $productrandom = $products;

        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAllCategories();
        //get 6 categories
        $categories = array_slice($categories, 0, 6);


        //get category_name by category_id
        foreach ($products as $key => $product) {
            $category = $categoryModel->getCategoryById($product['category_id']);
            $products[$key]['category_name'] = $category['category_name'];
        }

        //get 8 products
        $products = array_slice($products, 0, 8);

        $blogModel = new BlogModel;
        $blogs = $blogModel->getAllBlogs();
        $blogs = array_slice($blogs, 0, 3);


        require 'views/index.php';
    }

    public function profile()
    {
        if (!isset($_SESSION['customer'])) {
            header('Location: ' . APPURL . 'login');
        }
        if(isset($_POST['submit'])) {
            $customer_name = $_POST['name'];
            $customer_email = $_POST['email'];
            $customer_phone = $_POST['phone'];
            $customer_address = $_POST['address'];
            $customer_id = $_SESSION['customer']['customer_id'];
            $customerModel = new CustomerModel;
            $customerModel->updateCustomer($customer_id, $customer_name, $customer_phone, $customer_address);
            $_SESSION['customer']['customer_name'] = $customer_name;
            $_SESSION['customer']['phone_number'] = $customer_phone;
            $_SESSION['customer']['address'] = $customer_address;

            header('Location: ' . APPURL . 'profile');
        }
        require 'views/profile.php';
    }

    public function historyOrder()
    {
        $orderModel = new OrderModel;
        $orders = $orderModel->getOrderByCustomerId($_SESSION['customer']['customer_id']);

        //get order detail by order id
        $ordersDetail = new OrderDetailModel;
        foreach ($orders as $key => $order) {
            $order_detail = $ordersDetail->getOrderDetailByOrderId($order['order_id']);
            $orders[$key]['order_detail'] = $order_detail;
        }


        //get total_price
        foreach ($orders as $key => $order) {
            $total_price = 0;
            foreach ($order['order_detail'] as $order_detail) {
                $total_price += $order_detail['total_price'];
            }
            $orders[$key]['total_price'] = $total_price;
        }

        //get product_name by product_id
        $productModel = new ProductModel;
        foreach ($orders as $key => $order) {
            foreach ($order['order_detail'] as $key2 => $order_detail) {
                $product = $productModel->getProductById($order_detail['product_id']);
                $orders[$key]['order_detail'][$key2]['product_name'] = $product['product_name'];
            }
        }
        require 'views/history-order.php';
    }
}