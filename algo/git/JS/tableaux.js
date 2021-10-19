//Un tableau est une structure de données
//permetttant de stocker un jeu de données du meme type
//En javascript (et en programmation en général) un tableau se déclare à l'aide de crochets []
let tableauVide = []

//un tableau contient des "cases", chaque case contient une donnée
//lorsqu,on déclare un tableau, chaque nouvelle case est séparée par 
//                      0         1           2   
let listeCourses = ["eponges", "pates", "sauce tomate"];
//la numératation des cases commence à 0
//pour accéder à une valeur stockée dans un tableau, on utilisera
valeur
console.log(listeCourses[0])
console.log(listeCourses[2])
console.log(listeCourses[3])

//pour récupérer la taille d'un tableau, on peut utiliser nomDuTableau.length consol.log(listeCourses.length -1]);//affiche "sauce tomate"
//pour parcourir la totalité d'un tableau, une bonne méthode est d'utiliser une boucle
//la boucle for est toute indiquée, on fait partit i à 0 (la première case)











//pour rajouter un élément à la fin d'un tableau on peut utiliser tableau.push(element)
listeCourses.push("poivre"); // ["eponges", "pates","sauce tomate","poivre"]
console.log(listeCourses[3]);// affiche "poivre" dans la console

//pour retirer et récupérer le dernier élément d'un tableau
//on peut utiliser tableau.pop()
console.log(listeCourses.pop());// affiche "poivre" et supprime "poivre" du tableau

//pour ajouter un élément au début du tableau on peut utiliser tableau.unshif(elem)
listeCourses.unshift("whisky");//["whisky","eponges","pates","sauce tomate"]

//pour supprimer le premier élément du tableau on peut utiliser tableau.shift()
console.log(listeCourses.shift());// affiche "whisky" et supprime "whisky" du tableau

//tableau.splice() permet de raccorder, supprimer, remplacer des éléments dans un tableau
//a la case 1, je supprime 1 élément, et j'insére l'élément "pates completes"
listeCourses.splice(1, 1, "pates completes");
//["eponges", "pates completes", "sauce tomate"]
//je rajoute deux éléments a la case 2 sans en supprimer
listeCourses.splice(2, 0, "parmesan", "pesto");
//["eponges", "pates completes", "parmesan", "pesto", "sauce tomate"]
//je supprime un élément a la case 3
listeCourses.splice(3, 1); //on supprime "pesto" du tableau
