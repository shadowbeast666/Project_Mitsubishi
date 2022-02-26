<?php
session_start();
include_once('config.php');
if(isset($_SESSION['admin'])){
    $id=$_GET['id'];
$sql="DELETE FROM `rejestracja` WHERE Id = $id";
if (!mysqli_query($mysqli,$sql))
{
    echo "Coś zjebałem";
}
else{
    $_SESSION['usun']='Usunięto użytkownika !';
    header('Location:welcome');
    
}





mysqli_close($mysqli);
}else{
    header('Location: index');
}

?>