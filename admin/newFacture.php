<?php
session_start();
require('./src/co_bdd.php');

if (!empty($_SESSION)) {

    if (!empty($_POST)) {

        if (!empty($_FILES)) {

            if (array_key_exists('cv', $_FILES)) {
                echo 4;
                if ($_FILES['cv']['error'] == 0) {
                
                        if ($_FILES['cv']['size'] <= 5000000) {
                            $imageFileName = uniqid() . '.' . pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);

                            move_uploaded_file($_FILES['cv']['tmp_name'], './upload/' . $imageFileName);
                        } else {
                            
                            header('location: ./nouvelleFacture.php?error=fichierTropVolumineux');
                        }
                  
                } else {
                    echo 'Le fichier n\'a pas pu être récupéré…';
                }
            }
        } else {
            header('location: newResult.php?error=joindreCV');
        }
        if(!empty($_POST['etat']) && isset($_POST['etat'])){
            $etatFacture = $_POST['etat']; 
        }else{
            $etatFacture = '1'; 
        }

        $envoiCandit = $bdd->prepare("INSERT INTO factures(name,facture,note,etat,id_users)value(?,?,?,?,?)");
        $envoiCandit->execute(array(
            $_POST['name'],
            $imageFileName,
            $_POST['note'],
             $etatFacture,
            $_POST['id']
        ));
        header('location: factures.php?success=ajouter');
    } else {
        header('location: factures.php?error=remplirPetN');
    }
} else {
    header('location: connexion.php');
}
