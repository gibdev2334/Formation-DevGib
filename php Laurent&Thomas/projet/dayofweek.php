<?php
require('dayofweek/Dayofweek.php');
require('util.php');

session_start();
$result = '';

//if  (isset($_POST['date'])) {} est la condition

if (isset($_POST['date'])) {
    
    
    //$dowk est l'objet et new Dayofweek($_POST["date"]) est l'instance
    
    
    $dowk = new Dayofweek($_POST["date"]);
    
    //Pour instancier il faut prendre la classe avec la première lettre en majuscule Dayofweek dans notre cas.
    


    $result .= $dowk->methodecalculdayofweek();
    
    // Pour obtenir le résultat il faut faire le $result .= l'objet $dowk qui fait un this sur la méthode créée dans notre classe qui sera ici methodcalculdayofweek()
    // Pas besoin de faire .= pour le jour selon Laurent et Nicolas car on n'a pas une concaténation ici mais on veut obtenir le jour
    // On aura donc $result = $dowk->methodecalculdayofweek();

}

//Pour que ca marche il faut tout mettre entre les { }

body("template/dayofweek.php", $result);