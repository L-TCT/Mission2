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
                <form method="post" action="mainIntranet.php" id="formConnexion">
                    <div class="formModal">
                        <div class="mailModal">
                            <label for="Identifiant/e-mail">Identifiant/e-mail<br></label>
                            <input class="inputModal" type="text" name="mailConnexion" id="mailConnexion">
                        </div>
                    </div>
                    <div class="formModal">
                        <div class="motDePasseModal">
                            <label for="Identifiant/e-mail" >Mot de passe<br></label>
                            <input class="inputModal" type="password" name="mot de passe" id="motDePasse">
                        </div>
                    </div>
                    <input type="submit" class="boutonModal connexionTxtModal" value="Connexion">
                </form>           
            </div>
        </div>
    </header>
    <div id="blocPage">
