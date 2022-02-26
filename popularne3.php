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
						<h3><em><img src="images/7.jpg" alt="" width="130" height="130" class="alignleft border" /></em>#7 Mitshubishi Lancer.</h3>
						<p>Mitsubishi Eclipse – sportowe czteromiejscowe coupé produkowane od 1989 na rynki państw, w których obowiązuje ruch lewostronny (również Stany Zjednoczone, Kanadę, i Tajwan). Nazwa Eclipse pochodzi od żyjącego w XVIII na terenie Anglii konia wyścigowego, który zwyciężył w 26 wyścigach.</p>
						
					</li>
					<li>
						<h3><em><img src="images/8.png" alt="" width="130" height="130" class="alignleft border" /></em>#8 Mitsubishi Endeavor</h3>
						<p>Mitsubishi Endeavor – średniej klasy SUV produkowany przez japońską firmę Mitsubishi od roku 2004. Do napędu użyto silnika V6 o pojemności 3,8 litra. Moc przenoszona jest na oś przednią lub obie osie poprzez 4-biegową półautomatyczną skrzynię biegów.</p>
						
					</li>
					<li>
						<h3><em><img src="images/9.jpg" alt="" width="130" height="130" class="alignleft border" /></em>#9 Mitsubishi Magna</h3>
						<p>Samochód osobowy budowany w zakładach Mitsubishi Motors Corporation w Australii. Powstał w 1984 jako poszerzona wersja Mitsubishi Galant "Sigma" z silnikiem Mitsubishi Astron o pojemności 2,6 l. Był to pierwszy samochód produkowany przez Mitsubishi Australia należący do klasy nazywanej w Australii "large car".</p>
                    <li>
                        <a href="popularne2"  class="button-style">Poprzednia strona</a> <a href="popularne4" id='buttonr' class="button-style">Następna strona</a>
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