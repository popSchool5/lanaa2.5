<?php

session_start();
require('./src/co_bdd.php');

if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $error        = 1;

    $req = $bdd->prepare('SELECT * FROM admin WHERE email = ?');
    $req->execute(array($_POST['email']));
    $bg = $req -> fetchAll();

    

   foreach($bg as $user) {
        if ($user['tentative'] == 0) {
            echo 't foutu';
           header('location: ./connexion.php?error=acceesBlocked');exit();
        }
       
        if (password_verify($_POST['password'], $user['password'])) {
           
            $req = $bdd->prepare("UPDATE admin SET tentative = :tentative WHERE id = :id ");
            $req->bindValue(':tentative', 3,  PDO::PARAM_INT);
            $req->bindValue(':id', $user['id'], PDO::PARAM_INT);
            $req->execute();
            $error = 0;
            $_SESSION['connect'] = 1;
            $_SESSION['email'] = $user['email'];
            $_SESSION['id'] = $user['id'];



            header('location: index.php?success=1');
        }else{
     
            $tent=  $user['tentative'] - 1 ;
            
            $req = $bdd->prepare("UPDATE admin SET tentative = :tentative WHERE id = :id ");
            $req->bindValue(':tentative',$tent, PDO::PARAM_INT);
            $req->bindValue(':id', $user['id'], PDO::PARAM_INT);
            $req->execute();
           header('./ttt.php?errorMdp=2');
            

        }
    }
    if ($error == 1) {
        header('location: index.php?error=1');
    }
} else {
    echo 3;
}
