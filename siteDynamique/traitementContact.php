<?php 

require "connexionBDD.php";


//récuperation des informations des champs
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$telephone = $_POST["telephone"];
$photo = $_POST["photo"];
// $document = $_POST["document"];
$idClient = $_POST["idClient"];



$req = $bdd->prepare("INSERT INTO `contact`(`nomContact`, `prenomContact`, `telContact`, `photo`, idClient) VALUES (:nom, :prenom, :telephone, :photo, :idClient)");
$req->bindParam(':nom', $nom);
$req->bindParam(':prenom', $prenom);
$req->bindParam(':telephone', $telephone);
$req->bindParam(':photo', $photo);
$req->bindParam(':idClient', $idClient);
$req->execute();




header("Location:afficherClient.php?id=$idClient");
