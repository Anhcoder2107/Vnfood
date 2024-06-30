<?php



class BlogModel{
    
    public function getAllBlogs()
    {
        $db = new DB;
        $sql = "SELECT * FROM blogs";
        $blogs = $db->query($sql);
        $blogs = $blogs->fetchAll(PDO::FETCH_ASSOC);
        return $blogs;
    }

    public function getBlogById($id)
    {
        $db = new DB;
        $sql = "SELECT * FROM blogs WHERE id = $id";
        $blog = $db->query($sql);
        $blog = $blog->fetch(PDO::FETCH_ASSOC);
        return $blog;
    }
}