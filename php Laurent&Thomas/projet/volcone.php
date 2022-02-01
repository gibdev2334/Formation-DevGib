<?php
require ('volcone/Volcone.php');
require ('util.php');

session_start();

$result='';

if (isset($_POST['round']) && isset($_POST["radius"]) && isset($_POST["height"])) {

    $calc = new Volcone(
// Bizarre que le Calc et le body aient ce fond orange pour nous dire que ca n'existe pas mais c'est pas grave d'après Laurent vu que ca marche.
        $_POST["radius"],
        $_POST["height"],
        $_POST["round"],
    );

    $result .= $calc->volum();
}

body("template/volcone.php", $result);
