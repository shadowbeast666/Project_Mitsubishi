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
<title>Historia Mitsubishi</title>
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
					       <li class="active"><a href="index" accesskey="1">Historia</a></li>
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
                <h2 class="title"><a href="index">Historia firmy <strong>Mitshubishi</strong>.</a>
			</div>
			<div>
				<ul class="style1">
						<li class="first">
						<p>Z czasem firma Mitsubishi stała się dochodowym przedsięwzięciem i działała na wielu polach, od międzynarodowego handlu, aż po usługi bankowe, optyczne i projektowanie oraz budowę samolotów i produkcję części zamiennych do samochodów osobowych. W 1917 roku wyprodukowano pierwszy samochód osobowy firmy nazwany Model A, który wzorowany był na Fiacie Zero. Produkcja pojazdu zakończona została po wyprodukowaniu zaledwie 22 egzemplarzy. Rok później rozpoczęto produkcję pierwszego samochodu ciężarowego nazwanego T1, a następnie pierwszego autobusu Fuso B46. W 1919 roku firma wyprodukowała pierwszy samolot nazwany Model-A. W 1921 roku zakończono jego produkcję. W 1931 roku zaprojektowano pierwszy silnik wysokoprężny koncernu o mocy 70 KM (wcześniej produkowano silniki dla samolotów). W 1934 roku Mitsubishi zaprezentowało pierwowzór dzisiejszego modelu Pajero – model PX33 wyposażony w napęd na cztery koła[1] i silnik wysokoprężny. Model nigdy nie trafił do produkcji seryjnej.</p>
					</li>
					<li>
						<p>Okres drugiej wojny światowej to przede wszystkim produkcja samolotów (m.in. A6M Zero). Jednak po wojnie, koncern zostaje podzielony na ponad 100 małych firm (ich ponowna koncentracja ma miejsce dopiero w latach pięćdziesiątych), z których tylko niewielka część ma coś wspólnego z przemysłem motoryzacyjnym. W okresie powojennym Mitsubishi jak gdyby zapomniało o samochodach osobowych, skupiając się na pojazdach użytkowych. Powstają m.in. takie pojazdy jak XTM1 Mizushima, który jest trójkołowym pickupem, skuter C-10 Silver Pigeon, autobus MB46 wyposażony w napęd elektryczny. W latach 50-tych powstają kolejne istotne modele - autobus R1 z silnikiem umieszczonym z tyłu oraz ciężarowe T380 i T390 z odchylanymi do tyłu kabinami.</p>
					</li>
					<li>
                        <a href="historia" class="button-style">Poprzednia strona</a> <a id='buttonr' href="historia3" class="button-style">Następna strona</a>
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