<?php


class LogoutController
{
    public function logout()
    {
        unset($_SESSION['customer']);
        header('Location: ' . APPURL);
    }
}