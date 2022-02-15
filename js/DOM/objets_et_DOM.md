Objets Javascript et Document Object Model :

Les Objets en Javascript
Pour stocker et manipuler des données complexes en JS, on utilisait déjà des tableaux auparavant.

Rappel - Les Tableaux
Les tableaux nous permettaient de stocker des données de même type de façon séquentielle de la manière suivante :
const mesIngredients = ["huile d'olive", "basilic", "tomates"];
et d'accéder à chaque élément notre tableau à l'aide des indices de chaque élément :
console.log(mesIngredients[0]); //affiche "huile d'olive" dans la console
Si cette structure de donnée permet déjà de nombreuses opérations, et suffit pour bien des cas de figure, il existe une structure plus complexe permettant la manipulation de données possédant de nombreuses propriétés de types différents.
Cette structure est appelée objet

Qu'est ce qu'un objet ?
Un objet, en programmation générale et en javascript, est une donnée complexe permettant la manipulation de clés et valeurs groupées ensemble de façon à leur apporter une structure. Ces objets sont également capables de contenir des fonctions (appelées méthodes dans le cadre de la programmation objet) qui peuvent agir sur les propriétés de l'objet (et/ou sur des données externes).
La Programmation Orientée Objet est un paradigme de programmation qui lui fait tourner la mise en place et l'architecture de notre code au travers de ces structures, et intègre des concepts complexes comme les Classes (le schéma d'un objet), l'Héritage (la composition d'objets dérivés), et autres.
Pour l'instant, on va se contenter de manipuler des objets "ex nihilo".

A quoi ça ressemble ?
En javascript, un objet peut être aussi simple que ça :
const monObjet = {
    propriete: valeur,
};
Ici, on a déclaré un objet, cet objet possédant une propriété nommée propriete dont la valeur est valeur.

A quoi ça sert ?
Typiquement, les objets servent à représenter un élément complexe en lui attribuant de multiples propriétés le caractérisant.
Imaginons qu'on veuille créer un objet user qui contiendrait les informations d'un utilisateur de notre plateforme. On pourrait structurer l'information de la manière suivante :
const newUser = {
    username: "BeersAndLaRedoute",
    email: "eric-the-beerman@gmail.com",
    city: "Brussels",
};
Une fois notre information structurée à l'aide de ces couples clé-valeur, on peut accéder aux valeurs de chaque propriété de la façon suivante : objet.propriété :
console.log(newUser.username); //affiche "BeersAndLaRedoute"
console.log(newUser.email); //affiche "eric-the-beerman@gmail.com"
Cela nous permet donc, dans notre code, de stocker et manipuler des informations de façon plus claire et structurée qu'en utilisant des tableaux et indices de tableaux.

Le DOM, Document Object Model
Le DOM est un ensemble de données représentant le document web et ses éléments. Il est assemblé par le navigateur au moment de l'interprétation du HTML.
Chaque élement étant complexe (possède plusieurs propriétés), un objet javascript est donc utilisé pour représenter chaque élément de notre page.
Un objet HTMLDocument définit par exemple l'entiereté de la page.
Cet objet contient la représentation en javascript de chacune des balises.
Pour représenter l'arborescence de notre Document (DOM Tree), le navigateur stocke les enfants de chaque élément dans celui-ci, permettant d'accéder aux enfants de chaque élément au travers des propriétés de l'objet.
Pour accéder à ce Document on peut scruter la variable globale document, qui est initialisée lors de la création de la page et contient toutes les informations sur la page elle même.
console.log(document); //document est une variable globale qui contient l'entiereté de notre page dans un objet de type HTMLDocument

Stocker un élément du DOM dans une variable
Les éléments du DOM sont donc représentés par des objets qui nous permettent de les manipuler.
Pour ce-faire, il faut les récupérer et les stocker dans une variable.
La méthode document.getElementById() permet donc de récupérer un élément selon son attribut id en HTML.
Pour l'élément input suivant défini en HTML :
<input type="text" id="monElement" />
On pourrait effectuer la récupération suivante :
const monElement = document.getElementById("monElement");

Manipuler les éléments du DOM
Une fois les éléments accessibles au travers de variables, on peut accéder aux propriétés de ceux-ci et changer certaines valeurs.
Par exemple, pour changer le contenu textuel d'un élement, on peut changer la valeur de sa propriété textContent :
const monElement.textContent = "Mon Nouveau Texte"; //le texte affiché dans l'élément ciblé sera désormais "Mon Nouveau Texte"

Réagir à un évènement dans le DOM à l'aide d'un EventListener
Pour pouvoir réagir à un évènement particulier survenant lors de l'exécution d'un document web, on peut utiliser un gestionnaire d'évènement ou eventListener.
Pour pouvoir attacher un eventListener à un élément de notre DOM, on doit donc utiliser element.addEventListener.

Le type d'évènement
Lorsqu'on attache un EventListener à un élément, il faut préciser à quel type d'évènement on souhaite réagir (par exemple, réagir à un clic de souris ou a un appui de touche).
Le premier paramètre de addEventListener est donc le type de l'évènement sous forme de string.
On peut retrouver une liste des évènements disponibles ici.

La réaction
Une fois notre type d'évènement précisé, il faut ensuite expliciter quelles actions vont êtres entreprises à la suite du déclenchement de l'évènement. On le fait donc au travers d'une fonction.
En réutilisant notre element monElement, on pourrait donc faire la chose suivante pour réagir à un appui de touche :
//keyup est le nom de l'évènement permettant de détecter un appui de touche
monElement.addEventListener("keyup", () => {
    //code s'executant en réagissant à l'évènement
});
Pour pouvoir utiliser la cible d'un évènement dans l'eventListener :
monElement.addEventListener("keyup", (event) => {
    const cible = event.target; //event.target désigne toujours la cible de l'évènement capturé
});

C'est quoi cette fonction ? Pourquoi pas utiliser le mot clé function ?
Cette façon d'écrire les fonctions est ce qu'on appelle une fonction anonyme (anonymous function) ou fonction flêchée (arrow function).
C'est un raccourci d'écriture permettant de déclarer l'utilisation d'une fonction sans préciser son nom. Elle est typiquement utilisée dans les cas où la fonction ne sera pas réutilisée, et est donc à usage "unique".
Dans le cas de nos eventListeners, il s'agit de déclarer une réaction à un évènement, et très souvent une réaction identique ne serait pas réutilisée. Nommer notre fonction n'a donc que peu d'intérêt.
Mais on peut également utiliser cette syntaxe "moderne" pour déclarer des fonctions nommées.
Une déclaration de fonction classique :
function addition(a, b) {
    return a + b;
}
deviendrait donc
const addition = (a, b) => {
    return a + b;
};