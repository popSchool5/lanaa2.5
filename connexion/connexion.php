<?php
session_start();
require('../assets/componants/co_bdd.php');

if (!empty($_GET['sess'] == "insc")) {
    $req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
      $req->execute(
        array(
         $_POST['email']
        )
    );
    if ($req->rowCount() > 0) {
        header('location: ../index.php?error=emailexiste'); 
    }else{

        if (!empty($_POST)) {
            if($_POST['password'] == $_POST['secondPassword']){
                $bg = $bdd->prepare("INSERT INTO users(name,company,email,role,password) VALUES (?,?,?,?,?)");

                $bg->execute(array(
                    $_POST['name'],
                    $_POST['company'],
                    $_POST["email"],
                    $_POST['role'],
                    password_hash($_POST['password'], PASSWORD_BCRYPT)
                ));
               
                header('location: ../index.php?success=inscription');
            }else{
                header('location: ../index.php?error=pasidentitque');

            }
          
        }
    }
    
} elseif (!empty($_GET['sess']) == "co") {

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        // VARIABLES
        $email         = $_POST['email'];
        $password     = $_POST['password'];
        $error        = 1;
        $req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $req->execute(array($email));

        while ($user = $req->fetch()) {
            if (password_verify($password, $user['password'])) {
                $error = 0;
                $_SESSION['user']['id'] = $user['id'];
                $_SESSION['user']['connect'] = 1;
                $_SESSION['user']['email']   = $user['email'];
                $_SESSION['user']['name']= $user['name']; 
                header('location: ../index.php?success=co');

                exit();
            }
        }
        if ($error == 1) {
            header('location: ../index.php?error=co');
            exit();
        }
    }
}
