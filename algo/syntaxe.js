// Ceci est un commentaire 
/*
Ceci est un commentaire multiligne 
Un commentaire n'est pas interprété ( ou meme lu) lors de l'exécution du code 
et sert donc très souvent à documenter notre code 
*/

// VARIABLES 
// En javascript, une variable se déclare à l'aide du mot clé "let"
let nombre = 10. // ici on définit une variable nommée "nombre" contenant la valeur 10

let message = "coucou"; // ici on définit une variable nommée message contenant la chaine de caractère "coucou"

// en javascript, les données sont typées dynamiquement 
// c'est à dire que javascript définit le type de la donnée automatiquement selon la donnée stockée
// dans un langage typé statiquement on devrait déterminer le type de données au moment de la déclaration : int nombre = 10; 

//pour différencier une chaine de caractères d'un nombre, on utilise des "" ou '' ou ''. l'utilisation des backquote ('') est légérement spéciale, on verra plus tard 

// poour utiliser une valeur stockée dans une cvariable on appelle simplement son nom 
let a = 5;
let b = 4;
let c =  a + b; // c contient 9 

// pour définir une constante (une variable non variable)
const neChangeraJamais = 12;
neChangeraJamais =13 

//Les conditions 
//un branchement conditionnel se fait en javascript à l'aide d'un if (la plupart du temps)
//une condition se fait sur l'évaluation d'un booléen (vrai/faux), souvent à l'issue d'une comparaison entre deux valeurs
//pour effectuer des comparaisons, js possède différents opérateurs
/*
== égalité 
!= différence
>  supériorité stricte 
< infériorité stricte 
>= supériorité ou égalité
<= infériorité ou égalité
=== égalité stricte 
!== différence stricte
*/ 

let age = 12; 
//un si (if) s'écrit : if  (condition) [ instruction ]
if (age < 18) [
//ici on indique quoi faire si la condition est validée 
//par ex : indiquer à l'utilisateur qu'il ne peut pas boire de l'alcool
] else [
    //ici on indique quoi faire dans le cas contraire
    if (age >= 21)
    > supériorité stricte




//Pour combiner nos conditions on peut utiliser les opérateurs bboléens qui en javascript s'écrivent de la manière suivante : 
//ET s'écrit && 
(true && true)=== true;
(true && false)=== false;
(false && false)=== false;

//OU s'écrit || 
(true || true)=== true;
(true || False)=== true;
A COMPLETER 


function additionner (a, b) [ 
  //le mot clé return met fin à l'éxécution de la fonction et renvoie une valeur  
  return a + b; 
] 
//zen appelant une fonction, on l'invoque à l'aide de son nom et on indique les valeurs des paramètres que la fonction attend 
let resultat = additionner (1, 3); //doit renvoyer 4 dans résultat 
let autreResultat = additionner(3 ,5); //autreResultat contient 8
let autreResultat = additionner(additionner( 3,2) , additionner(3, 5)); //dernier resultat contient 13
//des fonctions existent déjà dans le langage sans avoir besoin de les déclarer
//celles-ci sont là pour aider le développeur à utiliser les fonctionnalités du langage
//par ex prompt() ou alert()  









// Les Boucles 
// une boucle est une structure de langage permettant une répétition d'instructions selon une condition préétablie

//en javascript la boucle de base est le while (tant que) 
let i = 1; 
//la condition pour que la boucle s'exécute ici est que i soit inférieur ou égal à 100
while (i <= 100)  [                          
    //a chaque tour de boucle on affiche un i dont la valeur a augmenté de 1 
    i = i + 1; 
    afficher(i); 
] 
// si la condition est mal établie, il est possible de s'enfermer dans une boucle infinie

//La boucle for qant à elle permet d'effectuer des opérations répétéess à l'instar du while, mais sa syntaxe permet de définir plus clairement  un départ, un arret, et une opération à effectuer, le tout sur une meme ligne 

for (let i= 1; i<=100; i = i + 1) [
    afficher (i); 
]