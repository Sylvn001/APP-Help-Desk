<?php
    session_start(); 
    if(!isset($_SESSION['Auth']) || $_SESSION['Auth'] != 'auth' )
    {
      header('Location: index.php?login=erro_auth');
    }
?>