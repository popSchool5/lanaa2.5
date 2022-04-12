<?php
session_start();

if (!empty($_SESSION['user'])) {
    require('../assets/componants/co_bdd.php');

    if (!empty($_POST)) {
        if (!empty($_GET) && $_GET['q'] === 'info') {


            $infoDuUsers = $bdd->prepare("SELECT * FROM users WHERE id = ?");
            $infoDuUsers->execute(array(
                $_POST['id']
            ));
            $infoDuUser = $infoDuUsers -> fetch(); 
           
            $onVaVoirSiSaExiste = $bdd -> prepare('SELECT * FROM users WHERE email = ? ');
            $onVaVoirSiSaExiste -> execute(array(
            $_POST['email']
            ));
            $aa = $onVaVoirSiSaExiste -> fetchColumn();
            
            if(!$aa){ 
                $req = $bdd->prepare('UPDATE users SET name = ?,company = ?,email = ?,role = ? WHERE id = ?');
                $req->execute(array(
                    $_POST['name'],
                    $_POST['company'],
                    $_POST['email'],
                    $_POST['role'],
                    $_POST['id']
                ));
                header('location: ../dashboard.php?success=infoModifier');
            }else{
                if($infoDuUser['email'] == $_POST['email']){
                    $req = $bdd->prepare('UPDATE users SET name = ?,company = ?,email = ?,role = ? WHERE id = ?');
                    $req->execute(array(
                        $_POST['name'],
                        $_POST['company'],
                        $_POST['email'],
                        $_POST['role'],
                        $_POST['id']
                    ));
                    header('location: ../dashboard.php?success=infoModifier');
                }else{
                    header('location: ../dashboard.php?error=emailerroner');
                    exit();
                }
                
            }
           
            
          
        } elseif (!empty($_GET) && $_GET['q'] === 'password') {
            if ($_POST['newpassword'] == $_POST['newpassword2']) {
                $req = $bdd->prepare('UPDATE users set password = ? WHERE id = ?');
                $req->execute(array(
                    password_hash($_POST['newpassword'], PASSWORD_BCRYPT),
                    $_POST['id']
                ));
                header('location: ../dashboard.php?success=password');
            } else {
                header('location: ../dashboard.php?error=passwordidentique');
            }
        }
    } else {
        header('location: dashboard.php?error=remplireFormCompte');
    }
} else {
    header('location: index.php?error=connexionManquante');
}



$req = $bdd->prepare("SELECT * FROM users WHERE email=:email");
$req->bindValue(':email', $email, PDO::PARAM_STR);
$req->execute();

if ($req->rowCount() > 0) {
    array_push($err['mess'], 'un email est deja enregistrer avec cette email');
    $err['codeErr'] = 1;
}
