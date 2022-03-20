<?php
    $firstname = $_POST['firstname'];

    $db=mysqli_connect('localhost','root','','opinie');
    if(mysqli_connect_errno()){
        echo("Błąd połączenia z bazą");
    } else {
            $wstaw = mysqli_query($db, "INSERT INTO Klient VALUES (NULL,'$Imie','$Nazwisko','$Kod','$Miejscowosc','$Ulica','$Numer','$Pesel','$Telefon','$Mail')");
        }
    ?>