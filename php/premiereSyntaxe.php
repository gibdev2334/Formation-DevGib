<?php
//ceci est un commentaire
$message = "coucou"; //ceci est une variable
//les variables en PHP sont déclarées à l'aide du symbole $ précédant leur nom
// le ; est ici obligatoire

//étant donne qu'un fichier php interprété renvoie toujours du texte, pour afficher quelque chose à l'écran, il faut pouvoir dicter à PHP de renvoyer du texte à l'exécution
//pour ca, on peut utiliser la fonction echo
echo $message;
//Les conditions suivent les memes principes et (presque) syntaxes qu'en javascript
$age = 11;
if ($age < 18){
    //cette condition sera toujours vraie, c'est pour l'exemple
    echo "<p>Accès interdit</p>";
    //Etant donné qu'on renvoie du texte, on peut très bien écrire des balises






    //LES TABLEAUX
    //étant donné que PHP est un langage de programmation, il y a forcément un moyen de gérer des tableaux
    //un tableau s'écrit potentiellement de deux facons:

    //la manière "historique"
    $nombres = array(1,2,3,4);

    $voitures[0] = "lancia";

    echo $voitures[0];
}


