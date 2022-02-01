<?php

class Dayofweek
{
    private $date;

    


     public function __construct($date){
         
         
         $this->date =$date;
         
         
     }

     
     public function methodecalculdayofweek()
     
     {

         $dateArray = explode("-", $this->date);

//on effectue le calcul trouvé sur internet
         $c = intdiv(14 - $dateArray[1], 12);
         $a = $dateArray[0] - $c;
         $m = $dateArray[1] + 12 * $c - 2;
         $j = ($dateArray[2] + $a + intdiv($a, 4) - intdiv($a, 100) + intdiv($a, 400) + intdiv((31 * $m), 12)) % 7;
//on prépare un tableau de jours en "toutes lettres"
         $jours = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
//on fait correspondre le résultat du calcul de 0 à 6 à notre tableau de jours


         
         return $jours[$j];



     }
    
}