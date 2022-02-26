<?php
session_start();
include_once('config.php');
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
					       <li class="active"><a href="index" accesskey="1">Strona główna</a></li>
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
                <h2 class="title"><a href="index">Witaj na stronie poświęconej <strong>Mitshubishi</strong>.</a></h2>
				<p><strong style="font-size: 12px;">Mitsubishi Motors to jedna z najstarszych japońskich firm motoryzacyjnych, która może poszczycić się niemal stuletnią historią. Jej nazwa oznacza „trzy diamenty” i to właśnie one widnieją na znanym każdemu logo marki.</strong></p>
			</div>
			<div>
				<ul class="style1">
					<li class="first">
						<h3><em><img src="images/logo1.png" alt="" width="130" height="130" class="alignleft border" /></em>Historia firmy</h3>
						<p>Firma Mitsubishi została założona w 1870 roku przez Yatarō Iwasakiego jako przedsiębiorstwo transportowe, oraz zajmujące się żeglugą morską.</p>
						<p><a href="historia-check" class="button-style">Zobacz więcej</a></p>
					</li>
					<li>
						<h3><em><img src="images/logo2.jpg" alt="" width="130" height="130" class="alignleft border" /></em>Najbardziej popularne modele</h3>
						<p>Poniżej przedstawiamy listę TOP 12 najbardziej popularnych modeli aut firmy Mitshubishi.</p>
						<p><a href="popularne-check" class="button-style">Zobacz więcej</a></p>
					</li>
					<li>
						<h3><em><img src="images/logo3.jpg" alt="" width="130" height="130" class="alignleft border" /></em>Technologia stosowana w samochodach</h3>
						<p>Koncern Mitsubishi jako pierwszy w 1995 roku wprowadził do seryjnej produkcji silnik z bezpośrednim wtryskiem paliwa do komory spalania.</p>
                        <p><a href="silniki-check" class="button-style">Zobacz więcej</a></p>
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