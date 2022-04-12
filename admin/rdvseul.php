<?php
session_start();

if (!empty($_SESSION)) {
    $page = "rdv";
    require('./src/co_bdd.php');
    require('./header.php');
    require('./sidebar.php');
    require('./src/function.php');

    $rdv = viewRdv($_GET['id']);


?>

    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">

            <div class="container-fluid">
                <!-- OVERVIEW -->
                <!-- <p>
                    <a href="ouvrirPost.php"><button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Ouvrir un post</button></a>

                </p> -->
                <style>
                    .unrdv {
                        box-shadow: -2px 1px 16px 5px rgba(106, 106, 106, 0.1);
                        padding: 2rem;
                    }

                   
                </style>

                <div class="panel panel-headline">
                    <div class="panel-heading">


                        <div class="">
                            <div class="row">

                                <div class="nom">
                                    <p>Entreprise : <a href="entreprisePerso.php?id=<?= $rdv['id_users'] ?>"><?= $rdv['entreprise'] ?></a></p><br>
                                    <p>motif : <?= $rdv['motif'] ?></p><br>
                                    <p>Date souhaité : <?= $rdv['date'] ?></p><br>
                                    <?php if ($rdv['statut'] == "Attente") { ?>
                                        <a class="btn btn-success" href="reponseRdv.php?id=<?= $rdv['id'] ?>">Accepter</a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
                <!-- END OVERVIEW -->


            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>

    !
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="assets/scripts/app-common.js"></script>
<?php
} else {
    header('location: ./connexion.php?error');
}
?>

</body>

</html>