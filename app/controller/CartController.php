<?php




class CartController {
    public function index()
    {
        require 'views/cart.php';
    }

    public function add($id)
    {
        $productModel = new ProductModel;
        $product = $productModel->getProductById($id);
        $cart = [];
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        }
        if (array_key_exists($id, $cart)) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'product_id' => $id, 
                'product_name' => $product['product_name'],
                'description' => $product['description'], 
                'price' => $product['price'],
                'thumbnail' => $product['thumbnail'],
                'quantity' => 1
            ];
        }
        $_SESSION['cart'] = $cart;

        header('Location:'. APPURL . 'cart');
    }

    public function update()
    {
        if(isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
            $cart = $_SESSION['cart'];
            foreach ($quantity as $key => $value) {
                $cart[$key]['quantity'] = $value;
            }
            $_SESSION['cart'] = $cart;

        }

        header('Location:'. APPURL . 'cart');
    }

    public function remove($id)
    {
        $cart = $_SESSION['cart'];
        unset($cart[$id]);
        $_SESSION['cart'] = $cart;
        header('Location:'. APPURL . 'cart');
    }

    public function clear()
    {
        unset($_SESSION['cart']);
        header('Location:'. APPURL . 'cart');
    }
}