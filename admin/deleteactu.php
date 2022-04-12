<?php
session_start();

if (!empty($_SESSION)) {
   
    $page = "actualites";
    require('./src/co_bdd.php');
    require('./header.php');
    require('./sidebar.php');
    require('./src/function.php');

   
    if (!empty($_GET['action']) && ($_GET['action'] == "delete") && !empty($_GET['id'])) {
        $req = $bdd->prepare('DELETE FROM actualites WHERE id = ?');
        $req->execute(array(
            $_GET['id']
        ));
    }
    header('location: actualite.php?success=delete'); 


}