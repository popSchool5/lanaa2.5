<?php
session_start();
require('./src/co_bdd.php');

if (!empty($_SESSION)) {

    if(isset($_POST['modifierAccorder']) && !empty($_POST['modifierAccorder'])){
        if (!empty($_FILES)) {

            if (array_key_exists('cv', $_FILES)) {
                echo 4;
                if ($_FILES['cv']['error'] == 0) {
                    if (in_array(mime_content_type($_FILES['cv']['tmp_name']), ['video/mp4', 'video/ogv', 'video/webm', 'video/quicktime'])) {
                        
                            $imageFileName = uniqid() . '.' . pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);

                            move_uploaded_file($_FILES['cv']['tmp_name'], './upload/' . $imageFileName);
                       
                    } else {
                        echo 'Le type mime du fichier est incorrect…';
                        header('location: video.php?error=typemime');
                    }
                } else {
                    echo 'Le fichier n\'a pas pu être récupéré…';
                }
            }
        } else {
            header('location: newResult.php?error=joindreCV');
        }
        $req = $bdd->query("DELETE FROM video");
        
        $envoiCandit = $bdd->prepare("UPDATE video SET cle = ?, valeur = ?");
        $envoiCandit->execute(array(
            "video",
            $imageFileName

        ));
        header('location: video.php?success=modifier');
    }
 
        if (!empty($_FILES)) {

            if (array_key_exists('cv', $_FILES)) {
                echo 4;
                if ($_FILES['cv']['error'] == 0) {
                    if (in_array(mime_content_type($_FILES['cv']['tmp_name']), ['video/mp4', 'video/ogv', 'video/webm','video/quicktime'])) {
                       
                            $imageFileName = uniqid() . '.' . pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);

                            move_uploaded_file($_FILES['cv']['tmp_name'], './upload/' . $imageFileName);
                       
                    } else {
                        header('location: video.php?error=typemime');
                    }
                } else {
                    header('location: video.php?error=fichierNomRecuperer');
                }
            }
        } else {
            header('location: newResult.php?error=joindreCV');
        }

        $envoiCandit = $bdd->prepare("INSERT INTO video(cle,valeur)value(?,?)");
        $envoiCandit->execute(array(
            "video",
            $imageFileName,
          
        ));
        header('location: video.php?success=ajouter');
        
    
} else {
    header('location: connexion.php');
}
