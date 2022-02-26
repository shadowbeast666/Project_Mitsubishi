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
                                echo "<li><a href='panel' accesskey='5'>Panel</a></li>";
                                //WIERSZ;
                                }else
                                echo "<li><a href='login' accesskey='5'>Zaloguj się</a></li>";
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
						<h2 style="color: red"><center>GDI</center></h2><br><br>
						<p>Koncern Mitsubishi jako pierwszy w 1995 roku wprowadził do seryjnej produkcji silnik z bezpośrednim wtryskiem paliwa do komory spalania. Określenie literowe silnika pochodzi ze skrótu angielskiej nazwy Gasoline Direct Injection, którą można przetłumaczyć jako bezpośredni wtrysk benzyny. Twórcy silnika GDI z dumą podkreślają, że łączy on w sobie właściwości dwóch jednostek; dużą moc benzynowej, z małym zużyciem paliwa i wysokim momentem obrotowym charakterystycznym dla silników wysokoprężnych. Obliczyli, że w stosunku do konwencjonalnego silnika benzynowego, GDI zużywa o 20% mniej paliwa, o tyleż samo procent emituje mniej dwutlenku węgla i ma o 10% większą moc.</p>
						
					</li>
					<li>
						<p>Dwa różne tryby pracy, zależnie od obciążenia silnika powodują, że podczas jednostajnej, spokojnej jazdy spalamy ubogą mieszankę, oszczędzając paliwo, natomiast przy dynamicznej jeździe, np. z prędkością powyżej 120 km/h dysponujemy większą mocą silnika, ale spalamy więcej paliwa. Dlatego właśnie różne są opinie o ekonomii tego silnika, odnoszone do modelu Carisma GDI. Niewątpliwą zaletą silnika GDI jest to, że mieszanka benzyny i powietrza powstaje bezpośrednio w cylindrze. Można więc precyzyjnie sterować ilością wtryskiwanego paliwa, jak i momentem zapłonu.</p>
						
					</li>
					<li>
						<p>W silniku GDI zastosowano wiele interesujących rozwiązań technicznych, np. dwie pompy paliwa - wysokociśnieniową (5 MPa) i drugą niskociśnieniową do dostarczania paliwa tej wysokociśnieniowej, a także świece zapłonowe z platynowymi elektrodami, które wymienia się dopiero po przejechaniu 90000 km. Ponad 200 nowych rozwiązań zastosowanych w silniku chronią patenty, najważniejsze z nich dotyczą: pionowego kanału dolotowego powietrza, wysokociśnieniowej pompy paliwa, wysokociśnieniowego wtryskiwacza i kształtu denka tłoka.</p>
                    <li>
                        <a href="silniki"  class="button-style">Poprzednia strona</a> <a href="silniki3" id='buttonr' class="button-style">Następna strona</a>
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