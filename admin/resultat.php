<?php
session_start();

if (!empty($_SESSION)) {
    $page = "resultat";
    require('./src/co_bdd.php');
    require('./src/function.php');

    require('./header.php');
    require('./sidebar.php');
    $resultats = viewResultat();

?>
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <p>
                    <a href="nouveauResultat.php"><button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Nouveau résultat</button></a>
                </p>
                <div class="panel panel-headline">
                    <div class="panel-heading">

                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Liste des résultat</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Entreprise</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($resultats as $resultat) { ?>

                                            <tr>
                                                <td>
                                                    <?= $resultat['id'] ?>


                                                </td>
                                                <td><?= htmlspecialchars($resultat['company']); ?></td>
                                                <td><?= htmlspecialchars($resultat['name']); ?></td>
                                                <td><?= htmlspecialchars($resultat['email']); ?></td>
                                                <td> <a class="btn btn btn-light" href="./upload/<?= htmlspecialchars($resultat['pdf']); ?>">Voir </a></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC TABLE -->

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
<?php }else{
 
 header('location: index.php'); 
    
} ?>

</html>