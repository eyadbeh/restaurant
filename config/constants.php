<?php 

session_start();
    define('SITEURL', 'http://localhost/restaurant/');
    
    $conn = mysqli_connect('localhost', 'root', '123') or die();
    $db_select = mysqli_select_db($conn, 'food-order') or die();


?>