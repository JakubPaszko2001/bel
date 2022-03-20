<?php
    $firstname = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $opinia = $_POST['opinia'];

    $db=mysqli_connect('localhost','root','','opinie');
    if(mysqli_connect_errno()){
        echo("Błąd połączenia z bazą");
    } else {
            $wstaw = mysqli_query($db, "INSERT INTO opinie_klienta VALUES (NULL,'$firstname','$opinia')");
        }
?>
<?php
    $server = 'localhost'
    $username = 'root'
    $password = ''
    $database = 'opinie'
    $conn = mysqli_connect($server, $username, $password, $database);
?>