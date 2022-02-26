<?php
session_start();
include("config.php");
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    return $ip; 
}

$user_ip = getUserIP();
//wyjściowe ip do hostingu
$localIP = getHostByName(getHostName());
//lokalne ip                   

if(isset($_SESSION['login'])){
    header("Location: index");
}else{
    if(isset($_POST['przycisk']) && !empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['login']) && !empty($_POST['haslo']) && !empty($_POST['email']) && !empty($_POST['data'])){
        $imie = $mysqli->real_escape_string(htmlentities($_POST['imie']));
        $nazwisko = $mysqli->real_escape_string(htmlentities($_POST['nazwisko']));
        $login = $mysqli->real_escape_string(htmlentities($_POST['login']));
        $haslo = $mysqli->real_escape_string(htmlentities(md5($_POST['haslo'])));
        $email = $mysqli->real_escape_string(htmlentities($_POST['email']));
        $data = $mysqli->real_escape_string(htmlentities($_POST['data']));
        $adres = $mysqli->real_escape_string(htmlentities($user_ip));
        mysqli_set_charset($mysqli, "utf8");
        $chcklogin = mysqli_query($mysqli,"SELECT * FROM `rejestracja` WHERE Login = '$login'");
        if(mysqli_num_rows($chcklogin) != 0){
            $_SESSION['exlogin']='';
        }else{     
        $sql = "INSERT INTO `rejestracja` (`Id`, `Imie`, `Nazwisko`, `Login`, `Haslo`,`Email`, `Data_ur`,`Adres`) VALUES (NULL, '$imie', '$nazwisko', '$login', '$haslo', '$email', '$data','$adres')";
            if($mysqli->query($sql) === true){
                $_SESSION['zarejestrowany'] = "Użytkownik został zarejestrowany";
                header("location: welcome?regtrue");
                mysql_close($mysqli);
            }else{
                $_SESSION['niezarejestrowany'];
                mysql_close($mysqli);
            }
        }    
}
}   
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="300">
<title>Rejestracja</title>
<meta name="keywords" content="Mitshubishi, Auta, Samochody, Cars, Lancer, Evo, X," />
<meta name="description" content="Strona internetowa na temat firmy Mitshubishi" />
<link rel="icon" type="image/gif" href="./images/head.png">
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
                <a href="index"><img src="images/head1.png"></a>
			</div>
			<div id="menu">
				<ul>
					<li><a href="Strona główna" accesskey="1">Strona główna</a></li>
					<li><a href="galeria" accesskey="2">Galeria</a></li>
                    <li><a href="about" accesskey="3">O stronie</a></li>
                    <li><a href="map" accesskey="4">Mapa</a></li>
					<li><a href="login" accesskey="5">Zaloguj się</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="banner" class="container">
        <img class="slider" src="images/banner.png" width="1000" height="300" alt="" />
        <img class="slider" src="images/banner1.png" width="1000" height="300" alt="" />
        <img class="slider" src="images/banner2.jpg" width="1000" height="300" alt="" />
        <img class="slider" src="images/banner3.jpg" width="1000" height="300" alt="" />
        <img class="slider" src="images/banner4.jpg" width="1000" height="300" alt="" />
    </div>
	<div id="page" class="container">
		<div id="content">
             <fieldset>
			<div id="box1">
				<h2 class="title"><a href="rejestracja"><center>Rejestracja</center></a></h2>
            </div> 
				<ul class="style1">
                        <form action="rejestracja" method="post" autocomplete="off">
                                <div id="komunikat"></div>
                                    <input id="imie" name="imie" placeholder="Imię" type="text" autofocus><br><br><br>
                                    <input id="nazwisko" name="nazwisko" placeholder="Nazwisko" type="text"><br><br><br>
                                    <input id="login" name="login" placeholder="Login [min. 6 znaków]" type="text"><br><br><br>
                                    <input id="haslo" name="haslo" placeholder="Hasło [min. 8 znaków, 1 cyfra, 1 znak specjalny]" type="password"><br><br><br>
                                    <input id="haslo2" placeholder="Powtórz hasło" type="password" ><br><br><br>
                                    <input id="mail1" name="email" placeholder="Adres poczty" type="text"><br><br><br>
                                    <input id="mail2" placeholder="Powtórz adres poczty" type="text" ><br><br><br>
                                    <input id="data" name="data" type="date" min="1939-09-01" max="2012-01-01" required> Data urodzenia<br><br><br>
                                    <input type="checkbox" id="regulamin"><center>Zatwierdź regulamin</center><br><br><br>
                                    <button id="przycisk" name='przycisk' disabled>Wyślij</button>
                                    <button id="popraw">Popraw dane</button>
                        </form>
                    
                    
				</ul>
                    
                </fieldset>
            <br>
            <?php
                    if(isset($_SESSION['niezarejestrowany'])){
                        echo "<center><h2>Użytkownik nie został zarejstrowany !</h2></center>";
                        unset($_SESSION['niezarejestrowany']);
                    }else if(isset($_SESSION['exlogin'])){
                        echo "<center><h2>Użytkownik o takim loginie już istnieje !</h2></center>";
                        unset($_SESSION['exlogin']);
                    }
                    ?>
	
		</div>
        	<div id="sidebar">
			<h2>Samochody</h2>
			<ul class="style3">
				<li class="first">
                    <p class="zdj" id="zdja"></p>
                    <p id="zdj1"></p>

				</li>
				<li>
					<p class="zdj" id="zdjb"></p>
					<p id="zdj2"></p>
				</li>
				<li>
					<p class="zdj" id="zdjc"></p>
					<p id="zdj3"></p>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<p>&copy; Project Mitsubishi. Made by Shadowbeast<p>Work in progress</p>
        <center><a id='Data'></a> <a id='Czas'></a></center>
	</div>
</div>
<script src="./js/czas.js"></script>
<script src="./js/losowanie.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/rejestracja.js"></script>
</body>
</html>