<?php

class GestionAdministration

{

    private $connexion;


    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function connexion($login, $password)
    {

        try {

            $query = "select * from user where login = :login and password= :password ";
            $prepare = $this->connexion->prepare($query);
            //$prepare-> bindParam('nom',$nom,PDO::PARAM_STR);
            //$prepare-> bindParam('prenom',$prenom,PDO::PARAM_STR);
            $prepare->bindParam(':login', $login, PDO::PARAM_STR);
            $prepare->bindParam(':password', $password, PDO::PARAM_STR);
            $prepare->execute(); // puis on execute sa requête
            return ('Enregistrement ok ');
        } catch (PDOException $e) {
            var_dump($e);
            if ('dev' === APP_ENV) {

                die();
            } else {

                die("La lecture de la base de donnée ne marche pas<br>Veuillez contacter votre administrateur");
            }
        }

        $html = '';

        while ($result = $prepare->fetch()) { // tant qu'il y a un enregistrement alors on boucle
            $html .= "id: {$result['id']}, login: {$result['login']}, password: {$result['password']}, prenom: {$result['prenom']}, nom: {$result['nom']}<br>";
        }

        return $html;

        // j'ai besoin de chercher dans ma base de donnee un utilisateur
    }

    public function deconnexion()
    {

    }
}
    // connexion
    // déconnexion
