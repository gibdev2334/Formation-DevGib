<?php

class Calc
{
    private $a;
    private $b;
    private $operation;

// Laurent nous conseille de ne pas utiliser a et b mais plutot premiernombre et deuxième nombre pour qu'en lisant notre code et que leur role soit comprehensible

    public function __construct($a, $b, $operation)
    {
        $this->a = $a;
        $this->b = $b;
        $this->operation = $operation;
    }


    public function calcul()

    {

// Il ne faut pas mettre des $-POST dans une classe sauf pour un cas qu'il nous montrera 
        if (is_numeric($this->a) && is_numeric($this->b)) {

            if ($this->operation == "add") {
                return $this->a + $this->b;
            }
            if ($this->operation == "sub") {
                return $this->a - $this->b;
            }
            if ($this->operation == "mul") {
                return $this->a * $this->b;
            }
            if ($this->operation == "div") {
                //dans le cas d'une division, on s'assure qu'on n'essaye pas de diviser par zéro
                if ($this->b == 0) {
                    return "Division par Zéro Impossible";
                } else {
                    return $this->a / $this->b;
                }
            }
        }
    }
    
}














