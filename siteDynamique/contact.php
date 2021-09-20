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
            require('headerConnecte.php');
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
        </a>  / Contact
    </p>

    <h2 class="h2Centre">Besoin d'un devis personnalisé ? Une suggestion ? Contactez-nous !</h2>

    <section id="blocContact">
        <form id="formContact" method="post" action="">
            <p class="pContact">
                <label>Nom</label>        
                <input class="formInput" type="text" name="nom" required maxlength="32">
            </p>  
            <p class="pContact">
                <label>Email</label>
                <input class="formInput" type="email" name="mail" required maxlength="32">
            </p>  
            <p class="pContact">
                <label>Sujet</label>
                <input class="formInput" type="text" name="sujet" required maxlength="32">
            </p>  
            <p class="pContact">
                <label>Message</label>
                <textarea id="formTextArea" type="textarea" name="message" required>
                </textarea>
                <input id ="formBouton" type="submit" value="ENVOYER">
            </p>
        </form>     
    </section>

    <?php include('footer.php') ?>    
</body>
</html>
