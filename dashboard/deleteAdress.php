<?php
session_start();
if (!empty($_GET['id']) && !empty($_SESSION['user'])) {

    require('../assets/componants/co_bdd.php');

    $req = $bdd->prepare("DELETE FROM adresse WHERE id_users = ?");
   
    $req->execute([
        $_GET['id']
    ]);
    header('location:' . $_SERVER['HTTP_REFERER'] . '?success=deleteAdress');
}
