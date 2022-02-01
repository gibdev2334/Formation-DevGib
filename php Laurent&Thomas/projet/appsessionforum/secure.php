<?php 
session_start();


// on vérifie si l'utilisateur est identifié 
if (!isset($_SESSION['nom'])) {
    
    // La variable de session n'existe pas, 
    // donc l'utilisateur n'est pas authentifié.
    // On redirige sur la page d'authentification
    
    header('Location: auth.php');
    // on arrete l'execution
    
    exit();
}
