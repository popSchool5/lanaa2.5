<?php
session_start();

if (!empty($_SESSION)) {
    $page = "video";
    require('./src/co_bdd.php');
    require('./src/function.php');

    require('./header.php');
    require('./sidebar.php');

    $video = viewVideo();

    // VERIFICATION POUR LA SUPPRESION DE LA VIDEO 

    if (!empty($_GET['action']) && $_GET['action'] == 'deleteVideo') {
        $req = $bdd->query("DELETE FROM video");
        header('location: video.php?videosupprimer');
    }
?>
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <?php if (!empty($_GET['error']) && isset($_GET) && $_GET['error'] == 'fichierNomRecuperer') { ?>

                    <div class="alert alert-danger" role="alert">
                       Vidéo non trouvée.
                    </div>
                <?php } else if (!empty($_GET['error']) && isset($_GET) && $_GET['error'] == 'typemime') { ?>
                    <div class="alert alert-danger" role="alert">
                        Mauvais format de vidéo.
                    </div>
                <?php }  else if (!empty($_GET['error']) && isset($_GET) && $_GET['error'] == 'joindreCV') { ?>
                    <div class="alert alert-danger" role="alert">
                        Erreur.
                    </div>
                <?php } else if (!empty($_GET['success']) && isset($_GET) && $_GET['success'] == 'ajouter') { ?>
                    <div class="alert alert-success" role="alert">
                        Vidéo ajoutée.
                    </div>
                <?php } ?>
                <?php
                if (!$video) { ?>

                <?php
                }
                ?>
                <p>
                </p>
                <div class="panel panel-headline">

                    <div class="video">
                        <div class="lavideo">
                            <?php
                            if ($video) {

                            ?>
                                <video controls width="500">

                                    <source src="./upload/<?= $video['valeur'] ?>">

                                </video>


                                <div class="buttonPourLaVideo mt-5">
                                    <a class="btn btn-danger " href="./video.php?action=deleteVideo">Supprimer</a>
                                    <a href="nouvelleVideo.php?modifierVideo=go"><button type="button" class="btn btn-success"> Modifier</button></a>
                                </div>

                            <?php
                            } else {

                            ?>

                                <a href="nouvelleVideo.php"><button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Nouvelle video</button></a>
                            <?php
                            }
                            ?>


                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>


    </div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="assets/scripts/app-common.js"></script>

    </body>
<?php } else {

    header('location: index.php');
} ?>

</html>