<?php
    session_start();

    if(isset($_POST['login']))
    {
        $ok = true;

        if(ctype_alnum($_POST['login']) == false)
        {
            $ok = false;
            $e_login = "Nazwa może składać się tylko z liter i cyfr!";
        }
        if((strlen($_POST['login'])<3) || (strlen($_POST['login'])>20))
        {
            $ok = false;
            $e_login = "Nazwa musi posiadać od 3 do 20 znaków!";
        }
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false)
        {
            $ok = false;
            $e_email = "Podaj poprawny adres e-mail!";
        }
        if($_POST['haslo1']!=$_POST['haslo2'])
        {
            $ok = false;
            $e_haslo = "Podane hasła muszą być identyczne";
        }
        if((strlen($_POST['haslo1'])<8) || (strlen($_POST['haslo1'])>20))
        {
            $ok = false;
            $e_haslo = "Hasło musi posiadać od 8 do 20 znaków!";
        }
        if(!isset($_POST['regulamin']))
        {
            $ok = false;
            $e_regulamin = "Musisz zaakceptować regulamin";
        }

        require_once "connect.php";
        $polaczenie = @new mysqli($host, $uzytkownik, $db_haslo, $db_nazwa);

        if($polaczenie->connect_errno!=0)
        {
            echo "Error: ".$polaczenie->connect_errno;
        }
        else
        {
            $login = $_POST['login'];
            $email = $_POST['email'];
            $haslo = password_hash($_POST['haslo1'], PASSWORD_BCRYPT);


            if($rezultat = $polaczenie->query("SELECT id FROM konta WHERE nick='$login'"))
            {
                $ile_nickow = $rezultat->num_rows;
                if($ile_nickow>0)
                {
                    $ok = false;
                    $e_login = "Istnieje już użytkownik o podanej nazwie!";
                }
                $rezultat->close();
            }
            if($rezultat2 = $polaczenie->query("SELECT id FROM konta WHERE email='$email'"))
            {
                $ile_maili = $rezultat2->num_rows;
                if($ile_maili>0)
                {
                    $ok = false;
                    $e_email = "Istnieje już użytkownik o podanym adresie e-mail!";
                }
                $rezultat2->close();
            }
            
            if($ok == true)
            {

                if($polaczenie->query("INSERT INTO konta VALUES (NULL, '$login', '$email', '$haslo')"))
                $udana_rejestracja = "Konto zostało pomyślnie założone! Możesz się teraz zalogować.";
            }

            $polaczenie->close();
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manchester City - Zarejestruj się</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="manchester, city, manchester city, football, premier league, manchester city fc, fc, zarejestruj sie, register, sign in, manchester city rejestracja"/>
    <meta name="description" content="Zarejestruj sie za darmo do oficjalnej strony klubu sportowego Manchester City"/>
    <link rel="stylesheet" type="text/css" href="css/rejestracja.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative&display=swap" rel="stylesheet"/>
</head>
<body>
    <a id="link" href="index.php"><img id="logo" src="img/city_logo.png"/></a>
    <div id="container">
        <div id="form">
            <form method="post">
                <div id="login" class="okienka"><label>Login:<input type="text" name="login" placeholder="Wpisz login"/></label><br/></div>
                <?php
                    if(isset($e_login))
                    {
                        echo '<span id="blad">'.$e_login."</span>";
                        unset($e_login);
                    }     
                ?>
                <div id="e-mail" class="okienka"><label>E-mail:<input type="text" name="email" placeholder="Wpisz e-mail"/></label><br/></div>
                <?php
                    if(isset($e_email))
                    {
                        echo '<span id="blad">'.$e_email."</span>";
                        unset($e_email);
                    }     
                ?>
                <div id="haslo" class="okienka"><label>Hasło:<input type="password" name="haslo1" placeholder="Wpisz hasło"/></label><br/></div>
                <?php
                    if(isset($e_haslo))
                    {
                        echo '<span id="blad">'.$e_haslo."</span>";
                        unset($e_haslo);
                    }     
                ?>
                <div id="powtorz_haslo" class="okienka"><label>Powtórz hasło:<input type="password" name="haslo2" placeholder="Powtórz hasło"/></label><br/></div>
                <div id="regulamin" class="okienka"><label>Akceptuję regulamin<input type="checkbox" name="regulamin"/></label><br/></div>
                <?php
                    if(isset($e_regulamin))
                    {
                        echo '<span id="blad_regulamin">'.$e_regulamin."</span>";
                        unset($e_regulamin);
                    }     
                ?>
                <input id="button" type="submit" value="Zarejestruj się"/>
                <?php
                    if(isset($udana_rejestracja))
                    {
                        echo '<br/><span id="udana">'.$udana_rejestracja."</span>";
                        unset($udana_rejestracja);
                    }     
                ?>
            </form> 
            <a href="ekran-logowania.php"><img id="log-in" src="img/login.png"></a>
        </div>
    </div>
</body>
</html>