<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Mision 2</title>
</head>
<body>
    <header>
        <div class="headerGauche">
            <a href=""><img src="img/logo.jpg" id="logo" alt="1" height="120px"></a>
            <div id="ACI">
                <p class="active">active<br></p>
                <p class="bretagne">bretagne<br></p>
                <p class="informatique">informatique<br></p>
            </div>
        </div>
        <div id="headerDroit">
            <div class="identification">
                <p>Bienvenue <?php 
                                echo $_SESSION['prenom']
                            ?><br> Vous etes connecté en tant que : 
                            <?php 
                                echo $_SESSION['qualification']
                            ?>
                </p>
            </div>
            <div class="boutons">
                <div class="headerButton">
                    <a href="mainIntranet.php">
                        <p class="HeaderTextButton">Intranet</p>
                    </a>
                </div>
                <div class="headerButton">
                    <a href="deconnexion.php">
                        <p class="HeaderTextButton">Deconnexion</p>
                    </a>
                </div>
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
