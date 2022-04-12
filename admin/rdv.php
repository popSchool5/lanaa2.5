<?php
session_start();

if (!empty($_SESSION)) {
    $page = "rdv";
    require('./src/co_bdd.php');
    require('./header.php');
    require('./sidebar.php');
    require('./src/function.php');

    $rdvs = viewFullRDV();

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
                       margin-bottom: 1rem;
                        
                    }

                    span{
                        padding-bottom: 5px;
                    }
 
                    .enattente {
                        box-shadow: -2px 1px 16px 5px rgba(255, 100, 77, 0.6);
                        padding: 2rem;
                        border: 1px solid red;
                    }
                </style>

                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <div class="rendezvous">
                            <?php foreach ($rdvs as $rdv) { ?>


                                <div class="unrdv   <?php if ($rdv['statut'] == 'Attente') {  ?> enattente <?php } ?>">
                                    <span> Nom de l'entreprise : <?= $rdv['entreprise'] ?> </span><br>
                                    <span>Statut du rendez-vous : <?= $rdv['statut'] ?> </span><br>
                                    <span>Date souhaité : <?= $rdv['date'] ?></span><br>
                                    <span><a href="rdvseul.php?id=<?= $rdv['id'] ?>">Voir le rendez vous </a></span>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Les demandes de rendez-vous</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Entreprise</th>
                                            <th>Email</th>
                                            <th>Nom</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                            <tr>

                                                <td><a href="postPerso.php?id="></a></td>

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                  

                                    </tbody>
                                </table>


                            </div> 
                           
                        </div> -->
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