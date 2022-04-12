<?php
session_start();
if (!empty($_SESSION['user'])) {
    require('./assets/componants/header.php');
    require('./assets/componants/function.php');
    require('./assets/componants/menu.php');
    require('./assets/componants/co_bdd.php');

    $user = viewUser($_SESSION['user']['id']);
    $resultats = viewResultatForOneUser($user['id']);
    $leresultat = viewOneResultat($user['id'], $_GET['id']);

    if (empty($leresultat)) {
        header('location: 404.php');
    }
?>
    <div class="pt-5"></div>
    <style>
        .adresseDashboard {
            box-shadow: -2px 1px 16px 5px rgba(106, 106, 106, 0.1);
            padding: 2rem;
        }
    </style>
    <div class="titreMonCompte">
        <h1 class="text-center titreMonCompteee">Mon compte</h1>
    </div>
    <div class="row container my-5 mx-2">
        <div class="lepdf col-12">
            <h3>Mon résultat : </h3>
            <embed src="./admin/upload/<?= htmlspecialchars($leresultat['pdf']) ?>" height="600" width="100%" type='application/pdf' />
        </div>
        <?php if ($leresultat['note']) { ?>
            <div class="col-12">
                <h3>Titre : </h3>
                <?= htmlspecialchars(ucwords($leresultat['name'])) ?><br>
                <h3>Note : </h3>
                <?= htmlspecialchars(ucwords($leresultat['note'])) ?><br>
                <h3>Date de reçu : </h3>
                <?= htmlspecialchars($leresultat['uploading']) ?><br> <br>
                <a href="./admin/upload/<?= htmlspecialchars($leresultat['pdf']) ?>" download> Télécharger </a>
            </div>
        <?php  } ?>
    </div>


<?php



    require('./assets/componants/footer.php');
} else {
    header('location: ./404.php');
}

?>