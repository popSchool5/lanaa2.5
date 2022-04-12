<?php

$sujet = $_POST['company'];

$email = $_POST['email'];
$nom = "bg";
if (!empty($_POST['motifrdv']) && isset($_POST['motifrdv'])) {
    $message = " Numéro de téléphone : ";
    $message .= $_POST["numeroDeTelephone"];
    $message .= "\r\n";
    $message .= "\r\n";

    $message .= $_POST['motifrdv'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $destinataire = 'Service-reclamation-lanaa@gmail.com';
        $headers .= 'From:' . $nom . ' <' . $email . '>' . "\r\n" .
            'Reply-To:' . $email . "\r\n" .
            'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed ' . "\r\n" .
            'Content-Disposition: inline' . "\r\n" .
            'Content-Transfer-Encoding: 7bit' . " \r\n" .
            'X-Mailer:PHP/' . phpversion();
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
        if (mail($destinataire, $sujet, $message, $headers)) {
            header('location: dashboard.php?success=email');
        } else {
            header('location: dashboard.php?error=email');
        }
    } else {
        header('location: dashboard.php?error=adresseemail');
    }
} else {
    header('location: dashboard.php?error=mettreunsujet');
}
