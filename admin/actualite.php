<?php
session_start();

if (!empty($_SESSION)) {

    $page = "actualites";
    require('./src/co_bdd.php');
    require('./header.php');
    require('./sidebar.php');
    require('./src/function.php');

    $actus = viewActualites();



?>

    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">

            <div class="container-fluid">
                <!-- OVERVIEW -->
                <?php if (!empty($_GET['succes']) && isset($_GET) && $_GET['succes'] == 'ajout') { ?>

                    <div class="alert alert-success" role="alert">
                        Actualitées ajouter
                    </div>
                <?php } else if (!empty($_GET['success']) && isset($_GET) && $_GET['success'] == 'delete') { ?>
                    <div class="alert alert-danger" role="alert">
                        Actualitées supprimer
                    </div>
                <?php } ?>
                <p>
                    <a href="./addActu.php"><button type="button" class="btn btn-success"><i class="fa fa-check-circle"> </i> Ajouter une actualitée</button></a>

                </p>
                <style>
                    .unrdv {
                        box-shadow: -2px 1px 16px 5px rgba(106, 106, 106, 0.1);
                        padding: 2rem;
                    }
                </style>

                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <style>
                            .imagePetite{
                                max-width: 60% !important;
                            }
                        </style>
                        <?php
                        if ($actus) {

                            foreach ($actus as $actu) { ?>
                                <div class="actu unrdv">
                                    Titre : <br> <?= $actu['name'] ?><br><br>
                                    Accroche : <br> <?= $actu['accroche'] ?><br><br>
                                    image : <br> <img class="imagePetite" src="./upload/actu/<?= $actu['image'] ?>"><br> <br><br>
                                    <a href="./deleteactu.php?action=delete&id=<?= $actu['id'] ?>" type="button" class="btn btn-danger">Supprimer</a>

                                </div>
                            <?php }
                        } else { ?>

                            <h5>Aucune actualité</h5>
                        <?php }   ?>


                    </div>

                </div>
            </div>



        </div>
    </div>

    </div>


    </div>

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