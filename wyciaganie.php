<?php
    require_once "connect.php";

    $polaczenie = new mysqli($host, $uzytkownik, $db_haslo, $db_nazwa);
   /*if($rezultat = $polaczenie->query("SELECT * FROM komentarze_1 ORDER BY id DESC"))
    {
        
        while ($row = $rezultat->fetch_assoc()) 
        {
            echo $row["autor"].$row["godzina"].$row["tresc"];
            echo "<br/>";
        }

        echo "<br/> <br/> <br/> <br/> <br/>";
    */
    $pomocnicza = $polaczenie->query("SELECT * FROM komentarze_1");
    $liczba_komentarzy = $pomocnicza->num_rows;
    $pomocnicza->close();

       

    for($i = 0; $i<$liczba_komentarzy; $i++)
    {
        $rezultat = $polaczenie->query("SELECT * FROM komentarze_1 WHERE id=($liczba_komentarzy+/*liczba o 1 mniejsza niz id pierwszego koma w bazie*/7)-$i");
        $row = $rezultat->fetch_assoc();
        echo $row["autor"].$row["godzina"].$row["tresc"];
        echo "<br/>";
        $rezultat->close();
    }






        
    

    
    $polaczenie->close();

?>