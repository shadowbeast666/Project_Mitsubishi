<?php
  session_start();
  if(isset($_SESSION['login']) || isset($_SESSION['admin'])){
    session_destroy();
    header('location: index');
  }else{
    header('location: index');
  }
 ?>