<?php
    session_start();
    if(isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
    }
    
    if(isset($_POST['login']))
    {
        $login = htmlentities($_POST['login'], ENT_QUOTES, "UTF-8");
        $haslo = $_POST['haslo'];

        require_once "connect.php";

        $polaczenie = @new mysqli($host, $uzytkownik, $db_haslo, $db_nazwa);

        if($polaczenie->connect_errno!=0)
        {
            echo "Error: ".$polaczenie->connect_errno;
        }
        else
        {
            if($zapytanie = $polaczenie->query(sprintf("SELECT * FROM konta WHERE nick='%s'", mysqli_real_escape_string($polaczenie, $login))))
            {
                $ile_kont = $zapytanie->num_rows;
                $rekord = $zapytanie->fetch_assoc();
                if($ile_kont==1)
                {
                    if(password_verify($haslo, $rekord['haslo']))
                    {
                        $_SESSION['zalogowany'] = true;
                        $_SESSION['login_zalogowanego'] = $_POST['login'];
                        header('Location: index.php');
                    }
                    else
                    {
                        $e_logowanie = "Nieprawidłowy login lub hasło!";
                    }
                }
                else
                {
                    $e_logowanie = "Nieprawidłowy login lub hasło!";
                }
                $zapytanie->close();
            }
            $polaczenie->close();        
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manchester City - Zaloguj się</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="manchester, city, manchester city, football, premier league, manchester city fc, fc, zaloguj sie, login, log in, manchester city logowanie"/>
    <meta name="description" content="Zaloguj sie za darmo do oficjalnej strony klubu sportowego Manchester City"/>
    <link rel="stylesheet" type="text/css" href="css/ekran-logowania.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative&display=swap" rel="stylesheet"/>
</head>
<body>
    <a id="link" href="index.php"><img id="logo" src="img/city_logo.png"/></a>
    <div id="container">
        <div id="form">
            <form method="post">
                <div class="okienka"><label>Login:<input type="text" name="login" placeholder="Wpisz login" required/></label><br/></div>
                <div class="okienka"><label>Hasło:<input type="password" name="haslo" placeholder="Wpisz hasło" required/></label><br/></div>
                <input id="button" type="submit" value="Zaloguj się"/>
            </form>
            <?php 
                if(isset($e_logowanie))
                {
                    echo '<span id="blad">'.$e_logowanie.'<span>';
                    unset($e_logowanie);
                }
            ?> 
            <a href="rejestracja.php"><img id="sign-in" src="img/signin.png"></a>
        </div>
    </div>
</body>
</html>