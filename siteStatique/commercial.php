<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <script src="scriptAccesGestionCommerciale.js" async></script>
    <title>Ative Bretagne Informatique</title>
</head>
<body>
    <?php require('headerConnecte.php') ?>

    <?php require('menuSecondaireIntranet.php') ?>

    <div class="miette">
        <a href="indexConnecte.php"><img src="img/home.png" id="logoMiette"></a>
        <a href="mainIntranet.php">  / Accueil Intranet</a><a href="commercial.php">  / Gestion commerciale </a>
    </div>

    <h2 class="h2Centre">Gestion commerciale</h2>

    <?php require('rechercheIntranet.php') ?>

    <div class="containerGestionCommercial">
        <aside class="sideBar">
            <ul class="function">
                <li><a href="listeClient.php">Liste des clients</a></li>
                <li><a href="creationClient.php" class="accesActionClient" >Création client</a></li>
            </ul>
        </aside>
        <div class="interface">
            <table class="tableauClient">
                <thead class="titreTableauClient">
                    <tr>
                        <th>ID</th>
                        <th>RAISON SOCIALE</th>
                        <th>TELEPHONE</th>
                        <th><button class="tableauClientButton triButton">TRI</button></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    
    <?php require('footer.php') ?>
</body>
</html>
