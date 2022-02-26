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
					       <li class="active"><a href="index" accesskey="1">TOP 12</a></li>
					       <li><a href="galeria" accesskey="2">Galeria</a></li>
                           <li><a href="about" accesskey="3">O stronie</a></li>
                           <li><a href="map" accesskey="4">Mapa</a></li>
                            
                                <?php
                                if(isset($_SESSION['login'])){
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
                <h2 class="title"><a href="index"><strong>Lista Top 12 samochodów Mitshubishi</strong>.</a></h2><br>
				<p><strong style="font-size: 12px;">Poniżej przedstawiamy listę 12 najbardziej popularnych modeli samochodów firmy Mitshubishi.</strong></p>
			</div>
			<div>
				<ul class="style1">
					<li class="first">
						<h3><em><img src="images/10.jpg" alt="" width="130" height="130" class="alignleft border" /></em>#10 Mitshubishi 500.</h3>
						<p>Miejski samochód osobowy produkowany przez japońską firmę Mitsubishi w latach 1960-1962. Dostępny jako 2-drzwiowy sedan. Do napędu używano silników R2. Moc przenoszona była na oś tylną poprzez 3-biegową manualną skrzynię biegów. Samochód został zastąpiony przez model Colt 600.</p>
						
					</li>
					<li>
						<h3><em><img src="images/11.png" alt="" width="130" height="130" class="alignleft border" /></em>#11 Mitsubishi Space Runner (RVR)</h3>
						<p>Samochód osobowy typu minivan produkowany w postaci dwóch generacji przez japońską firmę Mitsubishi w latach dziewięćdziesiątych. Do napędu używano benzynowych lub wysokoprężnych silników R4. Moc przenoszona jest na oś przednią (opcjonalnie AWD) poprzez 5- lub 6-biegową skrzynię biegów.</p>
						
					</li>
					<li>
						<h3><em><img src="images/12.jpg" alt="" width="130" height="130" class="alignleft border" /></em>#12 Mitsubishi eK</h3>
						<p>Premiera eK odbyła się 11 października 2001. Samochód oparty jest na ostatniej generacji Mitsubishi Minica i oferowany w 4 wersjach stylistycznych: eK Wagon, eK Sport, eK Classy, eK Active.</p>
                    <li>
                        <a href="popularne3"  class="button-style">Poprzednia strona</a> <a href="popularne" id='buttonr' class="button-style">Przejdź na początek</a>
                    </li>
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