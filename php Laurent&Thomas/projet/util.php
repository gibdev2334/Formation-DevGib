<?php

function body($nomDuFichier, $resultat = null)

{
    require('./template/body.php');
}

function redirection($url){

    // on met , pour appeler des paramètres ici on va mettre un . pour concaténer le seul paramètre $url
    header("Location: ".$url);
    exit;
}