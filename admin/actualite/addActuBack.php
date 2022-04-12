<?php
session_start();
if (!empty($_SESSION)) {

    if (!empty($_POST) && isset($_POST)) {
        $imageFileName = null;
        require('../src/co_bdd.php');

        if (!empty($_FILES)) {

            if (array_key_exists('images', $_FILES)) {
                if ($_FILES['images']['error'] == 0) {
                    if (in_array($_FILES['images']['type'], ['image/png', 'image/jpeg', 'image/PNG', 'image/psd', 'image/tiff', 'image/jp2', 'image/webp', 'image/gif','image/JPEG'])) {
                
                            $imageFileName = uniqid() . '.' . pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
                            $taille = getimagesize($_FILES['images']['tmp_name']);
                            $largeur = $taille[0];
                            $hauteur = $taille[1];
                            $largeur_miniature = 190;
                            $hauteur_miniature = 120;
                            
                            if (in_array($_FILES['images']['type'], [ 'image/jpeg','image/JPEG'])) {
                            $im = imagecreatefromjpeg($_FILES['images']['tmp_name']);
                            $im_miniature = imagecreatetruecolor(
                                $largeur_miniature,
                                $hauteur_miniature
                            );
                            imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
                            imagejpeg($im_miniature, '../upload/actu/' . 'petite' . $imageFileName, 100);
                           } else if(in_array($_FILES['images']['type'], ['image/png', 'image/PNG'])) {


                            
                                $im = imagecreatefrompng($_FILES['images']['tmp_name']);
                                $im_miniature = imagecreatetruecolor(
                                    $largeur_miniature,
                                    $hauteur_miniature
                                );
                                imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
                                imagepng($im_miniature, '../upload/actu/' . 'petite' . $imageFileName, 100);
                           }

                            move_uploaded_file($_FILES['images']['tmp_name'], '../upload/actu/' . $imageFileName);
                     
                    } else {
                       header('location: ../addActu.php?error=typemimeerror'); 
                    }
                } else {
                    header('location: ../addActu.php?error=fichiernonrecuperer'); 
                }
            }
        }


        $req = $bdd->prepare("INSERT INTO actualites(name,description,image,accroche)VALUES(:name,:description,:images,:accroche)");
        $req->bindValue(':images', $imageFileName, PDO::PARAM_STR);
        $req->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $req->bindValue(':accroche', $_POST['accroche'], PDO::PARAM_STR);
        $req->bindValue(':description', $_POST['description'], PDO::PARAM_STR);



        $execute = $req->execute();

        header('location:../actualite.php?succes=ajout');
    } else {
        header('location:../actualite.php?error=ajout');
    }
} else {
    header('location:../index.php');
}
