    <header>
        <div class="headerGauche">
            <a href="indexConnecte.php"><img src="img/logo.jpg" id="logo" alt="1" height="120px"></a>
            <div id="ACI">
               <p class="active">active<br></p>
               <p class="bretagne">bretagne<br></p>
               <p class="informatique">informatique<br></p>
            </div>
        </div>
        <div id="headerDroit">
            <div class="identification">
                <p>Bienvenue <?php echo $_SESSION['prenom']?><br>
                Vous etes connecté en tant que : <?php echo $_SESSION['qualification']?>
                </p>
            </div>
            <div class="boutons">
                <div class="headerButton">
                    <a href="mainIntranet.php">
                        <p class="HeaderTextButton">Intranet</p>
                    </a>
                </div>
                <div class="headerButton">
                    <a href="deconnexion.php"><p class="HeaderTextButton">Deconnexion</p></a>
                </div>
            </div>
        </div>
    </header>
    <div id="blocPage">
