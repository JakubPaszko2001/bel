<?php
    $firstname = $_POST['firstname'];

    $conn = new mysqli('localhost','root','','opinie');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into opinie_klienta(firstname)values(?)")
    }
    echo "Connected successfully";
    ?>
?>