<?php
//rangement des valeurs du formulaire dans des variables
$min = $_POST['min'];
$max = $_POST['max'];
$n = $_POST['n'];

for ($i = 0; $i < $n ;$i++){
    //afficher un nombre aléatoire entre le minimum et le maximum du formulaire
    echo rand($min, $max);

}

    // Pour afficher les valeurs en ligne on fait comme ci-dessus seulement.



// afficher les valeurs en colonne seulement on fait comme ci-dessous en utilisant soit echo "<ul>" ou </br>

//on vérifie que notre répétition est faisable
if ($n> 0) {
    // on prépare une liste html
    echo "<ul>";
    //on répète autant de fois que nécessaire
    for ($i = 0; $i < $n ; $i++) {
        //la génération des nombres aléatoires
        echo "<li>" . rand($min, $max) . "</li>";
    }
    //on ferme notre liste
    echo "</ul>";

} else {
    //si le nombre de répétitions est inférieur à 0 on affiche un message
    echo "Le nombre de valeurs doit être > à 0";
}

// Pour afficher les valeurs résultat du formulaire en ligne et en colonne on fait les 2 c'est dire tout le code php.
