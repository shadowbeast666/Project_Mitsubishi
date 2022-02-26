<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: index");
    
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zmiana Loginu</title>
<meta charset="utf-8">
<link rel="icon" type="image/gif" href="./images/head.png">
<meta name="keywords" content="Mitshubishi, Auta, Samochody, Cars, Lancer, Evo, X," />
<meta name="description" content="Strona internetowa na temat firmy Mitshubishi" />
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
                <a href="index">
                <img src="images/head1.png"> </a>
			</div>
			<div id="menu">
				<ul>
					<li class="active"><a href="panel" accesskey="1">Panel</a></li>
					<li><a href="galeria" accesskey="2">Galeria</a></li>
                    <li><a href="about" accesskey="3">O stronie</a></li>
                    <li><a href="map" accesskey="4">Mapa</a></li>
                    <?php if(isset($_SESSION['login'])){
                    echo "<li><a href='logout' accesskey='5'>Wyloguj się</a></li>";
                    }
                    ?>
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
			<div id="box1">
			</div>
			<div>
                <h2 class="title"><a href="zmienlogin">Zmień swój Login</a></h2><br><br>
				<ul class="style1">
					<li class="first">
                        <form method="post" action="zmienlogin">
                        <input type="text" id="login1" placeholder="Podaj nowy login" name="pole1">
                            <br><br><br>
                        <input type="text" id="login2" placeholder="Powtórz swój login" name="pole2" disabled>
                            <br><br><br>
                        <center><button id="key" name="key">Zmien</button></center>
                        </form>
					</li>
                    <p id='komunikat'></p>
                    <li>
                        <a href="panel" class="button-style">Powrót</a>
                    </li>
				</ul>
                <?php
                include_once("config.php");
                mysqli_set_charset($mysqli, "utf8");
                $login = $_SESSION['login'];
                if(isset($_POST['key'])){
                    if(!empty($_POST['pole1']) && !empty($_POST['pole2'])){
                    $newlogin = $mysqli->real_escape_string(htmlentities($_POST['pole1']));
                    $chcklogin = mysqli_query($mysqli,"SELECT * FROM `rejestracja` WHERE Login = '$login'");
                    $sprawdz = mysqli_query($mysqli,"SELECT * FROM `rejestracja` WHERE Login = '$newlogin'");
                    if(mysqli_num_rows($chcklogin) === 1 && mysqli_num_rows($sprawdz) === 0){
                        $sql = "UPDATE `rejestracja` SET `Login`='$newlogin' WHERE Login = '$login'";
                            if($mysqli->query($sql) === true){
                                $_SESSION['zmianalogin'] = "Login został zmieniony";
                                $_SESSION['login'] = $newlogin;
                                header("location: welcome?logintrue");
                        
                            }else{     
                                $_SESSION['nielogin'];
                            }
                    }else{
                        echo "<center><h2>Wybierz inny login !!!!!</h2></center>";
                        }    
                }else{
                        echo "<center><h2>Żadne z pól nie może być puste</h2></center>";
                        
                    }
                } 
                ?>
			</div>
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
<script src="./js/losowanie.js"></script>
<script src="./js/login.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/czas.js"></script>
</body>
</html>