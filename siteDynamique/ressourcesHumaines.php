<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <script>
        let qualification = "<?php echo $_SESSION['qualification']; ?>";
    </script>
    <script src="scriptAccesGestionCommerciale.js" async></script>
    <script src="scriptSupprimerClient.js" async></script>
    <title>Ative Bretagne Informatique</title>
</head>
<body>
    <?php require('headerConnecte.php') ?>

    <?php require('menuSecondaireIntranet.php') ?>

    <div class="miette">
    <a href="indexConnecte.php"><img src="img/home.png" id="logoMiette"></a>
    <a href="mainIntranet.php">  / Accueil Intranet</a><a href="ressourcesHumaines.php">  / Ressources humaines </a>
    </div>

    <h2 class="h2Centre">Ressources Humaines EN COURS DE TRAVAUX ! ;)</h2>


    <div class="grid-container">
        
        <div class="Recherche">
            <form action ="ressourcesHumaines.php" class="searchForm" method="post">
                <input class="searchInput"  name="search" placeholder= "Rechercher un collaborateur..." required>
                <button type ="submit" value="Search" class="searchButton"><img src="img/search.svg" alt=""></button>
            </form>
        </div>
        <div class="Résultats">
            <table class="tableauClient">
                <caption>Résultats de votre cherche</caption>
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th><button class="tableauClientButton triButton">TRI</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Marly</td>
                        <td>Bob</td>
                        <td class="dropdown">
                            <button class="tableauClientButton actionButton">ACTION</button>
                            <ul class="dropdownContent">
                                <li><a href="">Fiche client</a></li>
                                <li><a href="">Liste contact</a></li>
                                <li><a href="" class="accesActionClient">Ajouter contact</a></li>
                                <li><a href="" class="accesActionClient">Modifier</a></li>
                                <li><a href="" class="accesActionClient supprimerClient">Supprimer</a></li>
                            </ul>
                        </td>
                    <tr>

                    <tr>
                        <td>2</td>
                        <td>Doe</td>
                        <td>John</td>
                    <tr>

                    <tr>
                        <td>3</td>
                        <td>saurin</td>
                        <td>willy</td>
                    <tr>
                </tbody>                
            </table>
        </div>
        <div class="Menu">
            <ul>
                <li>supprimer</li>
                <li>ajouter</li>
            </ul>
        </div>
    </div>

<?php require('footer.php') ?>
