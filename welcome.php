<?php
session_start();
if(isset($_SESSION['witaj']) || isset($_SESSION['zmianaimienia']) || isset($_SESSION['zmiananazwiska']) || isset($_SESSION['zmianalogin']) || isset($_SESSION['zmianaemail']) || isset($_SESSION['zmianadata']) || isset($_SESSION['zmianahasla']) || isset($_SESSION['zarejestrowany']) || isset($_SESSION['usun'])){
}else{
    header("Location: index");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nastąpi przekierowanie</title>
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
					<li><a href="index" accesskey="1">Strona główna</a></li>
					<li><a href="galeria" accesskey="2">Galeria</a></li>
                    <li><a href="about" accesskey="3">O stronie</a></li>
                    <li><a href="map" accesskey="4">Mapa</a></li>
                    <?php if(isset($_SESSION['login'])){
                    echo "<li><a href='panel' accesskey='5' >Panel</a></li>";
                    }else{
                    echo "<li><a href='login' accesskey='5' >Zaloguj się</a></li>";
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
				
			</div>
			<div>
				<ul class="style1">
					<li class="first">
						<?php
                            if(isset($_SESSION['witaj'])){
                                echo '<fieldset><center><a><h1>Witaj<br>'.$_SESSION['login'].' !</center></h1></a></fieldset>';
                                unset($_SESSION['witaj']);
                                header("Refresh:2");
                            }else if(isset($_SESSION['zmianaimienia'])){
                                $kom= $_SESSION['zmianaimienia'];
                                echo  "<fieldset><h2 class='title'><a><center>$kom !</center></a></h2></fieldset>";
                                unset($_SESSION['zmianaimienia']);
                                header("Refresh:2");
                            }else if(isset($_SESSION['zmiananazwiska'])){
                                $kom= $_SESSION['zmiananazwiska'];
                                echo  "<fieldset><h2 class='title'><a><center>$kom !</center></a></h2></fieldset>";
                                unset($_SESSION['zmiananazwiska']);
                                header("Refresh:2");
                            }else if(isset($_SESSION['zmianalogin'])){
                                $kom= $_SESSION['zmianalogin'];
                                echo  "<fieldset><h2 class='title'><a><center>$kom !</center></a></h2></fieldset>";
                                unset($_SESSION['zmianalogin']);
                                header("Refresh:2");
                            }else if(isset($_SESSION['zmianaemail'])){
                                $kom= $_SESSION['zmianaemail'];
                                echo  "<fieldset><h2 class='title'><a><center>$kom !</center></a></h2></fieldset>";
                                unset($_SESSION['zmianaemail']);
                                header("Refresh:2");
                            }else if(isset($_SESSION['zmianadata'])){
                                $kom= $_SESSION['zmianadata'];
                                echo  "<fieldset><h2 class='title'><a><center>$kom !</center></a></h2></fieldset>";
                                unset($_SESSION['zmianadata']);
                                header("Refresh:2");
                            }else if(isset($_SESSION['zmianahasla'])){
                                $kom= $_SESSION['zmianahasla'];
                                echo  "<fieldset><h2 class='title'><a><center>$kom !</center></a></h2></fieldset>";
                                unset($_SESSION['zmianahasla']);
                                header("Refresh:2");
                            }else if(isset($_SESSION['zarejestrowany'])){
                                $kom= $_SESSION['zarejestrowany'];
                                echo  "<fieldset><h2 class='title'><a><center>$kom !</center></a></h2></fieldset>";
                                unset($_SESSION['zarejestrowany']);
                                header("Refresh:2");
                            }else if(isset($_SESSION['usun'])){
                                $kom= $_SESSION['usun'];
                                echo  "<fieldset><h2 class='title'><a><center>$kom </center></a></h2></fieldset>";
                                unset($_SESSION['usun']);
                                header("Refresh: 2 panel");
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
<script src="js/losowanie.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/czas.js"></script>
</body>
</html>
