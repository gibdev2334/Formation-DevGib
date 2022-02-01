<?php
require ('alform/Alform.php');
require ('alform/GestionAdministration.php');
require ('alform/GestionBDD.php');
require ('util.php');
//require('login/Securite.php');
require('alform/GestionUtilisateur.php');
require ('config.php');

session_start();
$result = '';

$gestionBDD = new GestionBDD();
$connexion =$gestionBDD->connexion();
$gestionUtilisateur = new GestionUtilisateur($connexion);


//$securite = new Securite($gestionBDD);
//$connexion = $securite->connexion($_POST['login'],$_POST['password']);
//$gestionUtilisateur = new GestionUtilisateur($connexion);

// Verification que l'utilisateur à bien envoyer le formulaire complet

if(!empty($_POST['nom'])&& !empty($_POST['prenom'])&& !empty($_POST['login'])&& !empty($_POST['password'])
) {
      $result =$gestionUtilisateur->inscription($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['password']);
      
      $gestionAdministration = new GestionAdministration($connexion);
      if(!empty($_POST['login'])&&!empty($_POST['password'])){
          
          $gestionAdministration->administration($_POST['login'],$_POST['password']);
      }
    
    //die ("Vous devez remplir tous les champs du formulaire");
}
//$gestionUtilisateur->inscription($_POST['nom'], $_POST['prenom'], $_POST['login'], $_POST['password']);

$result.=$gestionUtilisateur->find();

 

body('template/alform.php', $result);