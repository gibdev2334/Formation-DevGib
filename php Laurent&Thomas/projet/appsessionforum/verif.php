<?php
// Initialisation de la session
session_start();

// Si on a recu les données d'un formulaire :
if (isset($_POST['login']) && isset($_POST['motdepasse'])) {

    // on les récupère
    $nom = $_POST['login'];
    $motdepasse = $_POST['motdepasse'];

    //on teste si le mot de passe est valide :

    if (verification($nom, $motdepasse)) {

        //Le mot de passe est valide, l'utilisateur est identifié
        //on change d'identifiant de session
        session_regenerate_id();

        //on sauvegarde donc son nom dans la session
        $_SESSION['nom'] = $nom;
        $message = 'vous etes correctement identifié';
    } else {
        //sinon on avertit l'utilisateur :

        $message = 'Mauvais mot de passe';
        $message .= '<a href="auth.php">retour</a>';
    }

} else {
    //un des champs n'est pas rempli

    $message = 'le login ou le mot de passe est vide';
    $message .= '<a href="auth.php">retour</a>';

}

?>

<html>
<head><title>Identification</title></head>
<body><p>
    <?php echo $message ?>
</p></body>
</html>
