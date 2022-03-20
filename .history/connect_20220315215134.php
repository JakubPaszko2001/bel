<?php
    $firstname = $_POST['firstname'];
    $opinia = $_POST['opinia'];

    $db=mysqli_connect('localhost','root','','opinie');
    if(mysqli_connect_errno()){
        echo("Błąd połączenia z bazą");
    } else {
            $wstaw = mysqli_query($db, "INSERT INTO opinie_klienta VALUES (NULL,'$firstname','$opinia')");
        }
?>