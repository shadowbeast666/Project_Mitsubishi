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
						<h3><em><img src="images/1.jpg" alt="" width="130" height="130" class="alignleft border" /></em>#1 Mitshubishi Outlander.</h3>
						<p>Osobowy samochód sportowo-użytkowy japońskiej marki Mitsubishi Motors produkowany od 2003 roku. Obecnie na rynku dostępna jest trzecia generacja modelu. Outlander to tak naprawdę Mitsubishi Airtrek na eksport. W porównaniu do wersji JDM Outlander otrzymał zmieniony przedni grill i reflektory.</p>
						
					</li>
					<li>
						<h3><em><img src="images/2.jpg" alt="" width="130" height="130" class="alignleft border" /></em>#2 Mitsubishi Lancer Evolution</h3>
						<p>Pierwsza generacja Mitsubishi Lancera pojawiła się na rynku w 1973 roku. Firma, zachęcona sukcesami większego brata Galanta VR-4 na trasach rajdowych, w roku 1990 zdecydowała się na produkcję zupełnie nowego auta. W kwietniu 2014 roku producent ogłosił zakończenie produkcji, które ma przypaść na rok 2015.</p>
						
					</li>
					<li>
						<h3><em><img src="images/3.jpg" alt="" width="130" height="130" class="alignleft border" /></em>#3 Mitsubishi Galant</h3>
						<p>Nazwa pochodzi od francuskiego słowa galant, które znaczy tyle co "rycerski". Do tej pory powstało dziewięć generacji modelu, łącznie sprzedano około pięciu milionów egzemplarzy. Początkowo Galant był dostępny jako kompaktowy sedan, w późniejszym czasie został przekształcony w model klasy średniej.</p>
                    <li>
                        <a href="popularne2" class="button-style">Następna strona</a>
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