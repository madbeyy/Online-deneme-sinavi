<?php

ob_start();
session_start();

if(!isset($_SESSION["oturum"])){
    header("Location:login.php");
}

?>