<?php 

if (isset($_GET['id'])) {

    require 'connexionBDD.php';
    
            $req = $bdd->prepare('DELETE FROM client WHERE idClient = :idClient');
            $req->execute(['idClient' => $_GET['id']]);
}
echo "Client numéro :  " . $_GET['id'] . " a bien été supprimé !" ;
header("refresh:3; url= listeClient.php");
echo "bonjour";
