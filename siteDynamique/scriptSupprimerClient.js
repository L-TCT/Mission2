function supprimerClient(e){
    let message = confirm('Voulez vous supprimer ce client?');
    if(!message){
        e.preventDefault();
    }
}


let supprimer = document.getElementsByClassName('supprimerClient');
for (let sup of supprimer){
sup.addEventListener("click", supprimerClient);
}
