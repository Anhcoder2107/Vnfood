<?php

class UserModel
{
    // `id`,  `user_name`,  `email`,  `password`, LEFT(`position`, 256)
    public function login($username, $password){
        $sql = "SELECT * FROM `users` WHERE `user_name` = '$username' AND `password` = '$password'";
        $DB = new DB();
        $result = $DB->query($sql);
        $result = $result->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}