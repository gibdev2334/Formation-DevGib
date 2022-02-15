//on récupère grâce à leurs id les objets représentant nos éléments d'interface, et on les stocke dans des variables
const taskInput = document.getElementById("taskInput");
const addBtn = document.getElementById("addBtn");
const taskList = document.getElementById("taskList");

//pour pouvoir réagir à un évènement de clic sur notre bouton
//on utilise un gestionnaire d'évènement de clic
addBtn.addEventListener("click", () => {
    //on crée un nouvel élément de liste <li>
    const newTask = document.createElement("li");
    //on définit le contenu textuel de notre nouvel élément <li> comme contenant la valeur de notre champ de texte
    newTask.textContent = taskInput.value;
    //enfin on ajoute ce nouvel élément dans notre liste
    taskList.appendChild(newTask);
});

