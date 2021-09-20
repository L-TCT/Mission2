    <header>
        <div class="headerGauche">
            <a href="index.php"><img src="img/logo.jpg" id="logo" alt="logo"></a>
            <div id="ACI">
                <p class="active">active<br></p>
                <p class="bretagne">bretagne<br></p>
                <p class="informatique">informatique<br></p>
            </div>
        </div>
        <a id="connexion" href="#" onclick="showModal()">
            <img  id="account" src="img/account.png" alt="" height="35px">
            <p class="connexion">CONNEXION</p>
        </a>
        <div class="modalComponent hiddenModal">
            <div class="modalBackDrop" onclick="hideModal()"></div>
            <div class="modal">
                <a href="#" class="fermerModal"  onclick="hideModal()">X</a>
                <form method="post" action="verifConnexion.php" id="formConnexion">
                    <div class="formModal">
                        <div class="mailModal">
                            <label for="Identifiant/e-mail">Identifiant/e-mail<br></label>
                            <input class="inputModal" type="text" name="mailConnexion" id="mailConnexion">
                        </div>
                    </div>
                    <div class="formModal">
                        <div class="motDePasseModal">
                            <label for="Identifiant/e-mail" >Mot de passe<br></label>
                            <input class="inputModal" type="password" name="motDePasse" id="motDePasse">
                        </div>
                    </div>
                    <div id="conteneurConnexionModal">
                        <div id="connexionModalAlert"></div>
                    <input id="btn-login" type="submit" class="boutonModal connexionTxtModal" value="Connexion">
                    </div>
                </form>

                <script>
                    const $btnLogin = document.getElementById("btn-login");
                    const $mailInput = document.getElementById("mailConnexion");
                    const $passwordInput = document.getElementById("motDePasse");

                    $btnLogin.addEventListener('click', function(evt){
                        evt.preventDefault(); //bloque l'évenement prévu
                        const canSubmit = verifConnexionInputs();
                            if(!canSubmit){
                                return;
                            }
                            
                        const url = "verifConnexion.php"; 
                        const matricule = $mailInput.value;
                        const motDePasse = $passwordInput.value;
                        const requestOptions = {
                            method: "POST",
                            body: JSON.stringify({ 
                                matricule: matricule,
                                motDePasse: motDePasse
                            }),
                            headers: new Headers({
                                'Content-Type': 'application/json'
                            })
                        }

                        fetch(url, requestOptions)
                            .then(function(response){
                                return response.json();
                            })
                            .then(function(data){
                                
                                if(data.success){
                                    // Logged in
                                    window.location = "mainIntranet.php";
                                }else{

                                document.getElementById('formConnexion').reset();    

                            let alert = document.getElementById('connexionModalAlert');
                            alert.innerHTML = 'Mauvais identifiant ou mot de passe ! ';
                                    // Errors
                                    // => display errors in modal
                                }
                            });
                    })
                </script>
            </div>
        </div>
    </header>
    <div id="blocPage">
