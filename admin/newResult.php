<?php 
session_start(); 
require('./src/co_bdd.php'); 

if(!empty($_SESSION)){

    if(!empty($_POST)){

        if(!empty($_FILES)){

            if (array_key_exists('cv', $_FILES)) {
                echo 4;
                if ($_FILES['cv']['error'] == 0) {
                   
                        if ($_FILES['cv']['size'] <= 5000000) {
                            $imageFileName = uniqid() . '.' . pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);

                            move_uploaded_file($_FILES['cv']['tmp_name'], './upload/' . $imageFileName);
                        } else {
                           header('location: ../nouveauResultat.php?error=tropLourd');
                        }
                  
                } else {
                    header('location: ../nouveauResultat.php?error=fichierNonRecuperer');
                }
            }


        }else {
            header('location: newResult.php?error=joindreCV');
        }
        
        $envoiCandit = $bdd -> prepare("INSERT INTO result(name,pdf,note,id_users)value(?,?,?,?)"); 
        $envoiCandit -> execute(array(
                $_POST['name'],
                $imageFileName,
                $_POST['note'],
                $_POST['id']
        )); 
        header('location: resultat.php?success=ajouter'); 
        
    }else{
        header('location: newResult.php?error=remplirPetN'); 
    }


}else{
    header('location: connexion.php'); 

}