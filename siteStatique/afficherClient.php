<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Gestion commercial</title>
</head>
<body>
    <?php require('headerConnecte.php') ?>

    <?php require('menuSecondaireIntranet.php') ?>

    <div class="miette">
        <a href="index.php"><img src="img/home.png" id="logoMiette"></a>
        <a href="commercial">  / Gestion commerciale </a> / Afficher client
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
            <div class="contenuAfficherClient">
                <div class="divNomDuClient">
                    <p class="nomDuClient">nom du Client</p>
                    <p class="nomDuClient">n°12345678910</p>
                </div>
                <!--informations-->
                <div class="donneesAffichageClient">
                    <div class="infosFixes">
                        <p class="infosTxT infosTxtFixes">Type client</p>
                        <p class="infosTxT infosTxtFixes">Téléphone</p>
                        <p class="infosTxT infosTxtFixes">Domaine</p>
                        <p class="infosTxT infosTxtFixes">Adresse</p>
                        <p class="infosTxT infosTxtFixes">Effectifs</p>
                        <p class="infosTxT infosTxtFixes">Chiffre</p>
                    </div>
                    <div class="infosVariables">
                    <p class="infosTxT infosTxtFixes">Type client</p>
                        <p class="infosTxT infosTxtFixes">Téléphone</p>
                        <p class="infosTxT infosTxtFixes">Domaine</p>
                        <p class="infosTxT infosTxtFixes">Adresse</p>
                        <p class="infosTxT infosTxtFixes">Effectifs</p>
                        <p class="infosTxT infosTxtFixes">Chiffre</p>
                    </div>
                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes" id="ancreContact">Contact</p>
                    <select class="listeScroll ">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                    </select>
                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes">Documents</p>
                    <div class="listeSansScroll documentsImage">
                        <ul>
                            <li>Contrat</li>
                            <li>document</li>
                            <li>autre document</li>
                            <li>etc</li>
                        </ul>
                    </div>
                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes">Commentaires</p>
                    <div>
                        <p class="listeSansScroll">Commentaires
                        </p>
                    </div>
                </div>
                <div class="boutonsModifierSupprimerPositions">
                    <a class="boutonsModifierSupprimerForme" href="listeclient.php">
                            <div class="boutonsModifierSupprimerTxt">Supprimer</div>
                    </a>
                    <a class="boutonsModifierSupprimerForme" href=creationDuContact.php>
                            <div class="boutonsModifierSupprimerTxt">Nouveau Contact</div>
                    </a>
                    <a class="boutonsModifierSupprimerForme" href="modifierClient.php">
                        <div class="boutonsModifierSupprimerTxt">Modifier</div>
                    </a>
                </div>
