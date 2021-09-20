<?php
//fichier permettant la transmission des données du formulaire création client à la BDD
//information sur le serveur
    $serveur = "localhost";
    $dbname = "abi";
    $user = "root";
    $pass = "";

//récuperation des informations des champs
    $raisonSociale = $_POST["raisonSociale"];
    $telephoneClient = $_POST["telephone"];
    $adresse = $_POST["adresse"];
    $typeSociete = $_POST["typeSociete"];
    $nature = $_POST["nature"];
    $activite = $_POST["activite"];
    $effectif = $_POST["effectif"];
    $CA = $_POST["CA"];
    $commentComm = $_POST["commentComm"];

    try{
        //connection à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //insertion des données reçues
        $sth = $dbco->prepare("
        INSERT INTO client(raisonSociale, typeSociete, activite, adresse, telephoneClient, nature, CA, effectif, commentComm) VALUES(:raisonSociale, :typeSociete, :activite, :adresse, :telephoneClient, :nature, :CA, :effectif, :commentComm)");
        $sth->bindParam(':raisonSociale',$raisonSociale);
        $sth->bindParam(':typeSociete',$typeSociete);
        $sth->bindParam(':activite',$activite);
        $sth->bindParam(':adresse',$adresse);
        $sth->bindParam(':telephoneClient',$telephoneClient);
        $sth->bindParam(':nature',$nature);
        $sth->bindParam(':CA',$CA);
        $sth->bindParam(':effectif',$effectif);
        $sth->bindParam(':commentComm',$commentComm);
        $sth->execute();

        //renvoie vers la 1er page de gestion commercial
        header("Location:listeClient.php");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }

?>
