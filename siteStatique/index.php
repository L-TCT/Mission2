<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <script src="script.js" async></script>
    <title>Active Bretagne Informatique</title>
</head>
<body>
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

    <nav>
        <h1>ESN SPÉCIALISÉ DANS L'AGRO-ALIMENTAIRE</h1>
        <div id="blocNavImg">
            <a href="quiSommesNous.php"><p id="imgQuiSommesNous" class="navTexte">QUI SOMMES NOUS ?</p></a>
            <a href="contact.php"><p id="imgContact" class="navTexte">CONTACT</p></a>
            <a href="actualites.php"><p id="imgActualités" class="navTexte">ACTUALITÉS</p></a>
        </div>
    </nav>

    <div id="blocPage">
        <div class="barreAccueil">ACCUEIL</div>
        <section>
            <h2>Votre entreprise a des besoins numériques? Nous avons les réponses adéquates</h2>
            <p id="resume">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut velit sed sapiente excepturi libero eaque laudantium fuga expedita omnis accusantium quibusdam laborum repudiandae ad tenetur, in magni unde eos. Ut!
            Excepturi ad debitis perspiciatis veniam pariatur ex perferendis praesentium. Aliquid ullam consectetur provident voluptas dolorum similique nam optio alias cum harum. Quisquam harum reiciendis minus aperiam facere alias sed voluptatum.
            Sunt iure tempore aliquid? Vero quia repellat officiis quos sapiente cupiditate harum numquam quis modi ratione.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum vero voluptatem ipsum vitae nihil. Quidem aut eius ex iste quas atque expedita eos commodi soluta, in voluptate velit impedit sapiente!
            </p>
        </section>

        <hr class="hrIndex">

        <section>
            <h2>Où nous trouver ?</h2>
            <div id="situation">
                <div id= "plan">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.433780019263!2d-2.760048183977219!3d47.6565689791878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101e9ca6f83385%3A0x2e02b8d9c4166691!2sA.B.I!5e0!3m2!1sfr!2sfr!4v1610960669428!5m2!1sfr!2sfr" width="800" height="457" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div id="devis">
                    <p><strong>Besoin d'un devis personnalisé?</strong><br><br></p>
                    <p>Contactez nous!<br><br></p>
                    <address>
                        <a href="tel:+330645953215"><img id="call" src="img/Call.svg" alt=""> 06.45.95.32.15</a><br><br>
                        <a href="mailto:ABIfrance@gmail.com"><img id="mail" src="img/mail.svg" alt=""> ABIfrance@gmail.com</a><br>
                    </address>
                </div> 
            </div>        
        </section>
    </div>
    <?php include('footer.php') ?>
</body>
</html>
