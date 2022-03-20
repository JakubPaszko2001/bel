<?php
$db = mysqli_connect('localhost','root','','opinie');
$query="select * from opinie_klienta";
$result=mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEL-DOM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./lightbox.min.css">
    <script src="./js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
<!-- HEADER -->
<header>
    <div class="container">
        <!-- SPAN -->
        <button class="hamburger">
            <span class="hamburger--menu">
                <span class="hamburger__inner"></span>
            </span>
        </button>
        <!-- LOGO -->
        <div class="header__logo">
            <img class="logo__pic" src="./images/logo.webp" alt="logo">
        </div>
    </div>
</header>
<!-- MAIN -->
<main>
    <!-- NAV -->
    <div class="navigation">
        <ul class="navigation--list">
            <li class="navigation__item"><a href="#zajmujemy">Zajmujemy się</a></li>
            <li class="navigation__item"><a href="#realizacje">Realizacje</a></li>
            <li class="navigation__item"><a href="#kontakt">Kontakt</a></li>
            <li class="navigation__item"><a href="#">Opinie </a></li>
        </ul>
    </div>
    <!-- MAIN CONTAINER -->
    <div class="main--container">
        <div class="background__pic">
            <img src="./images/tlo3.webp" alt="background">
        </div>
    <!-- TEXT ON IMG -->
        <h1 class="text">ZBUDUJ Z NAMI <br>DOM <br> MARZEŃ</h1>
    </div>
    <!-- TEXT -->
    <div class="main--text">
        <h1 class="main__text-h1">Firma budowlana działająca na Podlasiu.</h1>
        <h3 class="main__text-h3">Usługi budowlane i remontowe</h3>
        <h4 class="main__text-h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desk</h4>
    </div>
    <!-- PHOTOS -->
    <div class="main--photos">
        <img class="photo photo1" src="./images/docieplenie1.webp" alt="photo2">
        <img class="photo photo2" src="./images/wiezby.webp" alt="photo1">
    </div>
    <!-- CARDS -->
    <div class="cards--container">
        <h2 class="text-h2" id="zajmujemy">Zajmujemy się</h2>
        <div class="cards--container__main">
            <div class="card">
                <div class="card-img">
                    <img class="card-img_style" src="./images/wiezby2.webp" alt="wiezby">
                </div>
                <div class="card-title">
                    <div class="h1-title">Wieźby<br>dachowe</div>
                </div>
                <div class="card-text">
                    <div class="h1-text">Drewniany szkielet dachu, który przenosi obciążenia z pokrycia dachowego na konstrukcję nośnych ścian budynku. Więźby należą do konstrukcji ciesielskich.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img class="card-img_style" src="./images/krycie.webp" alt="wiezby">
                </div>
                <div class="card-title">
                    <div class="h1-title">Krycie<br>dachów</div>
                </div>
                <div class="card-text">
                    <div class="h1-text">Zewnętrzna warstwa dachu, narażona na działanie warunków atmosferycznych. Pokrycia można wykonać zarówno z materiałów naturalnych oraz sztucznych.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img class="card-img_style" src="./images/docieplenie2.webp" alt="wiezby">
                </div>
                <div class="card-title">
                    <div class="h1-title">Docieplenia<br>budynków</div>
                </div>
                <div class="card-text">
                    <div class="h1-text">Ocieplenie polega na zamocowaniu materiału termoizolacyjnego najczęściej w postaci płyt do ścian budynku od zewnątrz. Przykleja się je za pomocą zaprawy klejowej.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img class="card-img_style" src="./images/wnetrza.webp" alt="wiezby">
                </div>
                <div class="card-title">
                    <div class="h1-title">Wykańczanie<br>wnętrz</div>
                </div>
                <div class="card-text">
                    <div class="h1-text">Drewniany szkielet dachu, który przenosi obciążenia z pokrycia dachowego na konstrukcję nośnych ścian budynku. Więźby należą do konstrukcji ciesielskich.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img class="card-img_style" src="./images/surowe.webp" alt="wiezby">
                </div>
                <div class="card-title">
                    <div class="h1-title">Stany<br>surowe</div>
                </div>
                <div class="card-text">
                    <div class="h1-text">Ocieplenie polega na zamocowaniu materiału termoizolacyjnego najczęściej w postaci płyt do ścian budynku od zewnątrz. Przykleja się je za pomocą zaprawy klejowej.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="brown"></div>
    <div class="realisation-text">
        <h1 class="realisation-h1" id="realizacje">Nasze Realizacje</h1>
    </div>
    <div class="gallery">
        <a href="./images/docieplenie.webp" data-lightbox="mygallery"><img class="gallery-img" src="./images/docieplenie.webp"></a>
        <a href="./images/krycie.webp" data-lightbox="mygallery"><img class="gallery-img" src="./images/krycie.webp"></a>
        <a href="./images/surowe.webp" data-lightbox="mygallery"><img class="gallery-img" src="./images/surowe.webp"></a>
        <a href="./images/wiezby2.webp" data-lightbox="mygallery"><img class="gallery-img" src="./images/wiezby2.webp"></a>
    </div>
    <div class="contact">
        <div class="contact-title">
            <h1 class="h1-contanct" id="kontakt">Kontakt</h1>
        </div>
        <div class="contact-text">
            <p class="contact-text-title">Imię:</p><br>
            <input placeholder="Wpisz imię..."></input>
            <p class="contact-text-title">Nazwisko:</p><br>
            <input placeholder="Wpisz nazwisko..."></input>
            <p class="contact-text-title">Numer tel.:</p><br>
            <input placeholder="Wpisz Numer tel..."></input>
            <p class="contact-text-title">Email:</p><br>
            <input placeholder="Wpisz Email..."></input>
            <p class="contact-text-title">Wiadomość:</p><br>
            <input placeholder="Wpisz Wiadomość..."></input>
            <button class="send">Wyślij</button>
        </div>
    </div>
    <div class="opinion">
        <form action="connect.php" method="post">
            <label for="firstname">Imie i Nazwisko</label>
            <input type="text" class="form" id="firstname" name="firstname" />
            <label for="firstname">opinia</label>
            <input type="text" class="form" id="opinia" name="opinia" />
            <input type="submit" class="btn">
        </form>
        <?php
        while($rows=mysql_fetch_assoc($result))
            {
        ?>
            <div class="opinia">
                <h1 class="imie"><?php echo $rows['firstname'];?> </h1>
                <!-- <h2 class="opinia-klienta"><?php echo $rows['opinia'];?></h2> -->
            </div>
        <?php
            }
        ?>
    </div>
</main>
<footer>
    <div class="footer">
        <div class="footer-div">
            <div class="div-telephone">
                <img src="./images/phone.webp" alt="" class="zdj">
            </div>
                <div class="telefon">123 123 123</div>
                <div class="div-telephone">
                    <img src="./images/email.webp" alt="" class="zdj">
                </div>
            <div class="mail">jakisemail@wp.pl</div>
        </div>
    </div>
</footer>
<!-- JS -->
<script src="./js/script.js" type="text/javascript"></script>
</body>
</html>