<?php
session_start();

if (!empty($_SESSION['user'])) {
    require('../assets/componants/co_bdd.php');

    if (!empty($_POST)) {
 
            $req = $bdd->prepare('INSERT INTO adresse(name,adresse,codepostal,city,phone,id_users)VALUES (:name,:adresse,:codepostal,:city,:phone,:id_users)');
            $req->execute(array(
                'name' => $_POST["name"],
                
                'adresse' => $_POST["adresse"],
                'city' => $_POST["city"],
                'codepostal' => $_POST["codepostal"],
                'phone' => $_POST["phone"],
             
                'id_users' => $_POST['id']
            ));
            header('location:' . $_SERVER['HTTP_REFERER'] . '?success=AdressAjouter');
      
    } else {
        header('location: dashboard.php?error=remplireFormAddresse');
    }
} else {
    header('location: index.php?error=connexionManquante');
}
