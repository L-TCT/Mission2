<?php 
session_start();
?>
 <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=abi;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    $idClient = $_POST["idClient"];
    $raisonSociale = $_POST["raisonSociale"];
    $telephoneClient = $_POST["telephoneClient"];
    $adresse = $_POST["adresse"];
    $typeSociete = $_POST["typeSociete"];
    $nature = $_POST["nature"];
    $activite = $_POST["activite"];
    $effectif = $_POST["effectif"];
    $CA = $_POST["CA"];
    $nomContact = $_POST["nomContact"];
    $commentComm = $_POST["commentComm"];
    
    
    $modif = $bdd->prepare("UPDATE client SET raisonSociale = :raisonsociale, adresse = :adresse WHERE idClient=$idClient");
    $modif->execute(array (
        'raisonsociale' => $raisonSociale,
        'adresse' => $adresse
    ));


    header("Location:afficherClient.php?id=$idClient");





   
