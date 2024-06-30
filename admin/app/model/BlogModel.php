<?php



class BlogModel{
    //get all blog
    public function getAllBlog()
    {
        $db = new DB;
        $sql = "SELECT * FROM blogs";
        $blogs = $db->query($sql);
        $blogs = $blogs->fetchAll(PDO::FETCH_ASSOC);
        return $blogs;
    }

    //get blog by id
    public function getBlogById($id)
    {
        $db = new DB;
        $sql = "SELECT * FROM blogs WHERE id = $id";
        $blog = $db->query($sql);
        $blog = $blog->fetch(PDO::FETCH_ASSOC);
        return $blog;
    }

    //create blog id`,  `user_id`, `title`,  `slug`,  `body`,  `image`, `,  `updated_at`,  `created_at`
    public function createBlog($data)
    {
        $db = new DB;
        $sql = "INSERT INTO blogs (user_id, title, slug, body, image, updated_at, created_at) VALUES (:user_id, :title, :slug, :body, :image, :updated_at, :created_at)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':slug', $data['slug']);
        $stmt->bindParam(':body', $data['body']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':updated_at', $data['updated_at']);
        $stmt->bindParam(':created_at', $data['created_at']);
        $stmt->execute();
    }

    //update blog
    public function updateBlog($data)
    {
        $db = new DB;
        $sql = "UPDATE blogs SET user_id = :user_id, title = :title, slug = :slug, body = :body, image = :image, updated_at = :updated_at WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':slug', $data['slug']);
        $stmt->bindParam(':body', $data['body']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':updated_at', $data['updated_at']);
        $stmt->bindParam(':id', $data['id']);
        $stmt->execute();
    }

    //delete blog
    public function deleteBlog($id)
    {
        $db = new DB;
        $sql = "DELETE FROM blogs WHERE id = $id";
        $db->query($sql);
    }
}