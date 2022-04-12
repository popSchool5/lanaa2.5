<?php
session_start();

if (!empty($_SESSION)) {
    $page = "actualites";
    require('./src/co_bdd.php');
    require('./header.php');
    require('./sidebar.php');
    require('./src/function.php');



?>

    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">

            <div class="container-fluid">

                <?php if (!empty($_GET['error']) && isset($_GET) && $_GET['error'] == 'typemimeerror') { ?>

                    <div class="alert alert-danger" role="alert">
                        Veuillez ajouter une image au bon format.
                    </div>
                <?php } else if (!empty($_GET['error']) && isset($_GET) && $_GET['error'] == 'fichiernonrecuperer') { ?>
                    <div class="alert alert-danger" role="alert">
                        Fichier non reconnu.
                    </div>
                <?php } ?>
                <style>
                    .unrdv {
                        box-shadow: -2px 1px 16px 5px rgba(106, 106, 106, 0.1);
                        padding: 2rem;
                    }
                </style>

                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <form action="./actualite/addActuBack.php" method="POST" enctype="multipart/form-data">
                            <div class="">
                                <label for="name">Titre de l'actualitée</label>
                                <input required type="text" id="name" name="name" class="form-control">
                            </div><br>
                            <div class="">
                                <label for="accroche">Phrase d'accroche</label>
                                <input required type="text"  maxlength="250" id="accroche" name="accroche" class="form-control">
                            </div><br>
                            <div>
                                <label for="monactuarea">Déscription</label>

                                <fieldset class="form-group">
                                    <textarea class="form-control" id="monactuarea" name="description" rows="10"></textarea>

                                </fieldset>
                            </div><br>
                            <div>
                                <label for="images">Image</label>
                                <input type="file" name="images" required>
                            </div> <br>
                            <input type="submit" class="btn btn-primary">
                        </form>

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