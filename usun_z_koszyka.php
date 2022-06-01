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

    $usuniecie = $polaczenie->query("DELETE FROM koszyki WHERE iddodania='$id'");

    header('Location: koszyk.php');

    unset($id);
?>