<?php
$post = file_get_contents('php://input');
if(!empty($post)){
    $data = json_decode($post, true);
    $username = $data["username"];
    $password = $data["password"];

    if($username == "Alex" && $password == "myPassword"){
        echo json_encode([
            "success" => true,
            "msg" => "Hello $username"
        ]);
    }else{
        echo json_encode([
            "success" => false,
            "errors" => [
                "Invalid credentials"
            ]
        ]);
    } 
}
