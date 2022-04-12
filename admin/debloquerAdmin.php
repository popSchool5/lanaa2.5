<?php
session_start();
if (!empty($_SESSION)) {
    if (!empty($_GET['id'])) {
        require("./src/co_bdd.php");

        $req = $bdd->prepare("UPDATE admin SET tentative = :tentative WHERE id = :id ");
        $req->bindValue(':tentative',3, PDO::PARAM_INT);
        $req->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $execute = $req->execute();
        header('location:./setting.php');
    }
}
