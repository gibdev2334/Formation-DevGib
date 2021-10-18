# Introduction aux algorithmes 

Un al





## 1. Les Variables 

Une _variable_ est un registre permettant de stocker une valeur et d'y faire référence.

Par exemple, si je définis une variable 

...
temps_cuisson = 10 
...

Alors toute référence susbéquente à `temps_cuisson` renverra la valeur `10`.
Le cazractère `=` est ici le symbole de l'_affectation_ et non de l'égalité. 
Il permet d'affecter une _valeur_ à un _nom_.

Il est également possible de redéfinir une variable plus tard en réutilisant l'affectation:  

...
temps_cuisson 





## 2. Les Fonctions 

Une _fonction_ est un ensemble d'instructions visant à effectuer une action précise.
C'est un sous programme réutilisable.
Ce bloc



Exemple: 

...
foction Multiplier :
    pour deux nombres a et b, 
    renvoyer a * b  
...

Et pour l'appeler je pourrais faire: 

...
Multiplier 2 et 3 
...

ce qui renverrait `6`

## 3 - Les structures conditionnelles

Une _structure conditionnelle_ permet d'effectuer un branchement (imposer un choix) entre plusieurs jeux d'instructions, selon une condition à évaluer (vrai/faux).

Ces structures sont souvent définies à l'aide des termes Si (If) et Sinon (Else) :

...
    Si age_utilisateur>=18 alors 
        vendre alcool 
    Sinon 
       renvoyer chez mémé


Une condition s'évalue à _vrai_ ou _faux_. Une valeur qui peut etre soit _vraie_ soit _fausse_ est appelée boolléenne (en référence à l'algèbre de Boole).

Pour pouvoir gérezr des conditions complexes, on peut associer ces conditions entre elles avec des opérateurs logiques tirés de cette algèbre booléenne :
Pour l'opérateur _et_ 

- `vrai` _et_`vrai` == `vrai`
-`vrai` _et_ `faux` == `faux`
-`faux` _et_ `vrai` == `faux`
-`faux` _et_ `faux` == `faux`

Pour l'opérateur _ou_ 

- `vrai` _ou _`vrai` == `vrai`
-`vrai` _et_ `faux` == `vrai `
-`faux` _et_ `vrai` == `vrai`
-`faux` _et_ `faux` == `faux`

On peut altérer une condition avec le _non_ 

-    `NON(vrai)` ===