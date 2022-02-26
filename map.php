<?php
session_start();
include_once('config.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Project Mitsubishi Map</title>
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
					       <li><a href="index" accesskey="1" >Strona główna</a></li>
					       <li><a href="galeria" accesskey="2" >Galeria</a></li>
                           <li><a href="about" accesskey="3" >O stronie</a></li>
                           <li class="active"><a href="map" accesskey="4" >Mapa</a></li>
                            
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
                <h2 class="title"><a href="index">Mapa strony <strong>Project Mitshubishi</strong>.</a></h2>
			</div>
			<div>
				<ul class="style1">
					<li class="first">
						<p>Odnośniki do górnego menu :</p><br>
                        <p><a href='index'>Strona główna</a></p>
                        <p><a href='galeria'>Galeria</a></p>
                        <p><a href='about'>O stronie</a></p>
                        <p><a href='map'>Mapa</a></p>
                        <p><a href='login'>Zaloguj się</a></p>
                        <?php
                        if(isset($_SESSION['login'])){
                            echo "<p><a href='Panel'>Panel</a></p>";
                        }                            
                        ?>
					</li>
                    <?php
                        if(isset($_SESSION['login'])){
                     echo " 
                    <li>
                        <p>Odnośniki ze strony głównej :</p><br>
                        <p><a href='historia'>Histora firmy</a></p>
                        <p><a href='popularne'>TOP 12</a></p>
                        <p><a href='silniki'>Silniki</a></p>
                    </li>
                    <li>
                     <p>Odnośniki z <a href='mapa'>Panelu użytkownika</a> :</p>
                     <p><a href='zmienimie'>Zmiana imienia</a></p>
                     <p><a href='zmiennazwisko'>Zmiana nazwiska</a></p>
                     <p><a href='zmienlogin'>Zmiana loginu</a></p>
                     <p><a href='zmienemail'>Zmiana e-maila</a></p>
                     <p><a href='zmienhaslo'>Zmiana hasla</a></p>
                     <p><a href='zmiendata'>Zmiana daty urodzenia</a></p>
                    </li>
                    ";
                         }                            
                        ?>
				<li>
                    <p><a href="index" class="button-style">Strona główna</a></p>
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