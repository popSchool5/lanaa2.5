<?php
session_start();
if (!empty($_SESSION)) {
    require('./src/co_bdd.php');
    require('./header.php');
    require('./sidebar.php');
    require('./src/function.php');
    $user = viewUser($_GET['id']);
    $pdfs = viewPdf($_GET['id']);
    $contrats = viewContratParentreprise($_GET['id']);

    $factures = viewFactureParentreprise($_GET['id']);
?>

    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">

            <div class="container-fluid">
                <!-- <a href="supprimerEntreprise.php?id="><button type="button" class="btn btn-danger">Supprimer Entreprise</button></a>
                <a href="modifierEntreprise.php?id="> <button type="button" class="btn btn-warning">Modifier Entreprise</button></a> -->
                <div class="panel panel-profile">
                    <div class="clearfix">
                        <!-- LEFT COLUMN -->
                        <div class="profile-left">
                            <!-- PROFILE HEADER -->
                            <div class="profile-header">
                                <!-- <div class="overlay"></div> -->
                                <div class="profile-main">
                                    <style>
                                        .name {
                                            color: black;
                                        }

                                        .profile-header .profile-main {
                                            background-color: white !important;
                                        }

                                        .clearfix {
                                            min-height: 450px;
                                        }
                                    </style>


                                </div>
                                <div class="profile-stat">

                                </div>
                            </div>
                            <!-- END PROFILE HEADER -->
                            <!-- PROFILE DETAIL -->
                            <div class="profile-detail">
                                <div class="profile-info">
                                    <h4 class="heading"> Info</h4>
                                    <ul class="list-unstyled list-justify">
                                        <li>Contact<span><?= $user['name'] ?></span></li>
                                        <li>Entreprise<span><?= $user['company'] ?></span></li>
                                        <li>Mobile <span><?= $user['phone'] ?></span></li>
                                        <li>Email <span><?= $user['email'] ?></span></li>
                                        <li>Ville<span><?= $user['city'] ?></span></li>
                                        <li>Date d'inscription<span><?= $user['register'] ?></span></li>

                                    </ul>
                                </div>
                                <div class="profile-info">

                                </div>
                                <div class="profile-info">
                                    <!-- <h4 class="heading">About</h4> -->
                                    <p></p>
                                </div>
                                <!-- <div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div> -->
                            </div>
                            <!-- END PROFILE DETAIL -->
                        </div>
                        <!-- END LEFT COLUMN -->
                        <!-- RIGHT COLUMN -->

                        <div class="profile-right">
                            <div class="resultats">
                                <h2>Facture(s)</h2>
                                <?php if ($factures) {

                                ?>
                                    <?php foreach ($factures as $facture) {

                                    ?>
                                        <style>
                                            .resultat {
                                                box-shadow: -2px 1px 16px 5px rgba(106, 106, 106, 0.1);
                                                padding: 2rem;

                                            }
                                        </style>
                                        <div class="resultat my-3">

                                            N° : <?= $facture['id'] ?> <br>
                                            Titre : <?= $facture['name'] ?> <br>
                                            Note : <?= $facture['note'] ?> <br>

                                            Facture : <a href="./admin/upload/<?= $facture['facture'] ?>" download> Télécharger </a>



                                        </div>

                                    <?php } ?>
                                <?php } else {

                                ?>
                                    <h5>Aucune facture pour l'instant</h5>
                                <?php } ?>

                            </div>
                            <div class="resultats">
                                <h2>Résultat</h2>
                                <?php if ($pdfs) {

                                ?>
                                    <?php foreach ($pdfs as $pdf) {

                                    ?>
                                        <style>
                                            .resultat {
                                                box-shadow: -2px 1px 16px 5px rgba(106, 106, 106, 0.1);
                                                padding: 2rem;

                                            }
                                        </style>
                                        <div class="resultat my-3">

                                            N° : <?= $pdf['id'] ?> <br>
                                            Titre : <?= $pdf['name'] ?>
                                            Date du résultat : <?= $pdf['uploading'] ?> <br>
                                            <div class="button mt-4">
                                                <a href="./admin/upload/<?= $pdf['pdf'] ?>" download> Télécharger </a>
                                                <a href="resultat.php?id=<?= $pdf['id'] ?>" class="mx-4">Voir </a>
                                            </div>

                                        </div>

                                    <?php } ?>
                                <?php } else {

                                ?>
                                    <h5>Aucune résultat pour l'instant</h5>
                                <?php } ?>

                            </div>
                            <div class="rdvrdv mt-5 pt-5">
                                <h2>Contrat</h2>

                                <?php
                                if ($contrats) {
                                    foreach ($contrats as $contrat) {

                                ?>
                                        <div class="rdv resultat">
                                            N° : <?= $contrat['id'] ?> <br>
                                            Titre : <?= $contrat['name'] ?><br>

                                            Contrat : <a href="./admin/upload/<?= $contrat['contrat'] ?>" download> Télécharger </a> <br>
                                            <div class="button mt-4">


                                            </div>
                                        </div>
                                    <?php }
                                } else { ?>

                                    <h5>Aucun Contrat</h5>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- END RIGHT COLUMN -->
                    </div>

                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>

    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/scripts/app-common.js"></script>
    </body>
<?php } ?>

</html>