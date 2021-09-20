// script permettant d'afficher les fonctionnalités suivant l'utilisateur

let accesActionClient = document.getElementsByClassName("accesActionClient");
let user = qualification;
for (var i = 0; i < accesActionClient.length; i ++) {
  if (user == "commercial" || user == "responsable Commerciale" || user == "administrateur" ){
    accesActionClient[i].style.display= "block";
  } else {
      accesActionClient[i].style.display = 'none';
    }
}
