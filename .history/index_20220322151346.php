<?php
include 'config.php';
if(isset($_POST['submit'])) {
    $firstname = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $opinia = $_POST['opinia'];

    $wstaw = "INSERT INTO opinie_klienta VALUES (NULL,'$firstname','$nazwisko','$opinia')";
    $result = mysqli_query($conn, $wstaw);
    if ($result) {
        echo "<script>alert('Komentarz dodany.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jakub Paszko">
    <meta name="keywords" content="budowa,budowlana,strona budowlana,">
    <meta name="description" content="Strona budowlana">
    <meta name="theme-color" content="#9c7d5d">
    <title>BEL-DOM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./lightbox.min.css">
    <script src="./js/lightbox-plus-jquery.min.js"></script>
    <style>
        ::-webkit-scrollbar {
            width: 20px;
        }
        ::-webkit-scrollbar-track {
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background-color: #9c7d5d;
        }
    </style>
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
            <li class="navigation__item"><a href="#opinie">Opinie </a></li>
        </ul>
    </div>
    <!-- MAIN CONTAINER -->
    <div class="main--container">
        <div class="nav">
            <div class="header__logo right">
                <img class="logo__pic logo-padding" src="./images/logo.webp" alt="logo">
            </div>
            <div class="nav-container">
                <ul class="nav--list">
                    <li class="nav__item"><a class="black" href="#zajmujemy">Zajmujemy się</a></li>
                    <li class="nav__item"><a class="black" href="#realizacje">Realizacje</a></li>
                    <li class="nav__item"><a class="black" href="#kontakt">Kontakt</a></li>
                    <li class="nav__item"><a class="black" href="#opinie">Opinie </a></li>
                </ul>
            </div>
        </div>
        <div class="background__pic">
            <img class="bck" src="./images/tlo3.webp" alt="background">
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
        <div class="contact-title space">
            <h1 class="h1-realisation" id="zajmujemy">Zajmujemy się</h1>
        </div>
        <!-- <h2 class="text-h2" id="zajmujemy">Zajmujemy się</h2> -->
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
        <a href="./images/docieplenie.webp" data-lightbox="mygallery"><img class="gallery-img" alt="docieplenie" src="./images/docieplenie.webp"></a>
        <a href="./images/krycie.webp" data-lightbox="mygallery"><img class="gallery-img" alt="krycie" src="./images/krycie.webp"></a>
        <a href="./images/surowe.webp" data-lightbox="mygallery"><img class="gallery-img" alt="surowe" src="./images/surowe.webp"></a>
        <a href="./images/wiezby2.webp" data-lightbox="mygallery"><img class="gallery-img" alt="wiezby" src="./images/wiezby2.webp"></a>
    </div>
    <div class="contact">
        <div class="contact-title">
            <h1 class="h1-contanct" id="kontakt">Kontakt</h1>
        </div>
        <div class="contact-text">
            <p class="contact-text-title">Imię:</p><br>
            <input class="contact-input" placeholder="Wpisz imię..."></input>
            <p class="contact-text-title">Nazwisko:</p><br>
            <input class="contact-input" placeholder="Wpisz nazwisko..."></input>
            <p class="contact-text-title">Numer tel.:</p><br>
            <input class="contact-input" placeholder="Wpisz Numer tel..."></input>
            <p class="contact-text-title">Email:</p><br>
            <input class="contact-input" placeholder="Wpisz Email..."></input>
            <p class="contact-text-title">Wiadomość:</p><br>
            <input class="contact-input" placeholder="Wpisz Wiadomość..."></input>
            <button class="send">Wyślij</button>
        </div>
    </div>
    <div class="opinion">
        <div class="contact-title">
            <h1 class="h1-opinion" id="opinie">Wystaw opinie</h1>
        </div>
        <div class="contact-text">
            <form action="" method="post" class="form">
                <p class="opinon-text-title">Imię:</p><br>
                <input class="opinion-input" name="imie" placeholder="Wpisz imię..."></input>
                <p class="opinon-text-title" >Nazwisko:</p><br>
                <input class="opinion-input" name="nazwisko" placeholder="Wpisz nazwisko..."></input>
                <p class="opinon-text-title">Opinia:</p><br>
                <input class="opinion-input" name="opinia" placeholder="Wpisz opinie..."></input>
                <button class="send-opinion" name="submit">Wystaw opinie</button>
            </form>
        </div>

        <?php
        $sql = 'SELECT * FROM opinie_klienta';
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>


        <div class="comment">
            <div class="single-comment">
                <h1 class="comment-h1"><?php echo $row['imie']; ?> <?php echo $row['nazwisko']; ?></h1>
                <h2 class="comment-h2"><?php echo $row['opinia']; ?></h2>
            </div>
            <!-- <div class="single-comment">
                <h1 class="comment-h1">Andrzej Kowalski</h1>
                <h2 class="comment-h2">Super wykonanie, wszystko zadbane do końca.</h2>
            </div>
            <div class="single-comment">
                <h1 class="comment-h1">Andrzej Kowalski</h1>
                <h2 class="comment-h2">Super wykonanie, wszystko zadbane do końca. Super wykonanie, wszystko zadbane do końca. Super wykonanie, wszystko zadbane do końca.</h2>
            </div> -->

            <?php
                }
            }
            ?>

        </div>
    </div>
</main>
<footer>
    <div class="footer">
        <div class="footer-div">
            <div class="div-telephone">
                <img src="./images/phone.webp" alt="phone" class="zdj">
            </div>
                <div class="telefon">123 123 123</div>
                <div class="div-telephone">
                    <img src="./images/email.webp" alt="email" class="zdj">
                </div>
            <div class="mail">jakisemail@wp.pl</div>
        </div>
    </div>
</footer>
<!-- JS -->
<script src="./js/script.js" type="text/javascript"></script>
</body>
</html>