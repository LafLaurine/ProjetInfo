<?php
require_once "./controller/login.php";
session_start();

$connexion=new Login();

$connexion->loginRequete();

?>
