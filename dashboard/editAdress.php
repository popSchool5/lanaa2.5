<?php
session_start();

if (!empty($_SESSION['user'])) {
    require('../assets/componants/co_bdd.php');

    if (!empty($_POST)) {

        $req = $bdd->prepare('UPDATE adresse SET name= ?,adresse = ? ,codepostal =? ,city= ? ,phone= ?  WHERE id_users = ?');
        $req->execute(array(
            $_POST["name"],
    
            $_POST["adresse"],
            $_POST["city"],
            $_POST["postal"],
            $_POST["phone"],
            $_POST['id']
        ));
        header('location:' . $_SERVER['HTTP_REFERER'] . '?success=AdressAjouter');
    } else {
        header('location: dashboard.php?error=remplireFormAddresse');
    }
} else {
    header('location: index.php?error=connexionManquante');
}
