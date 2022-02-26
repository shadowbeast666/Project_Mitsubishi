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
						<p>W latach 50 i 60. XX wieku firma Mitsubishi wykorzystując ekonomiczny boom na japońskim rynku przeżywała rozkwit motoryzacyjny. Do ponownego zajęcia się samochodami osobowymi japoński koncern Mitsubishi skłonił się pod wpływem amerykańskiego pojazdu Henry J., który był montowany w jednym z przedsiębiorstw podzielonego koncernu Mitsubishi i spotkał się z bardzo dużym zainteresowaniem. Jednocześnie Mitsubishi nawiązało w 1951 roku współpracę z Willysem na produkcję Jeepów, stając się dwa lata później jedynym licencjonowanym producentem tego auta terenowego. W 1960 roku wprowadzono na rynek model 500[1]. Samochód ten był pojazdem małym, starannie zaprojektowanym oraz dobrze spisującym się zarówno w mieście, jak i na torze wyścigowym. Auto wyposażone było w półlitrowy silnik benzynowy o mocy 20 KM.</p>
					</li>
					<li>
						<p>W 1970 roku dział Motor Vehicle Division firmy Mitsubishi Heavy Industries, Ltd. rozpoczął osobną działalność pod szyldem Mitsubishi Motors Corporation (MMC). Spółka ta zajmuje się produkcją samochodów oraz części zamiennych. Tym samym rozpoczęła się ekspansja firmy. W 1973 roku na rynku pojawił się ambitny projekt o nazwie Lancer. Był to pierwszy model Mitsubishi sprzedawany w Europie (od 1975 roku), który zbudował reputację firmy Mitsubishi Motors w świecie sportów motorowych[1]. Kryzys naftowy na rynku amerykańskim spowodował wzrost zainteresowania małymi i oszczędnymi samochodami osobowymi, dlatego Mitsubishi pojawiło się ze swoimi samochodami w Stanach Zjednoczonych początkowo pod marką Dodge, a od 1981 roku z własnym przedstawicielstwem.</p>
					</li>
					<li>
                        <a href="historia2" class="button-style">Poprzednia strona</a> <a id='buttonr' href="historia4" class="button-style">Następna strona</a>
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