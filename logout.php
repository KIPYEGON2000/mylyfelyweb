<?php
session_start();
session_destroy();
echo "welcome back again";
header('location:login.php');
?>