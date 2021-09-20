<?php

$post = file_get_contents('php://input');
if(!empty($post)){
    $data = json_decode($post, true);
    $matricule = $data["matricule"];
    $mdp = $data["motDePasse"];


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=abi;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
     ]);
    
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT matricule, mdp, prenomCollabo, nomCollabo, qualification FROM collaborateur WHERE matricule = :matricule');
$req->execute(array(
    'matricule' => $matricule));
$resultat = $req->fetch();

if ($resultat == true) {
$isPasswordCorrect = password_verify($mdp , $resultat['mdp']);
    if ($isPasswordCorrect) {
        echo json_encode([
            "success" => true,
        ]);
        session_start();
        $_SESSION['matricule'] = $resultat['matricule'];
        $_SESSION['prenom'] = $resultat['prenomCollabo'];
        $_SESSION['nom'] = $resultat['nomCollabo'];
        $_SESSION['qualification'] = $resultat['qualification'];
    }
    else {
        echo json_encode([
            "success" => false,
            "errors" => [
                "Mauvais identifiant ou mot de passe ! "
            ]
        ]);
    
        }
    }    
else {
    echo json_encode([
        "success" => false,
        "errors" => [
            "Mauvais identifiant ou mot de passe ! "
        ]
    ]);
}
}
?>
