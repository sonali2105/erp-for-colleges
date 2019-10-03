<?php
session_start();
session_destroy();
header('location:http://localhost/pro/login.php');
?>