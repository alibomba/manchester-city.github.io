<?php
    session_start();

    if(!isset($_POST['surname']))
    {
        header('Location: kup-teraz.php');
        exit();
    }

    require_once "connect.php";
    $polaczenie = new mysqli($host, $uzytkownik, $db_haslo, $db_nazwa);
    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }
    $id = $_SESSION['id'];

    $rezultat = $polaczenie->query("SELECT * FROM produkty WHERE idproduktu = '$id'");
    $tablica = $rezultat->fetch_assoc();
    $nazwa_produktu = $tablica['nazwa_produktu'];
    $login_klienta = $_SESSION['login_zalogowanego'];
    $nazwisko = $_POST['surname'];
    $miasto = $_POST['miejscowosc'];
    $kod_pocztowy = $_POST['kod-pocztowy'];
    $adres = htmlentities($_POST['adres']);
    $nr_lokalu = $_POST['nr-lokalu'];
    $nr_tel = $_POST['nr-telefonu'];

    $dodanie = $polaczenie->query("INSERT INTO zamowienia VALUES (NULL, '$nazwa_produktu', '$login_klienta', '$nazwisko', '$miasto', '$kod_pocztowy', '$adres', '$nr_lokalu', '$nr_tel', now(), 'Oczekiwanie')");


    $rezultat->close();
    $polaczenie->close();
    
    header('Location: index.php');
    unset($_SESSION['id']);
?>