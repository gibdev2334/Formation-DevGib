<?php
require('exos/Securite.php');
require('exos/GestionBDD.php');
require ('util.php');
require('config.php');
require('exos/Request.php');

session_start();

$gestionBDD = new GestionBDD();
$securite = new Securite();

session_start();

if(!empty($_SESSION['user'])) {
    redirection('index.php');
}

$result = '';

if(!empty($_POST['login']) && !empty($_POST['password'])) {
    $connexionBDD = $gestionBDD->connexion();

    $result = $securite->loginv2($connexionBDD, $_POST['login'], $_POST['password']);
}

body('template/securiteTPL.php', $result);