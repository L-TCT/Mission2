<?php

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

$matricule = htmlspecialchars($_POST['mailConnexion']);
$mdp = htmlspecialchars($_POST['motDePasse']);

$req = $bdd->prepare('SELECT matricule, mdp, prenomCollabo, nomCollabo, qualification FROM collaborateur WHERE matricule = :matricule');
$req->execute(array(
    'matricule' => $matricule));
$resultat = $req->fetch();

$isPasswordCorrect = password_verify($mdp , $resultat['mdp']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe ! ';
}
else 
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['matricule'] = $resultat['matricule'];
        $_SESSION['prenom'] = $resultat['prenomCollabo'];
        $_SESSION['nom'] = $resultat['nomCollabo'];
        $_SESSION['qualification'] = $resultat['qualification'];
        header("location: mainIntranet.php");
    }
    else {
        echo 'Mauvais identifiant ou mot de passe ! ';
    }
}

?>
