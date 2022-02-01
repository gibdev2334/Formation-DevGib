<?php

class Facturel
{
    // on met en private les attributs consumption et power
    private $consumption;
    private $power;
    
    
    //private $tarifdesesmortsHC;
    //private $tarifdesesmortsHP;

    
    
 // Construction  de la méthode 
    
    public function __construct($consumption, $power)
    {
        
        // This permet de définir des propriétés à la méthode créée
        $this->consumption = $consumption;
        $this->power = $power;
        
        
        //$this->tarifdesesmortsHC = $tarifdesesmorts;
       // $this->tarifdesesmortsHP = $tarifdesesmorts;



    }
    
    

    public function calfacture()


    {

        //if (is_numeric($this->consumption) && is_numeric($this->power) && is_numeric($this->tarifdesesmorts) )

            $this->tarifdesesmorts = ["3" => 0.1558, "6" => 0.1558, "9" => 0.1605, "12" => 0.1605, "15" => 0.1605, "18" => 0.1605];

            return $this->tarifdesesmorts[$this->power] * $this->consumption;


            //$this->tarifdesesmortsHC = ["3" => 0.136, "6" => 0.136, "9" => 0.136, "12" => 0.136, "15" => 0.136, "18" => 0.136];

            //return $this->tarifsdesesmortsHC[$this->power] * $this->consumption;


           // $this->tarifdesesmortsHP = ["3" => 0.1821, "6" => 0.1821, "9" => 0.1821, "12" => 0.1821, "15" => 0.1821, "18" => 0.1821];

           // return $this->tarifsdesesmortsHP[$this->power] * $this->consumption;

    }

}
            

        
        
        
        
    

    

