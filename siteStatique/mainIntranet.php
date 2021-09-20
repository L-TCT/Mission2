<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Ative Bretagne Informatique</title>
</head>
<body>
    <?php require('headerConnecte.php')?>

    <p class="miette">
        <a href="indexConnecte.php"><img src="img/home.png" id="logoMiette">
        </a>  / Accueil intranet
    </p>

    <h2 class="h2Centre" >BIENVENUE SUR VOTRE ESPACE PERSONNEL</h2>

    <div id="blocImgIntranet">
        <a href="#">
            <div class="blocNavIntranet">
                <p class='textNav'>RESSOURCES</br>HUMAINES</p>
            </div>
        </a>
        <a href="commercial.php">
            <div class="blocNavIntranet">
                <p class='textNav'>GESTION</br>COMMERCIALE</p>
            </div>
        </a>
        <a href="#">
            <div class="blocNavIntranet">
                <p class='textNav'>GESTION</br>PROJETS</p>
            </div>
        </a>
    </div>

    <hr class="hrIndex"> 

    <h2 class="h2Centre">L’actualité de l’entreprise </h2>

    <div class="blocImgActualitesIntranet">  
        <div class="blocArticleActualitesIntranet">
            <img src="img/imgAccueilIntranet1.png" alt="">
            <h3>Info COVID-19</h3>
            <button class="enSavoirPlus">En savoir +</button>
         </div>
        <div class="blocArticleActualitesIntranet">
            <img src="img/imgAccueilIntranet2.png" alt="">
            <h3>Documentations d’ABI France</h3>
            <button class="enSavoirPlus">En savoir +</button>
        </div>
        <div class="blocArticleActualitesIntranet">
            <img src="img/imgAccueilIntranet3.png" alt="">
            <h3>Vos Avantages C.E</h3>
            <button class="enSavoirPlus">En savoir +</button>
        </div>
    </div>

    <?php require('footer.php') ?>
</body>
</html>
