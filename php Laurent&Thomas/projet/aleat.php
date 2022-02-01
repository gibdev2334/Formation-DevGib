<?php
require ('aleat/Aleat.php');
require ('util.php');

session_start();
$result = '';
if(!empty($_POST['min']) && !empty($_POST['max']) &&!empty($_POST['nombreValeurs'])) {
    $aleat = new Aleat(
        $_POST['min'],
        $_POST['max'],
        $_POST['nombreValeurs']);

    $result = $aleat->result();
}

body('template/aleat.php', $result);


//var_dump($result); est viré quand on met le body ( 'chemin template aleat', $result);

// ca ne marche pas tableau orange car on n'a pas fait if(!empty ) pour vérifier s'il existe à mettre entre $result et var_dump.



// rajouter require util en haut à coté de require exos aleat.




// Du coup ma page web avec le formulaire (nb valeurs, minimum et maximum) doit s'afficher. Ensuite il faut inspecter pour voir que le problème vient du ul.

//Donc il faudra regarder le for qui vient juste après le return ul dans public function result(). 

// Donc il faut faire isset  pour $post nombreValeurs à la place d'empty.

// On aura if(!empty($_POST['min']) && !empty($_POST['max']) &&isset($_POST['nombreValeurs']));