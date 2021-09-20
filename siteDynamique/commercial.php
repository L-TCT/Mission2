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
    <a href="mainIntranet.php">  / Accueil Intranet</a><a href="commercial.php">  / Gestion commerciale </a>
    </div>

    <h2 class="h2Centre">Gestion commerciale</h2>

    <?php require('rechercheIntranet.php') ?>

    <div class="containerGestionCommercial">
        <aside class="sideBar">
            <ul class="function">
                <li><a href="listeClient.php">Liste des clients</a></li>
                <li><a href="creationClient.php" class="accesActionClient">Création client</a></li>
            </ul>
        </aside>
        <div class="interface">
            <table class="tableauClient">
                <thead class="titreTableauClient">
                    <tr>
                        <th class="colonneId">ID</th>
                        <th class="colonneNom">RAISON SOCIALE</th>
                        <th class="colonneTel">TELEPHONE</th>
                        <th class="colonneTri"><a href="#" class="tableauClientButton triButton">TRI</button></th>
                    </tr>
                </thead>
                <tbody class="corpsTableauClient">
                    <tr>
                        <?php
                            if (isset($_POST['search'])) {
                                require "2-search.php";
                                    if (count($results) > 0) {
                                        foreach ($results as $donnees) {
                        ?>
                            <td><?php echo $donnees['idClient'];?></td>
                            <td><?php echo $donnees['raisonSociale'];?></td>
                            <td><?php echo $donnees['telephoneClient'];?></td>
                            <td class="dropdown">
                                <button class="tableauClientButton actionButton">ACTION</button>
                                <ul class="dropdownContent">
                                    <li><a href="afficherClient.php?id=<?= $donnees['idClient'] ?>">Fiche client</a></li>
                                    <li><a href="afficherClient.php?id=<?= $donnees['idClient'] ?>#ancreContact">Liste contact</a></li>
                                    <li><a href="creationDuContact.php?id=<?= $donnees['idClient']?>" class="accesActionClient">Ajouter contact</a></li>
                                    <li><a href="modifierClient.php?id=<?= $donnees['idClient'] ?>" class="accesActionClient">Modifier</a></li>
                                    <li><a href="supprimerClient.php?id=<?= $donnees['idClient'] ?>" class="accesActionClient supprimerClient">Supprimer</a></li>
                                </ul>
                            </td>
                    </tr>
                        <?php 
                                       
                                    }
                                   
                                    }
                                    
                                else {
                                    echo "Aucun résultat";
                            }
                        }
                        ?>
                </tbody> 
            </table>
        </div>
    </div>
    
    <?php require('footer.php') ?>
</body>
</html>
