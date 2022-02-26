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
					       <li class="active"><a href="historia" accesskey="1">Historia</a></li>
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
						<p>Firma Mitsubishi została założona w 1870 roku przez Yatarō Iwasakiego jako przedsiębiorstwo transportowe, zajmujące się żeglugą morską oraz dysponujące trzema parowcami. Początkowo Yatarō Iwasaki nazwał swą firmę „Tsukumo”, ale flagi na jego statkach przedstawiały znane dziś logo z trzema diamentami. Kompania ta była współwłasnością klanu Tosa rządzącego na wyspie Shikoku. Kiedy klan Tosa został obalony w lipcu 1871 roku, a na należących do niego ziemiach powstała prefektura Kōchi, Yatarō Iwasaki stał się niezależnym przedsiębiorcą.</p>
					</li>
					<li>
						<p>W 1874 roku firma zmieniła nazwę na „Mitsubishi” i przeniosła swoją siedzibę do Tokio. Następnie sam właściciel stworzył znane dzisiaj na całym świecie logo, nakładając na siebie dwa obrazy – swój okrągły herb rodowy oraz trójlistny herb klanu Tosa, czyli swoich pierwszych pracodawców[1]. Główna działalność firmy koncentrowała się na liniach żeglugowych, do których w szybkim czasie dołączyły kopalnie węgla i miedzi, stocznia remontowa oraz usługi pocztowe. Mitsubishi stworzyło w tym czasie pierwsze regularne połączenie żeglugowe z Szanghajem. Stocznia remontowa w Jokohamie była jednocześnie początkiem międzynarodowej działalności Mitsubishi, bowiem powstała w oparciu o rodzaj joint-venture z firmą Shanghai Boyd Company.</p>
					</li>
                    <li>
                        <a href="historia2" class="button-style">Następna strona</a>
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