<?php

$post = file_get_contents('php://input');
if(!empty($post)){
    $data = json_decode($post,true);
    $idContact = $data['idContact'];


}

require 'connexionBDD.php';

    $req = $bdd->prepare("SELECT * FROM document WHERE idContact = :idContact");
    $req->execute(['idContact' => $idContact]);
    $results = $req->fetchAll();
    

    if ($results == true) {
        echo json_encode([
            "success" => true,
            "idContact" => $idContact,
            "documents" => $results,
        ]);  
    }
    else {
        echo json_encode([
            "success" => false,
            "idContact" => $idContact,
        ]);
    }
?> 
