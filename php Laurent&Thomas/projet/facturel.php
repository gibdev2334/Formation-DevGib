<?php
require ('facturel/Facturel.php');
require ('util.php');

session_start();

$result='';


if (!empty($_POST["consumption"]) && !empty($_POST["power"])) {

    // pour obtenir l'objet il faut prendre instancier la classe
    // en faisant la fonction new avec la classe Facturel


    $facturel = new Facturel($_POST["consumption"],
        $_POST["power"]);


    $result = $facturel->calfacture();

    //SANS .= juste = car pas besoin dans ce cas là
    
    // $result='Votre facture séléve à : '; on aura Votre facture séléve à :

    //$result .= $facturel->calfacture();
    
    //$result .= ' €uros'; on aura 7.011€uros
   // .= càd on va concaténer dans le cas d'une liste et non quand on veut un résultat simple on fait =  seulement
}


body("template/facturel.php", $result);

// Pour les Heures Creuses HC et les Heures Pleines HP
// $_POST["tarifdesesmortsHC"],
//$_POST["tarifdesesmortsHP"],