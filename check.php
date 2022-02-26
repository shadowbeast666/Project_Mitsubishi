<?php
include_once('config.php');
session_start();
$_SESSION['blad'];
if(isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
      if(!$mysqli->connect_error){
        $login = $mysqli->real_escape_string(htmlentities($_POST['login']));
        $haslo = $mysqli->real_escape_string(htmlentities ($_POST['haslo']));
        $haslo2 = md5($haslo);
        $sql = "SELECT `login`,`haslo` FROM `rejestracja` WHERE `login`='$login' AND `haslo`='$haslo2'";
        $sql2 = "SELECT `login`,`haslo` FROM `administratorzy` WHERE `login`='$login' AND `haslo`='$haslo'";
        $rezultat1 = $mysqli->query($sql2);
        if($rezultat1->num_rows > 0){
            $_SESSION['login'] = $login;
            $_SESSION['witaj'] = "";
            $_SESSION['admin'] = "";
            unset($_SESSION['blad']);
            header('location: welcome');
            mysql_close($mysqli);
        
        }else{
        if($rezultat = $mysqli->query($sql)){
          if($rezultat->num_rows > 0){
            $_SESSION['login'] = $login;
            $_SESSION['witaj'] = "";
            unset($_SESSION['blad']);
            unset($_SESSION['admin']);
            header('location: welcome');
            mysql_close($mysqli);
          }else{
            $_SESSION['blad'] = "Błędne dane logowania";
            header('location: login?nousermatch');
            mysql_close($mysqli);
          }
        }
    }
      }else{
        $_SESSION['blad'] = "Błędne połączenie z bazą danych";
        header('location: login?databaseerror');
        mysql_close($mysqli);
      }
  }else{
    $_SESSION['blad'] = "Żadne z pól nie może być puste";
    header('location: login?emptyfields');
  }
 ?>


?>