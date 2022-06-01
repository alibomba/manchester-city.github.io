<!DOCTYPE html>
<html>
<head>
    <title>Manchester City - Sklep</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="manchester, city, manchester city, football, premier league, manchester city fc, fc, manchester city news, city news, nowosci manchester city, nowosci"/>
    <meta name="description" content="Najnowsze informacje z życia naszego klubu. Wywiady, zdjęcia, newsy i tym podobne!"/>
    <link rel="stylesheet" type="text/css" href="css/sklep.css"/>
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
    <header>
        <div id="przyciski">
            <a href="koszyk.php"><span id="koszyk">KOSZYK</span></a>
            <a href="historia-zamowien.php"><span>HISTORIA ZAMOWIEŃ</span></a>
        </div>
        <div id="naglowek">
            <h1>SKLEP</h1>
        </div>
    </header>
    <section>
        <div id="container">
            <div class="row">
                <div class="produkt">
                    <a href="produkt.php?id=4"><img src="img/produkty/4.png"/><br/>
                    <span class="nazwa">KOSZULKA MANCHESTERU CITY Z NADRUKIEM CHAMPIONS</span></a><br/><br/>
                    <span>189,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=5"><img src="img/produkty/5.png"/><br/>
                    <span class="nazwa">SPODENKI MECZOWE MANCHESTERU CITY</span></a><br/><br/>
                    <span>99,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=6"><img src="img/produkty/6.png"/><br/>
                    <span class="nazwa">GETRY MECZOWE MANCHESTERU CITY</span></a><br/><br/>
                    <span>49,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=7"><img src="img/produkty/7.png"/><br/>
                    <span class="nazwa">KOSZULKA BRAMKARSKA Z DŁUGIM RĘKAWEM MANCHESTERU CITY</span></a><br/><br/>
                    <span>169,99 zł</span>
                </div>
            </div>
            <div class="row">
                <div class="produkt">
                    <a href="produkt.php?id=8"><img src="img/produkty/8.png"/><br/>
                    <span class="nazwa">KOSZULKA MECZOWA<br/>KEVINA DE BRUYNE</span></a><br/><br/>
                    <span>209,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=9"><img src="img/produkty/9.png"/><br/>
                    <span class="nazwa">KOSZULKA MECZOWA<br/>PHILA FODENA</span></a><br/><br/>
                    <span>209,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=10"><img src="img/produkty/10.png"/><br/>
                    <span class="nazwa">KOSZULKA MECZOWA JACKA GREALISHA</span></a><br/><br/>
                    <span>209,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=11"><img src="img/produkty/11.png"/><br/>
                    <span class="nazwa">KOSZULKA MECZOWA BERNARDO SILVY</span></a><br/><br/>
                    <span>209,99 zł</span>
                </div>
            </div>
            <div class="row">
                <div class="produkt">
                    <a href="produkt.php?id=12"><img src="img/produkty/12.png"/><br/>
                    <span class="nazwa">KOSZULKA TRENINGOWA MANCHESTERU CITY</span></a><br/><br/>
                    <span>59,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=13"><img src="img/produkty/13.png"/><br/>
                    <span class="nazwa">BLUZA TRENINGOWA MANCHESTERU CITY</span></a><br/><br/>
                    <span>109,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=14"><img src="img/produkty/14.png"/><br/>
                    <span class="nazwa">NIEBIESKA CZAPKA KLUBOWA MANCHESTERU CITY</span></a><br/><br/>
                    <span>49,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=15"><img src="img/produkty/15.png"/><br/>
                    <span class="nazwa">FIOLETOWA BLUZA Z KAPTUREM MANCHESTERU CITY</span></a><br/><br/>
                    <span>119,99 zł</span>
                </div>
            </div>
            <div class="row">
                <div class="produkt">
                    <a href="produkt.php?id=16"><img src="img/produkty/16.png"/><br/>
                    <span class="nazwa">NIEBIESKA BLUZA Z KAPTUREM MANCHESTERU CITY</span></a><br/><br/>
                    <span>119,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=17"><img src="img/produkty/17.png"/><br/>
                    <span class="nazwa">NIEBIESKI T-SHIRT MANCHESTERU CITY</span></a><br/><br/>
                    <span>59,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=18"><img src="img/produkty/18.png"/><br/>
                    <span class="nazwa">BIAŁY T-SHIRT MANCHESTERU CITY</span></a><br/><br/>
                    <span>59,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=19"><img src="img/produkty/19.png"/><br/>
                    <span class="nazwa">RĘCZNIK PLAŻOWY MANCHESTERU CITY</span></a><br/><br/>
                    <span>59,99 zł</span>
                </div>
            </div>
            <div class="row">
                <div class="produkt">
                    <a href="produkt.php?id=20"><img src="img/produkty/20.png"/><br/>
                    <span class="nazwa">SZALIK KIBICA MANCHESTERU CITY</span></a><br/><br/>
                    <span>49,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=21"><img src="img/produkty/21.png"/><br/>
                    <span class="nazwa">MINI FIGURKA RUBENA DIASA</span></a><br/><br/>
                    <span>24,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=22"><img src="img/produkty/22.png"/><br/>
                    <span class="nazwa">MINI FIGURKA ILKAYA GUNDOGANA</span></a><br/><br/>
                    <span>24,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=23"><img src="img/produkty/23.png"/><br/>
                    <span class="nazwa">MINI FIGURKA RODRIGO</span></a><br/><br/>
                    <span>24,99 zł</span>
                </div>
            </div>
            <div class="row">
                <div class="produkt">
                    <a href="produkt.php?id=24"><img src="img/produkty/24.png"/><br/>
                    <span class="nazwa">MINI FIGURKA JOÃO CANCELO</span></a><br/><br/>
                    <span>24,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=25"><img src="img/produkty/25.png"/><br/>
                    <span class="nazwa">BRELOK MANCHESTERU CITY</span></a><br/><br/>
                    <span>22,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=26"><img src="img/produkty/26.png"/><br/>
                    <span class="nazwa">ODŚWIEŻACZ POWIETRZA DO SAMOCHODU MANCHESTERU CITY</span></a><br/><br/>
                    <span>19,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=27"><img src="img/produkty/27.png"/><br/>
                    <span class="nazwa">BIDON MANCHESTERU CITY</span></a><br/><br/>
                    <span>49,99 zł</span>
                </div>
            </div>
            <div class="row">
                <div class="produkt">
                    <a href="produkt.php?id=28"><img src="img/produkty/28.png"/><br/>
                    <span class="nazwa">KUFEL MANCHESTERU CITY</span></a><br/><br/>
                    <span>34,99 zł</span>
                </div>
                <div class="produkt">
                <a href="produkt.php?id=29"><img src="img/produkty/29.png"/><br/>
                    <span class="nazwa">KOSTKA RUBIKA MANCHESTERU CITY</span></a><br/><br/>
                    <span>49,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=30"><img src="img/produkty/30.png"/><br/>
                    <span class="nazwa">PLECAK MANCHESTERU CITY</span></a><br/><br/>
                    <span>69,99 zł</span>
                </div>
                <div class="produkt">
                    <a href="produkt.php?id=31"><img src="img/produkty/31.png"/><br/>
                    <span class="nazwa">MODEL ETIHAD STADIUM</span></a><br/><br/>
                    <span>89,99 zł</span>
                </div>
            </div>
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