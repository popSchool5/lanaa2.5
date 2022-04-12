<?php
session_start();

if (!empty($_SESSION)) {
    $page = "contrats";
    require('./src/co_bdd.php');
    require('./src/function.php');

    require('./header.php');
    require('./sidebar.php');
    $users = viewUsers();


?>

    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">

            <div class="container-fluid">

                <style>
                    /* 
                    .alert {

                        border: 1px solid dodgerblue;
                        background: dodgerblue;
                        border-radius: 3px;
                        color: white;

                    } */
                </style>
                <!-- <div class="alert alert-primary" role="alert">
                        Accepter
                </div> -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Votre video </h3>
                            </div>
                            <div class="panel-body">
                                <form action="newVideo.php" method="POST" enctype="multipart/form-data">
                                 
                                    <?php 
                                    if(isset($_GET['modifierVideo']) && !empty($_GET['modifierVideo']) && $_GET['modifierVideo']=="go"){
                                        ?>
                                         <input type="hidden" name="modifierAccorder" value="1"/>
                                         <?php
                                    }
                                    ?>
                                    <input type="file" name="cv" class="form-control">
                                    <br>
                                    <input type="submit">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OVERVIEW -->



            </div>
        </div>

    </div>

    !
    </div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="assets/scripts/app-common.js"></script>


<?php } else {
    header('location: connexion.php ');
} ?>
</body>

</html>