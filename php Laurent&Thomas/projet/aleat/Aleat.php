<?php

class Aleat
{
    private $min;
    private $max;
    private $nombreValeurs;

    public function __construct($min, $max, $nombreValeurs)
    {
        //TODO dans la prochaine version, il faudra virer le HTML de ce code
        $this->min = $min;
        $this->max = $max;
        $this->nombreValeurs = $nombreValeurs;
    }

    // TODO il faut toujours mettre des commentaires.

    /**
     * Fait un nombre aléatoire entre min et max n fois (nombreValeurs)
     *
     *@return string
     */
    public function result()
    {
        if (0 < $this->nombreValeurs) {

            // on prépare une liste html

            $html= "<ul>";

            //on répète autant de fois que nécessaire
            for ($i = 0; $i< $this->nombreValeurs; $i++) {
                //la génération des nombres aléatoires
                $html .= '<ul>'. '<li>'. rand($this->min, $this->max) .'</li></ul>';

            }

            //on ferme notre liste
            return $html . '</ul>';
            // donc il ne fallait pas mettre le .= car
            
    } else {

            //si le nombre de répétitions est inférieur à 0 on affiche un message

            echo "le nombre de valeurs doit etre > à 0";

        }
    }
}