<?php
    $firstname = $_POST['firstname'];

    $conn = new mysqli('localhost','root','','opinie');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>
?>