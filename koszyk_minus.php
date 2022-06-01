<?php
    if(!isset($_GET['id']))
    {
        header('Location: index.php');
        exit();
    }
    $id=$_GET['id'];

    require_once "connect.php";
    $polaczenie = new mysqli($host, $uzytkownik, $db_haslo, $db_nazwa);
    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }

    $rezultat = $polaczenie->query("SELECT * FROM koszyki WHERE iddodania='$id'");
    $tablica=$rezultat->fetch_assoc();
    $ilosc = $tablica['ilosc']-1;


    $odjecie = $polaczenie->query("UPDATE koszyki SET ilosc = $ilosc WHERE iddodania='$id'");

    header('Location: koszyk.php');

    unset($id);
?>