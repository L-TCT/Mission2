//script permettant de faire fonctionner le modal

function showModal() {
    const $modal = document.querySelector(".hiddenModal");
    $modal.classList.replace("hiddenModal","modalComponent"); 
    }

function hideModal() {
    const $modal = document.querySelector(".modalComponent");
    $modal.classList.replace("modalComponent","hiddenModal"); 
    }
   
// vérification pour se connecter    
$verifConnexion = document.getElementById('formConnexion');
$verifConnexion.addEventListener("submit", function(evenement)  {
    $mail = document.getElementById('mailConnexion');
    $mdp = document.getElementById('motDePasse');
    if($mail.value == "") {
        evenement.preventDefault();
        alert("Tapez un email valide pour vous connecter");
        document.$mail.focus(); 
    }
    else if ($mdp.value == "") {
        evenement.preventDefault();
        alert("Tapez un mot de passe valide pour vous connecter");
        document.$mdp.focus(); 
    }
});



