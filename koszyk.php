<?php
    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: ekran-logowania.php');
        exit();
    }

    require_once "connect.php";
            $polaczenie = new mysqli($host, $uzytkownik, $db_haslo, $db_nazwa);
            if($polaczenie->connect_errno!=0)
            {
                echo "Error: ".$polaczenie->connect_errno;
            }
            $login_zalogowanego = $_SESSION['login_zalogowanego'];

            $rezultat = $polaczenie->query("SELECT produkty.zdj_produktu, koszyki.nazwa_produktu, koszyki.ilosc , koszyki.cena, koszyki.iddodania FROM koszyki, produkty WHERE koszyki.login_klienta = '$login_zalogowanego' AND koszyki.nazwa_produktu=produkty.nazwa_produktu ORDER BY koszyki.iddodania DESC");

            $bilety = $polaczenie->query("SELECT * FROM koszyki WHERE login_klienta = '$login_zalogowanego'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manchester City - Koszyk</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="manchester, city, manchester city, football, premier league, manchester city fc, fc, manchester city news, city news, nowosci manchester city, nowosci"/>
    <meta name="description" content="Najnowsze informacje z życia naszego klubu. Wywiady, zdjęcia, newsy i tym podobne!"/>
    <link rel="stylesheet" type="text/css" href="css/moje_bilety.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative&display=swap" rel="stylesheet"/>
</head>
<body>
<header id="main-header">
        <div id="header">
            <div class="h-element">
                <a href="index.php"><img id="logo-city" src="img/city_logo.png"/></a>
            </div>
            <nav>
                <div class="h-element" id="nav">
                    <a href="nowosci.php"><span class="nav-napis">NOWOŚCI</span></a>
                    <span class="nav-napis-hovernt">MECZE</span>
                    <span class="nav-napis-hovernt">BILETY</span>
                    <a href="sklep.php"><span class="nav-napis">SKLEP</span></a>
                    <span class="nav-napis-hovernt">ZAWODNICY</span>
                </div>
            </nav>
            <?php
                if(!isset($_SESSION['zalogowany']))
                {
                    echo<<< END
                        <a href="ekran-logowania.php">
                        <div class="h-element" id="login">
                            <span id="zaloguj-sie">Zaloguj się</span>
                            <img id="login-logo" src="img/login-logo.png">
                        </div>
                        </a>
                    END;
                }
                else{
                    echo<<< END
                        <a href="wyloguj.php">
                        <div class="h-element" id="login">
                            <span id="zaloguj-sie">Wyloguj się</span>
                            <img id="login-logo" src="img/login-logo.png">
                        </div>
                        </a>
                    END;
                }
            ?>
            <div style="clear:both;"></div>
            <div id="dropdown1">
                <img id="dropbtn1" class="rozwijanie-menu" src="img/rozwijanie_menu.png" />
                <div id="dropdown-content1">
                    <a class="dd-text1" href="mecze.php">MECZE</a>
                    <a class="dd-text1" href="wyniki.php">WYNIKI</a>
                    <a class="dd-text1" href="tabela.php">TABELA</a>
                </div>
            </div>
            <div id="dropdown2">
                <img id="dropbtn2" class="rozwijanie-menu" src="img/rozwijanie_menu.png" />
                <div id="dropdown-content2">
                    <a class="dd-text2" href="moje_bilety.php">MOJE BILETY</a>
                    <a class="dd-text2" href="kup_bilet.php">KUP BILET</a>
                    <a class="dd-text2" href="kup_karnet.php">KUP KARNET</a>
                </div>
            </div>
            <div id="dropdown3">
                <img id="dropbtn3" class="rozwijanie-menu" src="img/rozwijanie_menu.png" />
                <div id="dropdown-content3">
                    <a class="dd-text3" href="bramkarze.php">BRAMKARZE</a>
                    <a class="dd-text3" href="obroncy.php">OBROŃCY</a>
                    <a class="dd-text3" href="pomocnicy.php">POMOCNICY</a>
                    <a class="dd-text3" href="napastnicy.php">NAPASTNICY</a>
                </div>
            </div>
        </div>
</header>
<main>
        <div id="naglowek">
            <h1>KOSZYK</h1>
        </div>
    <?php
        echo '<div id="container"';
        if($bilety->num_rows==0)
        {
            echo 'style="height:650px; display:flex; justify-content:center; align-items:center;"';
        }
            echo '>';
    ?>
        <?php


            if($bilety->num_rows==0)
            {
                echo '<span id="brak-biletow">BRAK PRZEDMIOTÓW W KOSZYKU</span>';
            }

            $suma = 0;

            while($row = $rezultat->fetch_assoc())
            {
                echo '<div id="'.$row['iddodania'].'" class="bilet">';
                echo    '<img src='.$row['zdj_produktu'].'/>';
                echo    '<span id="nazwa">'.$row['nazwa_produktu'].'</span>';
                if($row['ilosc']>1)
                {
                    echo    '<a href="koszyk_minus.php?id='.$row['iddodania'].'"><img style="width:35px;" src="img/minus.png"/></a>';
                }
                else
                {
                    echo '<img style="width:35px; position:relative; bottom:3px;" src="img/szary_minus.png"/>';
                }
                echo    '<span id="ilosc">'.$row['ilosc'].'</span>';
                echo    '<a href="koszyk_plus.php?id='.$row['iddodania'].'"><img style="width:35px;" src="img/plus.png"/></a>';
                echo    '<span id="cena">'.$row['cena'].' zł</span>';
                echo    '<a href="usun_z_koszyka.php?id='.$row['iddodania'].'"><img style="width:35px;" src="img/kosz.png"/></a>';
                echo '</div>';
                echo '<br/><br/>';
    
                $suma = $suma + $row['ilosc']*$row['cena'];
            }
            if($bilety->num_rows>0)
            {
            echo '<div id="suma"><span>DO ZAPŁATY: '.$suma.' zł</span></div>';
            echo '<span id="kup">KUP</span>';
            }
        ?>
    </div>
</main>


<?php
    if($bilety->num_rows>1)
    {
    echo <<< END
        <footer>
            <div id="sponsorzy">
                <a target="_blank" href="https://visitabudhabi.ae/en"><img class="loga-sponsorow" src="img/sponsorzy/abudhabi.png"/></a>
                <a target="_blank" href="https://www.ea.com/en-gb/games/fifa/fifa-22"><img class="loga-sponsorow" src="img/sponsorzy/easports.png"/></a>
                <a target="_blank" href="https://www.etihad.com/en/"><img class="loga-sponsorow" src="img/sponsorzy/etihad.png"/></a>
                <a target="_blank" href="https://www.gatorade.com/"><img class="loga-sponsorow" src="img/sponsorzy/gatorade.png"/></a>
                <a target="_blank" href="http://www.nexentire.com/"><img class="loga-sponsorow" src="img/sponsorzy/nexen.png"/></a>
                <a target="_blank" href="http://www2.nissan.co.jp/BRAND/?sclisid=LS_TIJ_99_GO_GLIS_00255174"><img class="loga-sponsorow" src="img/sponsorzy/nissan.png"/></a>
                <a target="_blank" href="https://uk.puma.com/uk/en/home"><img class="loga-sponsorow" src="img/sponsorzy/puma.png"/></a>
                <a target="_blank" href="https://www.rexona.com/"><img class="loga-sponsorow" src="img/sponsorzy/rexona.png"/></a>
                <a target="_blank" href="https://www.sony.com/en/SonyInfo/News/Press/202111/21-055E/"><img class="loga-sponsorow" src="img/sponsorzy/sony.png"/></a>
                <a target="_blank" href="https://www.therabody.com/on/demandware.store/Sites-Theragun-UK-Site/en_GB/Default-Start"><img class="loga-sponsorow" src="img/sponsorzy/theragun.png"/></a>
            </div>
            <div id="stopka">
                <div id="sociale">
                    <a target="_blank" href="https://www.youtube.com/mancity"><img class="ikonka-social" src="img/yt.png"/></a>
                    <a target="_blank" href="https://www.instagram.com/mancity/"><img class="ikonka-social" src="img/ig.png"/></a>
                    <a target="_blank" href="https://twitter.com/mancity"><img class="ikonka-social" src="img/tw.png"/></a>
                    <a target="_blank" href="https://www.facebook.com/mancity/"><img class="ikonka-social" id="fb" src="img/fb.png"/></a>
                </div>
                <div id="support">
                    <address>
                        Wsparcie:<br/>Tel: +44 (0)161 444 1894<br/>E-mail: mancity@mancity.com
                    </address>
                </div>
            </div>
        </footer>
    END;
    }
?>
</body>
</html>
