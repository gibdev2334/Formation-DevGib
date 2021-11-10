<?php
//ici on traite les données de notre formulaire form.html

//pour traiter les valeurs reçues d'un formulaire en méthode POST, il faut pouvoir les récupérer
//Dans un traitement en POST, les valeurs sont stockées dans une variable nommée $_POST
//Et ce sous la forme d'un tableau associatif (clé/valeurs) les clés étant les noms de nos champs input, les valeurs les données des champs
//var_dump($_POST); //var_dump permet d'inspecter l'intérieur d'une variable à des fins de développement

//pour utiliser la valeur d'un champ de formulaire on peut donc accéder via sa clé à la valeur dans le tableau $_POST :
//pour vérifier l'existence des données, il faut qu'on vérifie que le champ existe
//on peut le faire avec une fonction nommée isset()
//si notre valeur de formulaire est renseignée



//une checkbox lorsqu'elle est cochée envoie ses données et est donc présente dans le $_POST, sinon aucune valeur n'est envoyée
//pour voir si une checkbox a été cochée, on vérifie juste sa présence dans $_POST avec isset()

if (!isset($_POST ['agreeTerms'])) {
    echo 'Veuillez accepter les termes du contraty.';
} else {


    if (isset($_POST['nickname']) && isset($_POST['country'])) {
        //on peut y accéder et l'utiliser sans erreurs
        //on récupère notre code pays dans $_POST
        $countryCode = $_POST['country'];
        //on prépare un tableau de correspondance entre les codes de pays et les traductions de nos salutations

        $greetings = ['FR' => 'Bonjour', 'DE' => 'Guten Tag', 'UK' => 'Hello'];


        //on vérifie toujours que les données utilisateurs soient bien correctes; ici il nous faut nous assurer que le code pays recu soit bien un des codes pays que l'on gère dans notre tableau
        //si le code pays recu est bien disponible en tant que clé dans notre tableau de salutations

        if (array_key_exists($countryCode, $greetings)) {
            echo $greetings[$_POST['country']] . '' . $_POST['nickname'] . '!';
        } else {
            //sinon on affiche une erreur
            echo "Erreur code pays";
        }


        if ($_POST['country'] == 'DE') {
            echo 'Guten tag' . $_POST['nickname'];
        }
        if ($_POST['country'] == 'FR') {
            echo 'Bonjour' . $_POST['nickname'];
        }
        if ($_POST['country'] == 'UK') {
            echo 'Hello' . $_POST['nickname'];
        }
    } else {
        //sinon on affiche un message
        echo "Erreur de formulaire";
    }

}
