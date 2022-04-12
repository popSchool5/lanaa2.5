<?php
session_start();

if (!empty($_SESSION)) {
    require('./src/co_bdd.php');
    require('./src/function.php');

    require('./header.php');
    require('./sidebar.php');
   

    if (isset($_GET['search']) && !empty($_GET['search'])) {
        if (!empty($_GET['choix'])) {

            $q = $_GET['search'];

            if ($_GET['choix'] == 'rdv') {
            
                $req = $bdd->prepare('SELECT * FROM rdv WHERE motif OR entreprise LIKE "%" ? "%"');
                $req->execute(array($q));
                $rdvs = $req -> fetchAll(); 

            } elseif ($_GET['choix'] == 'clients') {

                $req = $bdd->prepare('SELECT * FROM users WHERE name OR company or email LIKE "%" ? "%" ');
                $req->execute(array($q));
                $clients = $req -> fetchAll();

            } elseif ($_GET['choix'] == 'resultat') {

                $searchPost = $bdd->prepare('SELECT * FROM result WHERE name OR note LIKE "%" ? "%" ');
                $searchPost->execute(array($q));
            }
        }else{
            header('location: index.php'); 
        }
    }else{
        header('location: index.php'); 
    }


?>


            <div class="main">
                <!-- MAIN CONTENT -->
                <div class="main-content">

                    <div class="container-fluid">
                     


                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Votre recherche : "<?= htmlspecialchars($q) ?>" sur les <?= $_GET['choix'] ?></h3>
                                    </div>

                                    <?php if ($_GET['choix'] == 'rdv') {
                                     
                                    ?>
                                        <?php foreach ($rdvs as $rdv) {
                                            
                                            ?>

                                            <div class="panel text-muted text-center">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><?= $rdv['entreprise'] ?></h3>
                                                    <p>Motif : <?= $rdv['motif']  ?> </p>

                                                </div>

                                            </div>

                                    <?php }
                                    } ?>

                                    <?php if ($_GET['choix'] == 'clients') { ?>

                                        <?php foreach ($clients as $client) { 
                                           ?>

                                            <div class="panel text-muted text-center">
                                                <div class="panel-heading">
                                                    <a href="./entreprisePerso.php?id=<?= htmlspecialchars($client['id']) ?>">
                                                    <h3 class="panel-title"><?= htmlspecialchars($client['name'])?>
                                                     <?= htmlspecialchars($client['company']) ?></h3>
                                                    <p>Email : <?= htmlspecialchars($client['email']) ?> </p>
                                                    </a>
                                                </div>

                                            </div>

                                    <?php }
                                    } ?>




                                    <?php if ($_GET['choix'] == 'client') { ?>
                                        <?php while ($bgEntreprise = $searchEntreprise->fetch()) { ?>

                                            <div class="panel text-center text-muted">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><?= $bgEntreprise['nomEntreprise'] ?></h3>
                                                    <p>Adresse : <?= $bgEntreprise['adresse']  ?> </p>
                                                    <p>Numéro : <?= $bgEntreprise['telephone']  ?> </p>
                                                    <p>Contact : <?= $bgEntreprise['nomRH']  ?> <?= $bgEntreprise['prenomRH'] ?> </p>
                                                    <p>Mail : <?= $bgEntreprise['email'] ?></p>
                                                </div>

                                            </div>

                                    <?php }
                                    } ?>


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