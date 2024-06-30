<?php

require 'app/model/BlogModel.php';


class BlogController {
    public function index()
    {
        $blogModel = new BlogModel;
        $blogs = $blogModel->getAllBlogs();

        //pagination
        $totalBlogs = count($blogs);
        $blogsPerPage = 6;
        $totalPages = ceil($totalBlogs / $blogsPerPage);
        $currentPage = 1;
        if(isset($_GET['page'])) {
            $currentPage = $_GET['page'];
        }
        $offset = ($currentPage - 1) * $blogsPerPage;
        $blogs = array_slice($blogs, $offset, $blogsPerPage);


        require 'views/blogs.php';
    }

    public function show($id)
    {
        $blogModel = new BlogModel;
        $blog = $blogModel->getBlogById($id);

        $blogModel = new BlogModel;
        $blogs = $blogModel->getAllBlogs();
        require 'views/blog-single-sidebar.php';
    }
}