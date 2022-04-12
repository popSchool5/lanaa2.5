<?php
session_start();

if (!empty($_SESSION)) {
    $page = "contrats";
    require('./src/co_bdd.php');
    require('./src/function.php');

    require('./header.php');
    require('./sidebar.php');
    $contrats = viewContrat();

    // Veriofication pour suppresion du contrat 

    if (!empty($_GET['action']) && !empty($_GET['id']) && ($_GET['action'] == "delete")) {
        deleteContrat($_GET['id']);
        header('location: contrats.php?action=delete');
    }
?>
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
             
                <?php if (!empty($_GET['success']) && isset($_GET) && $_GET['success'] == 'ajouter') { ?>

                    <div class="alert alert-success text-center" role="alert">
                        Contrat ajouter
                    </div>
                <?php } else if (!empty($_GET['action']) && isset($_GET) && $_GET['action'] == 'delete') { ?>
                    <div class="alert alert-danger" role="alert">
                        Contrat supprimer
                    </div>
                <?php } ?>

                <p>
                    <a href="nouveauContrat.php"><button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Nouveau Contrat</button></a>
                </p>
                <div class="panel panel-headline">
                    <div class="panel-heading">

                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Liste des factures</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Entreprise</th>

                                            <th>Email</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        foreach ($contrats as $contrat) {
                                        ?>

                                            <tr>
                                                <td>
                                                    <?= $contrat['id'] ?>


                                                </td>
                                                <td><?= htmlspecialchars($contrat['company']) ?></td>
                                                <td><?= htmlspecialchars($contrat['name']) ?></td>

                                                <td> <a href="./upload/<?= htmlspecialchars($contrat['contrat']) ?>" type="button" class="btn btn-light" download>Télécharger </a> <a type="button" class="btn btn-danger" href="./contrats.php?id=<?= htmlspecialchars($contrat['id']) ?>&action=delete">Supprimer </a></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC TABLE -->
                        <img src="" alt="">
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
<?php } ?>

</html>