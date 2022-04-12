<?php
session_start();

// TODO liste des adminiustrateur et leurs mot de passe 
if (!empty($_SESSION)) {
    $page = "setting";
    require('./src/co_bdd.php');
    require('./header.php');
    require('./sidebar.php');
    require('./src/function.php');
    $admins = viewFullAdmin();
?>


    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->

                <div class="panel panel-headline">
                    <div class="panel-heading">

                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Liste des administrateurs</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                           
                                            <th>Actif</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <style>
                                            .panel .panel-heading button {
                                                padding: 6px !important;
                                                background-color: green;
                                            }
                                        </style>
                                        <?php foreach ($admins as $admin) { ?>
                                            <tr>
                                                <td><?= $admin['id'] ?></td>
                                                <td><?= $admin['name'] ?></td>
                                                <td><?= $admin['email'] ?></td>
                                                <td><?php if ($admin['tentative'] == 0) { ?> <a class="btn btn-danger" href="debloquerAdmin.php?id=<?= $admin['id'] ?>">Debloquer</a> <?php } else {
                                                                                                                                                                                    echo 'Actif';
                                                                                                                                                                                } ?></td>
                                              
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>



                </div>

            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>


    </div>

    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="../assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="../assets/scripts/app-common.js"></script>

    </body>
<?php }else{
 
 header('location: index.php'); 
    
} ?>

</html>