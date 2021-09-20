<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <script src="script.js" async></script>
    <title>Ative Bretagne Informatique</title>
</head>
<body>
    <?php 
        if (isset ($_SESSION['matricule'])) {
            include('headerConnecte.php');
        } else {
            require('header.php');
        }
    ?>

    <?php require('menuSecondaire.php') ?>

    <p class="miette">
        <a href="<?php 
                    if (isset ($_SESSION['matricule'])) {
                        echo "indexConnecte.php";
                    } else {
                        echo "index.php";
                    }
                ?>"><img src="img/home.png" id="logoMiette">
        </a>  / Actualités
    </p>

    <h2 class="h2Centre" >L’actualité d’Active Bretagne Informatique</h2> 

    <div class="blocImgActualites">
        <div class="blocArticleActualites">
            <img src="img/imgActualites1.png" alt="">
            <h3>Nos solutions pour votre PME PMI</h3>
            <p class="paragrapheActualites"> HO,HO,HO !!! Le tirage au sort du grand jeu de Noël ...</p>
            <button class="enSavoirPlus">En savoir +</button>
        </div>
        <div class="blocArticleActualites">
            <img src="img/imgActualites2.png" alt="">
            <h3>Nos partenaires</h3>
            <p class="paragrapheActualites"> HO,HO,HO !!! Le tirage au sort du grand jeu de Noël ...</p>
            <button class="enSavoirPlus">En savoir +</button>
        </div>
        <div class="blocArticleActualites">
            <img src="img/imgActualites3.png" alt="">
            <h3>Jeu de Noël “ESN 2020”</h3>
            <p class="paragrapheActualites"> HO,HO,HO !!! Le tirage au sort du grand jeu de Noël ...</p>
            <button class="enSavoirPlus">En savoir +</button>
        </div>
    </div>
    <div class="blocImgActualites">
        <div class="blocArticleActualites">
            <img src="img/imgActualites1.png" alt="">
            <h3>Nos solutions pour votre PME PMI</h3>
            <p class="paragrapheActualites"> HO,HO,HO !!! Le tirage au sort du grand jeu de Noël ...</p>
            <button class="enSavoirPlus">En savoir +</button>
        </div>
        <div class="blocArticleActualites">
            <img src="img/imgActualites2.png" alt="">
            <h3>Nos partenaires</h3>
            <p class="paragrapheActualites"> HO,HO,HO !!! Le tirage au sort du grand jeu de Noël ...</p>
            <button class="enSavoirPlus">En savoir +</button>
        </div>
        <div class="blocArticleActualites">
            <img src="img/imgActualites3.png" alt="">
            <h3>Jeu de Noël “ESN 2020”</h3>
            <p class="paragrapheActualites"> HO,HO,HO !!! Le tirage au sort du grand jeu de Noël ...</p>
            <button class="enSavoirPlus">En savoir +</button>
        </div>
    </div>
    <button id="loadMore" name="button">LOAD MORE
        <p id="textLoadMore"> HOLD SHIFT KEY TO LOAD ALL</p>
    </button>

    <?php require('footer.php') ?>
</body>
</html>


