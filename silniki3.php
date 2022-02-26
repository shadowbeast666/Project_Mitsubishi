<?php
session_start();
include_once('config.php');
if(!isset($_SESSION['login'])){
    header("Location: index");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Project Mitsubishi</title>
<link rel="icon" type="image/gif" href="./images/head.png">
<meta charset="utf-8">
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
                <a href="index"><img src="images/head1.png"></a>
			</div>
			     <div id="menu">
				        <ul>
					       <li class="active"><a href="silniki" accesskey="1">Silniki Mitsubishi</a></li>
					       <li><a href="galeria" accesskey="2">Galeria</a></li>
                           <li><a href="about" accesskey="3">O stronie</a></li>
                           <li><a href="map" accesskey="4">Mapa</a></li>
                            
                                <?php
                                if(isset($_SESSION['login'])){
                                //echo <<<WIERSZ
                               // <li><a href="panel" accesskey="4" title="">Panel użytkownika</li>
                                echo "<li><a href='panel' accesskey='5' >Panel</a></li>";
                                //WIERSZ;
                                }else
                                echo "<li><a href='login' accesskey='5' >Zaloguj się</a></li>";
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
                <h2 class="title"><a href="index"><center><strong>Technologia stosowana w silnikach samochodów Mitsubishi</strong>.</center></a></h2><br>
			</div>
			<div>
				<ul class="style1">
					<li class="first">
						<h2 style="color: red"><center>MIVEC</center></h2><br><br>
						<p>Silnik z elektronicznie sterowanym systemem zmiennych faz rozrządu, które zaprojektowano w Japonii, a produkcję uruchomiono w nowych zakładach Mitsubishi Motors Corporation. Zmniejsza się przez to zużycie paliwa i poprawia się dynamika silnika, gdyż zawory otwierają się bez opóźnień. System zastosowano m.in. w modelu Lancer Evolution IX.</p>
						
					</li>
                    <li>
                        <a href="silniki2" class="button-style">Poprzednia strona</a><a href="silniki" id='buttonr' class="button-style">Przejdz na początek</a>
                    </li>
				</ul>
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
<script src="./js/slider.js"></script>
<script src="./js/czas.js"></script>
</body>
</html>