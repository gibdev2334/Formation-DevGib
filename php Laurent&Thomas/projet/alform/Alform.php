<?php

class Alform
{

    private $nom;
    private $prenom;
    private $login;
    private $password;

    public function __construct($nom, $prenom, $login,$password)

    {
        //TODO dans la prochaine version, il faudra virer le HTML de ce code
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->password = $password;

    }


}