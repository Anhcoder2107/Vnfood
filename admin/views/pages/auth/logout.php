<?php


unset($_SESSION['user-admin']);
header('Location: '.APPURL.'admin/login');