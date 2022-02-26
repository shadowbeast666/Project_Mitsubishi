<?php
session_start();
if(isset($_SESSION['login'])){
    header("Location: index");
}
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="300">
<title>Logowanie</title>
<meta name="keywords" content="Mitshubishi, Auta, Samochody, Cars, Lancer, Evo, X," />
<meta name="description" content="Strona internetowa na temat firmy Mitshubishi" />
<link rel="icon" type="image/gif" href="./images/head.png">
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
                           <li><a href="map" accesskey="4" >Mapa</a></li>
                    <?php
                     echo "<li class='active'><a href='login' accesskey='5' >Zaloguj się</a></li>"
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
             <fieldset>
			<div id="box1">
				<h2 class="title"><a href="login"><center>Zaloguj się</center></a></h2>
                <br>
                <br>
                <br>
                <br>
            </div>
                
                
			<div>
				<ul class="style1">
                    <div id="komunikat"></div>
                        <form method="post" action="check.php">
                                    
                            <input id="login" placeholder="Login" type="text" name="login"><br><br><br>
                                    
                            <input id="haslo" placeholder="Hasło" type="password" name="haslo"><br><br><br>
                                    
                            <button id="przycisk" name="przycisk">Zaloguj się</button>
                                    
                            <button id="popraw">Popraw dane</button> 
                    </form>
				</ul>
                <?php
                         if(isset($_SESSION['blad'])){
                             echo "<p id='error'>".$_SESSION['blad']."</p>";
                             session_unset($_SESSION['blad']);
                         }else{
                             
                         }
                ?>
			</div>
		<br>
		<br>
		<br>
		<br>
                <center><h2><p> Nie masz konta ? <a href="rejestracja">ZAREJESTUJ SIĘ</a></p></h2></center>
            </fieldset>
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
<script src="./js/czas.js"></script>
<script src="./js/losowanie.js"></script>
<script src="./js/slider.js"></script>
</body>
</html>
