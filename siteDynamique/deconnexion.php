<?php
//permet la deconnexion de l'utisateur
    session_start();
    session_destroy();
    header('Location: index.php');
    die();
?>