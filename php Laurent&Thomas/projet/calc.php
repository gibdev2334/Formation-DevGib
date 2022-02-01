<?php
require ('calc/Calc.php');
require ('util.php');

session_start();
$result='';

// Il faut poser la condition if pour y mettre l'objet  $calc obtenu

// Sachant que l'objet s'obtient grace à une instanciation de la classe c à d new Calc()

// Il faudra tout mettre entre les {} après avoir posé la condition

// Il faut toujours voir le résultat ici pour voir l'affichage de la page web et non celle de la classe.

if (isset($_POST['operation']) && isset($_POST["a"]) && isset($_POST["b"])) {

 // Calc correspond à la classe
    $calc = new Calc(
// Bizarre que le Calc et le body aient ce fond orange pour nous dire que ca n'existe pas mais c'est pas grave d'après Laurent vu que ca marche.
        $_POST["a"],
        $_POST["b"],
        $_POST["operation"],
    );
//echo 'bonjour'.'toto'; pour regarder ce qu'affiche ma page web
    $result .= $calc->calcul();
}

body("template/calc.php", $result);



