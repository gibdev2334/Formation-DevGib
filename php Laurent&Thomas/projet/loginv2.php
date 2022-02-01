<?php
require('alform/Securite.php');
require('alform/GestionBDD.php');
require ('util.php');
require ('config.php');

session_start();
$gestionBDD = new GestionBDD();

$securite = new Securite();

//$securite->login($connexionBDD, $_POST['login'], $_POST['password']);

//$request = new Request($_POST);


$result = '';

if(!empty($_SESSION['user'])) {

    redirection(url: 'index.php');

    if (!empty($_POST['login']) && !empty($_POST['password'])) {

        $connexionBDD = $gestionBDD->connexion();
        $result = $securite->loginv2($connexionBDD, $_POST['login'], $_POST['password']);

    }

}


body("template/securite.php", $result);

