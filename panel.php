<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: index");
}
include_once("config.php");
mysqli_set_charset($mysqli, "utf8");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php 
                    if(!isset($_SESSION['admin'])){
                        echo "Dane użytkownika";
                    }else{
                        echo "Panel administracyjny";
                    }
                    
    
            ?></title>
<meta charset="utf-8">
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
					<li class="active"><a href="index" accesskey="1">Panel</a></li>
					<li><a href="galeria" accesskey="2">Galeria</a></li>
                    <li><a href="about" accesskey="3">O stronie</a></li>
                    <li><a href="map" accesskey="4">Mapa</a></li>
                    <?php if(isset($_SESSION['login'])){
                    echo "<li><a href='logout' accesskey='5' >Wyloguj się</a></li>";
                    }
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
				<h2 class="title"><a href="login"><center>
                    <?php 
                    if(!isset($_SESSION['admin'])){
                        echo "Dane użytkownika";
                    }else{
                        echo "Panel administracyjny";
                    }
                    
    
            ?>
            </center></a></h2>
			</div>
			<div>
				<ul class="style1">
					<li class="first">
						<?php
                            if(!isset($_SESSION['admin'])){
                            $login= $_SESSION['login'];
                            $zapytanie = "SELECT `imie`,`nazwisko`,`login`,`haslo`,`email`,`data_ur` FROM `rejestracja` WHERE `login`='$login'";
                            if($rezultat = mysqli_query($mysqli, $zapytanie)){
                            while($wiersz = mysqli_fetch_row($rezultat)){
                                
                            echo "<fieldset>";
                            echo "<a href='zmienimie'><h1>Imie</a> : ".$wiersz[0]."</h1>";
                            echo "<br>";
                            echo "<a href='zmiennazwisko'><h1>Nazwisko</a> : ".$wiersz[1]."</h1>";
                            echo "<br>";
                            echo "<a href='zmienlogin'><h1>Login</a> : ".$wiersz[2]."</h1>";
                            echo "<br>";
                            echo "<a href='zmienhaslo'><h1>Hasło</a> : ********</h1>";
                            echo "<br>";
                            echo "<a href='zmienemail'><h1>E-mail</a> : ".$wiersz[4]."</h1>";
                            echo "<br>";
                            echo "<a href='zmiendata'><h1>Data urodzenia</a> : ".$wiersz[5]."</h1>";
                            echo "<br>";
                            echo "</fieldset>";
                            echo "<h4>Aby zmieńić swoje dane kliknji na nie</h4>";
                            } 
                        
                            }else{
                                echo "Błedne zapytanie<br>";
                                mysql_close($mysqli);
                               
                            } 
                            }else{
                            $zapytanie2 = "SELECT `Id`,`Imie`, `Nazwisko`, `Login`, `Haslo`, `Email`, `Data_ur`, `Adres` FROM `rejestracja`";
                            if($rezultat = mysqli_query($mysqli, $zapytanie2)){
                            while($wiersz = mysqli_fetch_assoc($rezultat)){
                            echo <<<WIERSZ
                            <p>Użytkownik : $wiersz[Login]</p>
                            <fieldset>
                            <h1>Imie : $wiersz[Imie]</h1>
                            <h1>Nazwisko : $wiersz[Nazwisko]</h1>
                            <h1>E-mail : $wiersz[Email]</h1>
                            <h1>Data urodzenia : $wiersz[Data_ur]</h1>
                            <a href='usun.php?id=$wiersz[Id]'>Usuń użytkownika</a>
                            </fieldset><br><br>
WIERSZ;
                                }
                            }
                        }
                        ?>
                            
                       
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