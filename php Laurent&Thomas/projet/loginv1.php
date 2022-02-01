<?php
require('alform/Securite.php');
require('alform/GestionBDD.php');
require ('util.php');
require ('config.php');
session_start();
$gestionBDD = new GestionBDD();
$connexionBDD = $gestionBDD->connexion();
$securite = new Securite();

//$securite->login($connexionBDD, $_POST['login'], $_POST['password']);


$result = '';

if(!empty($_POST['login']) && !empty($_POST['password'])) {


    $connexionBDD = $gestionBDD->connexion();

    $result = $securite->loginv1($connexionBDD, $_POST['login'], $_POST['password']);
}


body("template/securite.php", $result);

//body('template/securite.php');