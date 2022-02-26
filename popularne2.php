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
                <h2 class="title"><a href="index"><strong>Lista Top 12 samochodów Mitshubishi</strong>.</a></h2><br>
				<p><strong style="font-size: 12px;">Poniżej przedstawiamy listę 12 najbardziej popularnych modeli samochodów firmy Mitshubishi.</strong></p>
			</div>
			<div>
				<ul class="style1">
					<li class="first">
						<h3><em><img src="images/4.jpg" alt="" width="130" height="130" class="alignleft border" /></em>#4 Mitshubishi Lancer.</h3>
						<p>Samochód osobowy klasy kompaktowej produkowany przez koncern Mitsubishi Motors pod wieloma nazwami w latach 1973 – 2016. W 2016 roku zakończyła się produkcja ostatniej, dziesiątej generacji modelu.</p>
						
					</li>
					<li>
						<h3><em><img src="images/5.jpg" alt="" width="130" height="130" class="alignleft border" /></em>#5 Mitsubishi Carisma</h3>
						<p>Samochód segmentu D (klasa średnia), produkowany w fabryce NedCar w Sittard-Geleen (Holandia) z przeznaczeniem na rynek europejski przez Mitsubishi Motors w latach 1995-2004. W 1999 roku przeprowadzono gruntowną modernizację, która przez niektóre źródła uważana jest jako nowa generacja.</p>
						
					</li>
					<li>
						<h3><em><img src="images/6.png" alt="" width="130" height="130" class="alignleft border" /></em>#6 Mitsubishi Pajero</h3>
						<p>Samochód typu terenowego produkowany przez Mitsubishi Motors. Pierwsza generacja terenowego Mitsubishi Pajero pojawiła się w 1982 r. Jednak jego korzenie sięgają dużo wcześniej. Pierwowzorami dla Pajero były m.in. studyjne Mitsubishi PX33 (1934), Minica Jeep (1969) czy wreszcie Pajero I (1973).</p>
                    <li>
                        <a href="popularne"  class="button-style">Poprzednia strona</a> <a href="popularne3" id='buttonr' class="button-style">Następna strona</a>
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