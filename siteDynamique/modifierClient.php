<?php 
session_start();
?>
<?php
$id = ($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Ative Bretagne Informatique</title>
</head>
<body>
    <?php require('headerConnecte.php') ?>

    <?php require('menuSecondaireIntranet.php') ?>

    <div class="miette">
        <a href="indexConnecte.php"><img src="img/home.png" id="logoMiette"></a>
        <a href="mainIntranet.php">  / Accueil Intranet</a>
        <a href="commercial.php">  / Gestion commerciale </a> / Modifier client
    </div>

    <h2 class="h2Centre">Modifier client</h2>

    <?php require('rechercheIntranet.php') ?>

    <div class="containerGestionCommercial">
        <aside class="sideBar">
                <ul class="function">
                    <li><a href="listeClient.php">Liste des clients</a></li>
                    <li><a href="creationClient.php">Création client</a></li>
                </ul>
        </aside>

        <div class="interface">
            <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=abi;charset=utf8', 'root', '');
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            }
            $info = $bdd->prepare("SELECT * FROM client WHERE idClient=$id");
            $info->execute();
            $infoId = $info->fetchAll();

            foreach($infoId as $donnees)
            ?>

        <div class="interface">
            <form id="formCreationClient" method="post" action="modifierFormulaire.php">
                <div id="containerCreationClientBlocTop">
                    <div id="bloc1Creationclient">
                        <p class="pFormCreationClient">    
                            <label>Raison sociale</label> 
                            <input class="formInputCreationClientBloc1" type="text" name="raisonSociale" value="<?php echo $donnees['raisonSociale'];?>" required maxlength="32">
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Téléphone</label> 
                            <input class="formInputCreationClientBloc1" type="text" name="telephoneClient" value="<?php echo $donnees['telephoneClient'];?>" maxlength="15">
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Adresse</label>
                            <input class="formInputCreationClientBloc1" type="text" name="adresse" value="<?php echo $donnees['adresse'];?>">
                        </p>  
                    </div>
                    <div id="bloc2Creationclient">
                        <p class="pFormCreationClient">    
                            <label>Type</label>
                            <select class="formInputCreationClientBloc2" name ="typeSociete" id="type" value=<?php echo $donnees['typeSociete'];?>>
                                <option value="prive">Privé</option>
                                <option value="public">Public</option>
                            </select>
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Nature</label>
                            <select class="formInputCreationClientBloc2" name ="nature" id="nature" value="<?php echo $donnees['nature'];?>">
                                <option value="principal">Principal</option>
                                <option value="secondaire">Secondaire</option>
                                <option value="ancienne">Ancienne</option>
                            </select>
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Activité</label>
                            <input class="formInputCreationClientBloc2" type="text" name="activite" value="<?php echo $donnees['activite'];?>"maxlength="25" >
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Effectifs</label>
                            <input class="formInputCreationClientBloc2" type="number" name="effectif" value="<?php echo $donnees['effectif'];?>">
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Chiffres d'affaires</label>
                            <input class="formInputCreationClientBloc2" type="number" step="any" name="CA" value="<?php echo $donnees['CA'];?>">
                        </p>
                    </div>
                </div>

                <hr class="hrIndex">

                <div id="bloc3CreationClient">
                    <p class="pFormCreationClientBloc3">               
                        <label class="labelCreationClientBottom">Contacts</label>
                        <input class="formInputCreationClientBloc3" type="text" name="nomContact">
                        <span id="formCreationClientFakeButton"><span> 
                        <div class="flexCreationClient">
                            <input class="buttonCreationClient" type="submit" value="Supprimer Contact">
                            <a href="creationDuContact.php?id=<?= $donnees['idClient'];?>"><div class="buttonCreationClient">Ajout contact</div></a>
                        </div>    
                    </p>  
                    <p class="pFormCreationClientBloc3">    
                        <label class="labelCreationClientBottom">Commentaires</label>
                        <textarea id="textAreaCreationClientCommentaires" type="textarea" name="commentComm" value="<?php echo $donnees['commentComm'];?>"></textarea>
                        <span id="formCreationClientFakeButton"><span> 
                    </p>   
                </div>
                <div class="flexCreationClient">
                    <input class="buttonCreationClient" type="submit" value="Annuler">
                    <input type="hidden" value="<?php echo $donnees['idClient'] ?>" name="idClient"/>
                    <input class="buttonCreationClient" type="submit" value="Valider">
                </div>    
            </form>
        </div>
    </div>

    <?php require('footer.php')?>   
</body>
</html>
