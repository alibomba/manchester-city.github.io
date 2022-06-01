<?php
    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: ekran-logowania.php');
        exit();
    }
    if(!isset($_GET['id']))
    {
        header('Location: index.php');
        exit();
    }

    $id = $_GET['id'];

    require_once "connect.php";
    $polaczenie = new mysqli($host, $uzytkownik, $db_haslo, $db_nazwa);
    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }

    $rezultat = $polaczenie->query("SELECT * FROM produkty WHERE idproduktu='$id'");
    $row = $rezultat->fetch_assoc();

    $nazwa_produktu = $row['nazwa_produktu'];
    $login_klienta = $_SESSION['login_zalogowanego'];
    $cena = $row['cena'];

    $czy_juz_jest = $polaczenie->query("SELECT * FROM koszyki WHERE nazwa_produktu = '$nazwa_produktu'");
    
    if($czy_juz_jest->num_rows>0)
    {
        $tablica = $czy_juz_jest->fetch_assoc();
        $ilosc = $tablica['ilosc']+1;
        $iddodania = $tablica['iddodania'];


        $dodanie = $polaczenie->query("UPDATE koszyki SET ilosc=$ilosc WHERE iddodania = $iddodania");
    }
    else
    {
    $dodanie_do_koszyka = $polaczenie->query("INSERT INTO koszyki VALUES(NULL, '$nazwa_produktu', '$login_klienta', '$cena', 1)");
    }

    unset($id);
    header('Location: koszyk.php');
?>