$verifConnexion = document.getElementById('formConnexion');
$verifConnexion.addEventListener("submit", function(evenement)  {
    const canSubmit = verifConnexionInputs();
    if(!canSubmit){
        evenement.preventDefault();
        return;
    }
});
