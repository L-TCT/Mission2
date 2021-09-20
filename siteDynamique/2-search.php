<?php
//ce fichier permet de chercher dans la BDD lorqu'on rentre une valeur dans la barre de recherche

define('DB_HOST', 'localhost');
define('DB_NAME', 'abi');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=abi;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
     ]);
    
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$query = htmlspecialchars($_POST['search']); 

$stmt = $pdo->prepare("SELECT idClient, raisonSociale, telephoneClient FROM client WHERE (idClient LIKE ?) OR (raisonSociale LIKE ?) OR (adresse LIKE ?) OR (activite LIKE ?) ");
$stmt->execute(["%".$query."%" , "%".$query."%" , "%".$query."%" , "%".$query."%"]);
$results = $stmt->fetchAll();

?>





