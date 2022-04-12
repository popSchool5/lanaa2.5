<?php
session_start();
if (!empty($_SESSION) && !empty($_GET['id'])) {

    require("./src/co_bdd.php");

    $req = $bdd->prepare("UPDATE rdv SET statut = :statut WHERE id = :id ");

    $req->bindValue(':statut','Accepter', PDO::PARAM_STR);
    $req->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $execute = $req->execute();

    if ($execute) {
        header("location: rdvseul.php?id=" . $_GET['id']);
    } else {
        echo " c mort bg";
    }
}else{
 
    header('location: index.php'); 
       
   }
