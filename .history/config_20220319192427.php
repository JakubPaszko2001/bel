<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'opinie';

    $conn = mysqli_connect('localhost','root','','opinie');
    if($conn) {
        die("<script> alert('connection failed.') </script>");
    }
?>