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
    <script>
        let qualification = "<?php echo $_SESSION['qualification']; ?>";
    </script>
    <script src="scriptAccesGestionCommerciale.js" async></script>
    <script src="scriptSupprimerClient.js" async></script>
    <link rel="stylesheet" href="node_modules/spin.js/spin.css"/>

    <title>Gestion commerciale</title>
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

    <div class="containerGestionCommercial" id="targetSpinner">
        <aside class="sideBar">
                <ul class="function">
                    <li><a href="listeClient.php">Liste des clients</a></li>
                    <li><a href="creationClient.php" class="accesActionClient">Création client</a></li>
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
            
            <div class="contenuAfficherClient">
                <div class="divNomDuClient">
                    <p class="nomDuClient"><?php echo $donnees['raisonSociale'];?></p>
                    <p class="nomDuClient"><?php echo $donnees['idClient'];?></p>
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
                        <p class="infosTxT"><?php echo $donnees['typeSociete'];?></p>
                        <p class="infosTxT"><?php echo $donnees['telephoneClient'];?></p>
                        <p class="infosTxT"><?php echo $donnees['activite'];?></p>
                        <p class="infosTxT"><?php echo $donnees['adresse'];?></p>
                        <p class="infosTxT"><?php echo $donnees['effectif'];?></p>
                        <p class="infosTxT"><?php echo $donnees['CA'];?></p>
                    </div>
                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes" id="ancreContact">Contact</p>
                    <select class="listeScroll" id="selectContact">
                    <option value="0" selected>Choissisez un contact : </option>
                    <?php

                    require 'connexionBDD.php';


                    $req = $bdd->prepare("SELECT * FROM contact WHERE idClient = :idClient");
                    $req->execute(['idClient' => $_GET['id']]);
                    $results = $req->fetchall();

                    if (count($results) > 0) {
                        foreach ($results as $contacts) {
                            echo "<option value={$contacts['idContact']}>NOM : {$contacts['nomContact']}   |   PRENOM : {$contacts['prenomContact']}   |   TEL : {$contacts['telContact']}</option>";
                        }
                    }

                    ?>
    
                    </select>
                

                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes">Documents</p>
                    <div class="listeSansScroll documentsImage">
                        <ul id="listeDocuments">
                        
                        </ul>
                    </div>
                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes">Commentaires</p>
                    <div>
                        <p class="listeSansScroll"><?php echo $donnees['commentComm'];?>
                        </p>
                    </div>
                </div>
                <div class="boutonsModifierSupprimerPositions">
                    <a class="boutonsModifierSupprimerForme supprimerClient accesActionClient" href="supprimerClient.php?id=<?= $donnees['idClient'] ?>">
                            <div class="boutonsModifierSupprimerTxt">Supprimer</div>
                    </a>
                    <a class="boutonsModifierSupprimerForme accesActionClient" href="creationDuContact.php?id=<?= $donnees['idClient']?>">
                            <div class="boutonsModifierSupprimerTxt">Nouveau Contact</div>
                    </a>
                    <a class="boutonsModifierSupprimerForme accesActionClient" href="modifierClient.php?id=<?= $donnees['idClient']?>">
                        <div class="boutonsModifierSupprimerTxt">Modifier</div>
                    </a>
                </div>
            </div>
        </div> 
    </div>
    <?php require('footer.php') ?>
    <script type="module">
    import {Spinner} from './node_modules/spin.js/spin.js';

    const opts = {
        lines: 13, // The number of lines to draw
        length: 38, // The length of each line
        width: 17, // The line thickness
        radius: 45, // The radius of the inner circle
        scale: 1, // Scales overall size of the spinner
        corners: 1, // Corner roundness (0..1)
        speed: 1, // Rounds per second
        rotate: 0, // The rotation offset
        animation: 'spinner-line-fade-quick', // The CSS animation name for the lines
        direction: 1, // 1: clockwise, -1: counterclockwise
        color: '#064654', // CSS color or array of colors
        fadeColor: 'transparent', // CSS color or array of colors
        top: '50%', // Top position relative to parent
        left: '50%', // Left position relative to parent
        shadow: '0 0 1px transparent', // Box-shadow for the lines
        zIndex: 2000000000, // The z-index (defaults to 2e9)
        className: 'spinner', // The CSS class to assign to the spinner
        position: 'fixed', // Element positioning
    };

    const target = document.getElementById('targetSpinner');
    const spinner = new Spinner(opts);//.spin(target);
    
                        
    
    let $active = document.getElementById('selectContact');
    $active.addEventListener('change', function(){
        let $index = $active.selectedIndex;
        var $idContact = $active.options[$index].value
        const url ="traitementDocument.php";
        const requestOptions = {
            method: "POST",
            body: JSON.stringify({
                idContact: $idContact
            }),
            headers: new Headers({
                'Content-Type': 'application/json'
            })
        }
        
        spinner.spin(target);
        $active.setAttribute("disabled", true);
        fetch(url, requestOptions)
            .then($res => $res.json())                                  
            .then(function($data) {
                let $divDocument = document.getElementById('listeDocuments');
                let $resultat = $data.documents;  
                if ($idContact === $data.idContact) {                                        
                    switch($data.success) { 
                        case true:                                                                                
                            let html = "";
                            for (let i = 0; i < $resultat.length ; i++) {
                                html += "<li> " + $resultat[i]['titre'] + " : " + $resultat[i]['resume'] + "</li>";
                            }
                            $divDocument.innerHTML = html;
                            break;
                        case false:
                            $divDocument.innerHTML = 'auncun document associé !';
                            break;
                    }   
                }   
                else {
                    $divDocument.innerHTML = "erreur réseau, veuillez réessayer";
                }                               
            })
            .catch((err)=>{
                if (err){
                    console.log(err)
                }
            })
            .finally(() =>  {
                spinner.stop();
                $active.removeAttribute("disabled");
            })
    })
</script>
</body>
</html>
