function showModal() {
    const $modal = document.querySelector(".hiddenModal");
    $modal.classList.replace("hiddenModal","modalComponent"); 
    }

function hideModal() {
    const $modal = document.querySelector(".modalComponent");
    $modal.classList.replace("modalComponent","hiddenModal"); 
    }
   

function verifConnexionInputs(){
    $mail = document.getElementById('mailConnexion');
    $mdp = document.getElementById('motDePasse');
    if($mail.value == "") {
        alert("Tapez un email valide pour vous connecter");
        document.$mail.focus(); 
        return false;
    }
    else if ($mdp.value == "") {
        alert("Tapez un mot de passe valide pour vous connecter");
        document.$mdp.focus(); 
        return false;
    }
    return true;
}

