<?php

require 'admin/app/model/BlogModel.php';

class BlogController {
    public function index()
    {
        $blogModel = new BlogModel;
        $blogs = $blogModel->getAllBlog();
        require 'admin/views/pages/blog/blog.php';
    }

    // create blog
    public function create()
    {
        $err = [];
        if(isset($_POST['submit'])) {

            //check if image is empty
            if($_FILES["img"]["name"][0] == '') {
                $err['img'] = 'Please choose an image';
            }

            if(empty($_POST['title'])) {
                $err['title'] = 'Please enter title';
            }

            if(empty($_POST['body'])) {
                $err['body'] = 'Please enter body';
            }

            if(count($err) > 0) {
                require 'admin/views/pages/blog/create.php';
                return;
            }else {
                $user_id = 1;
                $title = $_POST['title'];
                $slug = $this->createSlug($title);
                $body = $_POST['body'];

                // upload image
                $target_dir = "views/images/blogs/";
                $target_file = $target_dir . basename($_FILES["img"]["name"][0]);
                $image = $_FILES["img"]["name"][0];
                move_uploaded_file($_FILES["img"]["tmp_name"][0], $target_file);



                $updated_at = date('Y-m-d H:i:s');
                $created_at = date('Y-m-d H:i:s');
                $blogModel = new BlogModel;
                $data = [
                    'user_id' => $user_id,
                    'title' => $title,
                    'slug' => $slug,
                    'body' => $body,
                    'image' => $image,
                    'updated_at' => $updated_at,
                    'created_at' => $created_at
                ];
                $blogModel->createBlog($data);
                header('Location: ' . APPURL . 'admin/blog');
            }
            
        }
        require 'admin/views/pages/blog/create.php';
    }

    // edit blog
    public function edit($id)
    {
        $err = [];

        $blogModel = new BlogModel;
        $blog = $blogModel->getBlogById($id);
        if(isset($_POST['submit'])) {

            if(empty($_POST['title'])) {
                $err['title'] = 'Please enter title';
            }

            if(empty($_POST['body'])) {
                $err['body'] = 'Please enter body';
            }

            if(count($err) == 0) {

                $user_id = 1;
                $title = $_POST['title'];
                $slug = $this->createSlug($title);
                $body = $_POST['body'];
                // upload image
                $target_dir = "views/images/blogs/";
                $target_file = $target_dir . basename($_FILES["img"]["name"][0]);
                $image = $_FILES["img"]["name"][0];
                move_uploaded_file($_FILES["img"]["tmp_name"][0], $target_file);

                if($image == '') {
                    $image = $blog['image'];
                }


                $updated_at = date('Y-m-d H:i:s');
                $data = [
                    'user_id' => $user_id,
                    'title' => $title,
                    'slug' => $slug,
                    'body' => $body,
                    'image' => $image,
                    'updated_at' => $updated_at,
                    'id' => $id
                ];
                $blogModel->updateBlog($data);
                header('Location: ' . APPURL . 'admin/blog');
            }
        }
        require 'admin/views/pages/blog/edit.php';
    }

    // delete blog
    public function delete($id)
    {
        $blogModel = new BlogModel;
        $blogModel->deleteBlog($id);
        header('Location: ' . APPURL . 'admin/blog');
    }

    // create slug with title
    public function createSlug($string) {

        $table = array(
                'Š'=>'S', 'š'=>'s', 'Đ'=>'D', 'đ'=>'d', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
                'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
                'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'S',
                'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
                'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
                'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b',
                'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-'
        );
    
        // -- Remove duplicated spaces
        $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);
    
        // -- Returns the slug
        return strtolower(strtr($string, $table));
    }
}