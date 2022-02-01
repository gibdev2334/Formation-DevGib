<?php

class Securite

{
    public function __construct()
    {
        // pas besoin de mettre public function __construct juste pour respecter le processus
        // car on a tout dans public function loginv1 ci-dessous
    }

    //public function loginv1($connexionBDD, $login, $password)

    public function loginv1(PDO $connexionBDD, $login, $password)


    {

        try {

            $query = "select * from user where login = '$login' AND password = '$password'";


            //$prepare = $connexionBDD->prepare($query);
            //var_dump($prepare->execute());
            // $prepare->execute();

            //  $prepare->fetch(PDO::FETCH_ASSOC);
            // on va remplacer $prepare par $PDOStatement car c'est la bonne pratique
            // puis on fait un var_dump de $PDOStatement vers le fetch puis vers le rowCount

            $PDOStatement = $connexionBDD->prepare($query);
            $PDOStatement->execute();


            //var_dump($PDOStatement->rowCount());
            // var_dump($PDOStatement)->fetch(PDO::FETCH_ASSOC);


            if ($PDOStatement->rowCount()) {
                //return "utilisateur existe";

                $_SESSION['user'] = $login;
                redirection(url: 'index.php');


                return "";
            }

            return "<strong>L'utilisateur n'existe pas</strong>";

            // ensuite on a fait $_SESSION et session_start()
            // puis la redirection et le return


        } catch (PDOException $exception) {
            if ('dev' === APP_ENV) {
                //  return $exception->getMessage();
                //die($query);
                return $exception->getMessage() . '<br>' . $query;
            } else {
                die("Il y a un problème de bdd<br> Veuillez contacter votre administrateur");

            }

        }

    }

    public function loginv2(PDO $connexionBDD, string $login, string $password) : string
    {
        try {
            $query = "select login, password from user where login = :login";
            $PDOStatement = $connexionBDD->prepare($query);
            $PDOStatement->execute([
                ':login' => $login
            ]);

            $user = $PDOStatement->fetch(PDO::FETCH_ASSOC);

            if($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['login'];
                redirection('index.php');
            }

            return "<strong>L'utilisateur n'existe pas</strong>";
        } catch (Exception $e) {
            if('dev' === APP_ENV) {
                return $e->getMessage().'<br>'.$query;
            } else {
                die("Il y a un prolbème de bdd<br>Veuillez contacter votre administrateur");

            }
        }
    }

    public function loginv2bis(PDO $connexionBDD, Request $request) : string
    {
        try {
            $login = $request->getPost('login');
            $password = $request->getPost('password');

            if($login && $password) {
                $query = "select login, password from user where login = :login";
                $PDOStatement = $connexionBDD->prepare($query);
                $PDOStatement->execute([
                    ':login' => $login
                ]);

                $user = $PDOStatement->fetch(PDO::FETCH_ASSOC);

                if ($user && password_verify($password , $user['password'])) {
                    $request->setSession('user', $user['login']);
                    redirection('index.php');
                }

                return "<strong>L'utilisateur n'existe pas</strong>";
            }
        } catch (Exception $e) {
            if('dev' === APP_ENV) {
                return $e->getMessage().'<br>'.$query;
            } else {
                die("Il y a un prolbème de bdd<br>Veuillez contacter votre administrateur");

            }
        }

        return "";
    }



    public function logout()
    {
        // session_unset();
        //session_destroy();
        // redirection(url: 'index.php');

    }

}