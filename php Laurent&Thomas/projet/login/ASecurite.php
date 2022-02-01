

<?php
//todo trouver comment faire fonctionner le requuire
//require "../login.php";
class Securite
{
    private $connexionBDD;

    public function __construct($connexionBDD){


        $this->connexionBDD =$connexionBDD;
    }

    public function connexion($login, $password){
        try {
            $valider = $_POST["valider"];
        if (isset($valider)) {


            $query = 'SELECT * FROM utilisateur where login'.$login.'AND password';
            $prepare = $this->connexionBDD->prepare($query);
            $prepare->execute();

            header("location:espacemembre.php");
    }
       else{
            return "Mauvais login ou mot de passe";
       }

        } catch (PDOException $exception) {
            if ('dev' === APP_ENV) {
                var_dump($exception);
                die($query);
            } else {

                 die("L'enregistrement n'a pas pu s'effectuer<br>Veuillez contacter votre administrateur");

            }
        }

        }
        
        

}





