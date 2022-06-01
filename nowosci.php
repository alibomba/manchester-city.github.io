<!DOCTYPE html>
<html>
<head>
    <title>Manchester City - Nowości</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="manchester, city, manchester city, football, premier league, manchester city fc, fc, manchester city news, city news, nowosci manchester city, nowosci"/>
    <meta name="description" content="Najnowsze informacje z życia naszego klubu. Wywiady, zdjęcia, newsy i tym podobne!"/>
    <link rel="stylesheet" type="text/css" href="css/nowosci.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative&display=swap" rel="stylesheet"/>
</head>
<body>
<header>
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
                session_start();
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
    <section>
        <h1 id="naglowek-strony">NOWOŚCI</h1>
        <div id="container">
            <div id="row">
                <a href="news1.php"><div class="news" id="one">
                    <h1>Mistrzostwo Anglii zdobyte</h1>
                    <img src="img/1.jpg"/>
                </div></a>
                <a href=""><div class="news" id="two">
                    <h1>Kevin De Bryune zawodnikiem sezonu</h1>
                    <img src="img/kdb.jpg"/>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div id="row">
                <a href=""><div class="news" id="three">
                    <h1>Aymeric Laporte kontuzjowany</h1>
                    <img src="img/3.jpg"/>
                </div>
                <a href=""><div class="news" id="four">
                    <h1>Phil Foden zawodnikiem miesiąca</h1>
                    <img src="img/foden.jpg"/>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div id="row">
                <a href=""><div class="news" id="five">
                    <h1>Jubileusz konferansjera na Etihad Stadium</h1>
                    <img src="img/5.png"/>
                </div>
                <a href=""><div class="news" id="six">
                    <h1>Nowe gadżety w naszym sklepie</h1>
                    <img src="img/6.jpg"/>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div id="row">
                <a href=""><div class="news" id="seven">
                    <h1>Nowy strój domowy na nowy sezon</h1>
                    <img src="img/7.jpg"/>
                </div>
                <a href=""><div class="news" id="eight">
                    <h1>Galeria zdjęć z meczu z West Ham United</h1>
                    <img src="img/8.jpg"/>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div id="row">
                <a href=""><div class="news" id="nine">
                    <h1>Skrót meczu z West Ham United</h1>
                    <img src="img/9.jpg"/>
                </div>
                <a href=""><div class="news" id="ten">
                    <h1>Przedmeczowy wywiad z trenerem Guardiolą</h1>
                    <img src="img/10.jpg"/>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div id="row">
                <a href=""><div class="news" id="eleven">
                    <h1>Przebudowa szatni gospodarzy</h1>
                    <img src="img/11.jpg"/>
                </div>
                <a href=""><div class="news" id="twelve">
                    <h1>Rzeźba Sergio Aguero gotowa</h1>
                    <img src="img/12.jpg"/>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div id="row">
                <a href=""><div class="news" id="thirteen">
                    <h1>Guardiola nominowany do nagrody trenera sezonu</h1>
                    <img src="img/13.png"/>
                </div>
                <a href=""><div class="news" id="fourteen">
                    <h1>Ederson wygrywa złotą rękawicę</h1>
                    <img src="img/14.jpg"/>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div id="row">
                <a href=""><div class="news" id="fifteen">
                    <h1>Kevin De Bruyne strzela 4 gole</h1>
                    <img src="img/15.jpg"/>
                </div>
                <a href=""><div class="news" id="sixteen">
                    <h1>Galeria zdjęć z wczorajszego treningu</h1>
                    <img src="img/16.jpg"/>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </section>
</main>
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
</body>
</html>