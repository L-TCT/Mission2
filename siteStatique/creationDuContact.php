<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Ative Bretagne Informatique</title>
</head>
<body>
    <?php include('headerConnecte.php') ?>

    <?php include('menuSecondaireIntranet.php') ?>

    <div class="miette">
        <a href="indexConnecte.php"><img src="img/home.png" id="logoMiette"></a>
        <a href="mainIntranet.php">  / Accueil Intranet</a>
        <a href="commercial.php">  / Gestion commerciale </a> / Création contact
    </div>

    <h2 class="h2Centre">Création contact</h2>

    <?php include('rechercheIntranet.php') ?>

    <div class="containerGestionCommercial">
        <aside class="sideBar">
                <ul class="function">
                    <li><a href="listeClient.php">Liste des clients</a></li>
                    <li><a href="creationClient.php">Création client</a></li>
                </ul>
        </aside>   
        <div class="interface">
            <form id="formCreationContact" method="post" action="afficherClient.php">
                <div id="containerCreationContactBlocTop">
                    <div id="bloc1CreationContact">
                        <p class="formCreationContact">    
                            <label>Nom </label> 
                            <input class="formInputCreationContactBloc1" type="text" name="name" maxlength="32">
                        </p>  
                        <p class="formCreationContact">    
                            <label>Prénom </label> 
                            <input class="formInputCreationContactBloc1" type="text" name="firstname" maxlength="15">
                        </p>  
                        <p class="formCreationContact">    
                            <label>Telephone</label>
                            <input class="formInputCreationContactBloc1" type="text" name="adresse">
                        </p>  
                    </div>
                </div>

                <hr class="hrIndex">
                
                <div id="bloc3CreationContact">
                    <p class="formCreationContactBloc3">               
                        <label class="labelCreationContactBottom">Photos</label>
                        <input class="formInputCreationContactBloc3" type="text" name="nomContact">
                        <input class="buttonCreationContact" type="submit" value="Ajout Photo">
                    </p>  
                    <p class="formCreationContactBloc3">    
                        <label class="labelCreationContactBottom">Documents</label>
                        <input class="formInputCreationContactBloc3" type="text" name="documents">
                        <input class="buttonCreationContact" type="submit" value="Ajout Document">
                    </p>  
                </div>
                <div class="flexCreationContact">
                    <input class="buttonCreationContact" type="submit" value="Annuler">
                    <input class="buttonCreationContact" type="submit" value="Valider">
                </div>    
            </form>
        </div>
    </div>

    <?php include('footer.php')?>   
</body>
</html>
