<?php
session_start();
if(!empty($_SESSION)){
    if (!empty($_POST)) {


        $texte_plain  = "titre \n";
        $texte_plain .= "votre texte \n";
        $texte_plain .= "a ecrire ici \n";

        $texte_html  = '';



        $mime_boundary = "Oh My Sushi " . md5(time());
        $entetes = "From: Oh My Sushi  <services@lanaa.org>\n";
        $entetes .= "Mime-Version: 1.0\n";
        $entetes .=
            "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";
        $entetes .= "X-Sender: <www.lanaa.com>\n";
        $entetes .= "X-Mailer: PHP/" . phpversion() . " \n";
        $entetes .= "X-Priority: 3 (normal) \n";
        $entetes .= "X-auth-smtp-user: services@lanaa.org\n";
        $entetes .= "X-abuse-contact: abuse@lanaa.org\n";
        $entetes .= "Importance: Normal\n";
        $entetes .= "Reply-to: services@lanaa.org\n";


        // header texte plain
        $mess = "--$mime_boundary\n";
        $mess .= "Content-Type: text/plain; charset=ISO-8859-1\n";
        $mess .= "Content-Transfer-Encoding: 8bit\n\n";
        $mess .= $texte_plain;


        // header texte en html

        $mess .= "--$mime_boundary\n";
        $mess .= "Content-Type: text/html; charset=ISO-8859-1\n";
        $mess .= "Content-Transfer-Encoding: 8bit\n\n";
        $mess .= $texte_html;

        // envoi du mail HTML
        $date_mail = date("d-m-Y"); // la date (optionnelle)
        mail($email, "titre - $date_mail", $mess, $entetes);



    }else{
        header('./dashboard.php');
    }
}else{
    header('location: index.php'); 
}
