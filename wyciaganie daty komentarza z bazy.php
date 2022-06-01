<?php
    require_once "connect.php";

    $polaczenie = new mysqli($host, $uzytkownik, $db_haslo, $db_nazwa);

    if($rezultat = $polaczenie->query("SELECT * FROM komentarze_1 WHERE id=2"))
    {
        $wiersz = $rezultat->fetch_assoc();
        $data_z_bazy = $wiersz['godzina'];
        
        $godzina_opublikowania = new DateTime($data_z_bazy);
        echo "Data opublikowania: ".$godzina_opublikowania->format('H:i d.m.Y');
    }
    



    $polaczenie->close();

    




?>