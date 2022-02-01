<?php

class Volcone
{

    private $radius;
    private $height;
    private $round;

    public function __construct($radius, $height, $round)

    {

        $this->radius = $radius;
        $this->height = $height;
        $this->round = $round;
    }

    public function volum()
    {

        if (is_numeric($this->radius) && is_numeric($this->height)) {
            //on effectue notre calcul
            $this->volum = (pi() * $this->radius ** 2 * $this->height) / 3;

            if (isset($this->round)) {
                //renvoi du résultat arrondi
                return round($this->volum);
            } else {
                //sinon renvoi du résultat complet
                return $this->volum;

            }
        } else {
            return "Veuillez envoyer des nombres";
     
  // } else {
            //    echo "Erreur de formulaire";
            //} c'est la suite mais je ne sais pas pourquoi ca fait tjrs surligné rouge erreur mais ca marche sans.          
            
            
    }

   
        

    }
                
            
}
            
            
        
        