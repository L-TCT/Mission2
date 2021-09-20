<?php

require_once "connexionBBD.php";

$req = $bdd->prepare("SELECT * FROM contact WHERE idContact = :idClient");
$req->execute(['idClient' => $_GET['id']]);
$results = $req->fetchall();

if (count($results) > 0) {
    foreach ($results as $donnees) {
        echo $donnees['idClient'];
    }

}
