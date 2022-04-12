<?php
session_start();
if (!empty($_SESSION['user'])) {
    require('./assets/componants/header.php');
    require('./assets/componants/function.php');
    require('./assets/componants/menu.php');
    require('./assets/componants/co_bdd.php');

    $user = viewUser($_SESSION['user']['id']);
    $partiAdresse = viewFullUserAdresse($_SESSION['user']['id']);
    $resultats = viewResultatForOneUser($user['id']);
    $contrats = viewContratForOneUser($user['id']);
    $listeDesFactures = viewMyFactures($user['id']);

?>
    <div class="pt-5"></div>
    <style>
        .adresseDashboard {
            box-shadow: -2px 1px 16px 5px rgba(106, 106, 106, 0.1);
            padding: 2rem;
        }
    </style>

    <!-- message d'erreur ou de succés -->
    <?php if (!empty($_GET['success']) && $_GET['success'] == "demander") { ?>
        <div class="alert container alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Votre demande de rendez-vous est envoyer!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php } else if (!empty($_GET['success']) && $_GET['success'] == "AdressAjouter") {  ?>

        <div class="alert container alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Votre adresse a était ajouter</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php } else if (!empty($_GET['success']) && $_GET['success'] == "deleteAdress") { ?>
        <div class="alert container alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Votre adresse a était supprimer</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php } ?>

    <?php if (!empty($_GET['success']) && $_GET['success'] == "email") { ?>
        <div class="alert container alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Demande de réclamation envoyer</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php } else if (!empty($_GET['error']) && $_GET['error'] == "email") {  ?>
        <div class="alert container alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Probléme survenu lors de l'envoi du mail.. veuillez réssayez</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php } else if (!empty($_GET['error']) && $_GET['error'] == "adresseemail") { ?>

        <div class="alert container alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Entrer une adresse email valide</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } else if (!empty($_GET['error']) && $_GET['error'] == "mettreunsujet") { ?>

        <div class="alert container alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Entrer un motif de réclamation</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <div class="titreMonCompte">
        <h1 class="text-center titreMonCompteee">Mon compte</h1>
    </div>
    <div class="pt-5"></div>
    <div class="container mt-5 pt-5">

        <div class="d-flex flex-wrap align-items-start">
            <div class="col-12 col-md-3 align-items-start ">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Mes résultats</button>

                    <button class="nav-link" id="v-pills-home-rdv" data-bs-toggle="pill" data-bs-target="#v-pills-rdv" type="button" role="tab" aria-controls="v-pills-rdv" aria-selected="false">Mes factures</button>

                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Réclamation</button>

                    <button class="nav-link" id="v-pills-home-contrat" data-bs-toggle="pill" data-bs-target="#v-pills-contrat" type="button" role="tab" aria-controls="v-pills-contrat" aria-selected="false">Mes contrats</button>

                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mon adresse</button>

                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Details du compte</button>

                    <button class="nav-link"><a href="./assets/componants/deconnexion.php">Deconnexion </a></button>
                </div>
            </div>
            <style>
                .resultat,
                .rendezVous {
                    box-shadow: -2px 1px 16px 5px rgba(106, 106, 106, 0.1);
                    padding: 2rem;
                    margin-bottom: 1rem;
                }

                .couleur {
                    color: red;
                }

                .couleurVert {
                    color: green;
                }
            </style>
            <div class=" col-12 col-md-8">
                <div class="tab-content" id="v-pills-tabContent">


                    <!-- mes factures -->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <div class="mesresultats">
                            <?php if ($resultats) { ?>
                                <?php foreach ($resultats as $result) { ?>

                                    <div class="resultat mb-3">

                                        N° : <?= htmlspecialchars($result['rid']) ?> <br>
                                        Titre : <?= htmlspecialchars(ucwords($result['name'])) ?> <br>
                                        Date du résultat : <?= htmlspecialchars($result['uploading']) ?> <br>
                                        <div class="button mt-4">
                                            <a href="./admin/upload/<?= htmlspecialchars($result['pdf']) ?>" download> Télécharger </a>
                                            <a href="resultat.php?id=<?= htmlspecialchars($result['rid']) ?>" class="mx-4">Voir </a>
                                        </div>

                                    </div>

                                <?php } ?>
                            <?php } else {
                                echo '<h4> Aucun Résultat </h4>';
                            } ?>
                        </div>

                    </div>

                    <!-- fin mes factures -->

                    <!--mes rendez vous  -->
                    <div class="tab-pane fade show " id="v-pills-rdv" role="tabpanel" aria-labelledby="v-pills-home-rdv">
                        <?php if ($listeDesFactures) {
                            foreach ($listeDesFactures as $listeDesFacture) {
                        ?>
                                <div class="mesRendezVous">
                                    <div class="rendezVous">
                                        <p>Désignation : <?= htmlspecialchars($listeDesFacture['id']);  ?></p>
                                        <p>Statut de la facture : <span class="couleur<?php if (htmlspecialchars($listeDesFacture['etat']) == "2") { ?> couleurVert <?php } ?>"><?php if (htmlspecialchars($listeDesFacture['etat']) == "1") { ?> En attente de paiement <?php } elseif (htmlspecialchars($listeDesFacture['etat']) == "2") {
                                                                                                                                                                                                                                                                            echo 'Payée';
                                                                                                                                                                                                                                                                        } ?></span></p>
                                        <div class="button mt-4">
                                            <a href="./admin/upload/<?= htmlspecialchars($listeDesFacture['facture']) ?>" download> Télécharger </a>
                                        </div>
                                    </div>

                                </div>
                        <?php
                            }
                        } else {
                            echo '<h4> Aucun rendez-vous </h4>';
                        } ?>
                    </div>
                    <!--fin de mes rendez vous  -->



                    <!-- Mes contrats de prestation -->
                    <div class="tab-pane fade show" id="v-pills-contrat" role="tabpanel" aria-labelledby="v-pills-home-contrat">

                        <div class="mesresultats">
                            <?php

                            if ($contrats) {
                            ?>
                                <?php foreach ($contrats as $contrat) { ?>

                                    <div class="resultat mb-3">

                                        Contrat numero : <?= htmlspecialchars($contrat['id']) ?> <br>

                                        Désignation : <?= htmlspecialchars($contrat['name']) ?> <br>
                                        <div class="button mt-4">
                                            <a href="./admin/upload/<?= htmlspecialchars($contrat['contrat']) ?>" download> Télécharger </a>

                                        </div>

                                    </div>

                                <?php } ?>
                            <?php } else {
                                echo '<h4> Aucun Résultat </h4>';
                            } ?>
                        </div>

                    </div>

                    <!-- Fin mes contrats de prestation -->


                    <!--prendre rendez vous  -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <!-- TODO channger le action en ./dashboard/envoiMail.php -->
                        <form action="./mail.php" method="POST">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
                            <h3>Formulaire de réclamation</h3>
                            <label for="company" class=" mt-2">Nom de l'entreprise *</label>
                            <input type="text" name="company" id="company" class="form-control" placeholder="Nom de l'entreprise" required>

                            <label for="email">Email *</label>

                            <input type="mail" name="email" id="email" class="form-control" required>
                            <label for="numeroDeTelephone">Télephone *</label>

                            <input type="number" name="numeroDeTelephone" id="numeroDeTelephone" class="form-control" required>
                            <label for="motif" class="mt-2">Motif de la réclamation *</label>
                            <textarea name="motifrdv" id="motif" class="form-control" placeholder="Motif de la réclamation "></textarea>
                            <input type="submit" class="btn btn-outline-success mt-5">
                        </form>

                    </div>
                    <!-- fin prendre rdv  -->




                    <!-- Mon adresse -->
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="adresseDashboard adresse">
                            <?php if ($partiAdresse) { ?>
                                <h3 class="card-title">Votre adresse</h3>
                                <p><?= $partiAdresse['name'] ?><br>
                                    <?php if ($partiAdresse['company']) {
                                        echo
                                        htmlspecialchars($partiAdresse['company']);
                                    } ?><br>
                                    <?= htmlspecialchars($partiAdresse['adresse']) ?><br>
                                    <?= htmlspecialchars($partiAdresse['city']) ?>, <?= htmlspecialchars($partiAdresse['codepostal']) ?><br>
                                    <?= htmlspecialchars($partiAdresse['phone']) ?><br>
                                    <?= htmlspecialchars($partiAdresse['email']) ?><br>

                                    <a href="#" data-bs-toggle="modal" class="" data-bs-target="[data-bg='<?= htmlspecialchars($partiAdresse['id']) ?>']">Modifier</a>
                                    <a href="./dashboard/deleteAdress.php?id=<?= htmlspecialchars($user['id']) ?>">Supprimer <i class="icon-edit"></i></a>
                                </p>
                            <?php } else { ?>
                                <h5>Vous n'avez pas d'adresse, ajouter une adresse pour commander</h5>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#ajouterNouvelleAdresse">Ajouter une adresse <i class="icon-edit"></i></a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal" data-bg='<?= htmlspecialchars($partiAdresse['id']) ?>' tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content container">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modification de votre adresse : </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="./dashboard/editAdress.php">
                                        <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">

                                        <div class="form-group">
                                            <label for="name">Intitulé de l'adresse </label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Maison, travail.." value="<?= htmlspecialchars($partiAdresse['name']) ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Votre adresse</label>
                                            <input type="text" class="form-control" name="adresse" placeholder="19 rue de la poterie" value="<?= htmlspecialchars($partiAdresse['adresse']) ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Entreprise</label>
                                            <input type="text" class="form-control" name="company" placeholder="e" value="<?= htmlspecialchars($partiAdresse['company']) ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="postal">Code postal</label>
                                            <input type="text" class="form-control" name="postal" id="postal" placeholder="54700" value="<?= htmlspecialchars($partiAdresse['codepostal']) ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">Ville</label><br>
                                            <input type="text" class="form-control" name="city" value="<?= htmlspecialchars($partiAdresse['city']) ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Numéro de téléphone</label>
                                            <input type="number" value="<?= htmlspecialchars($partiAdresse['phone']) ?>" class="form-control" name="phone" id="phone" placeholder="06xxxxxxxx" required>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="ajouterNouvelleAdresse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content container">
                                <div class="modal-header">
                                    <h5 class="modal-title py-2" id="exampleModalLabel">Ajouter une adresse </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="./dashboard/addAdress.php">
                                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                        <div class="form-group">
                                            <label for="name">Intitulé de l'adresse </label>
                                            <input type="text" class="form-control mb-2" id="name" name="name" placeholder="Maison, travail.." required>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Votre adresse</label>
                                            <input type="text" class="form-control mb-2" name="adresse" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">Ville</label><br>
                                            <input type="text" class="form-control mb-2" name="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="postal">Code postal</label>
                                            <input type="text" class="form-control mb-2" name="codepostal" id="postal" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Numéro de téléphone</label>
                                            <input type="number" class="form-control mb-2" name="phone" id="phone" placeholder="06xxxxxxxx" required>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Fin Mon adresse -->


                    <!-- Detail du compte -->
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="container">
                            <h3>Mes informations : </h3>

                            <form method="POST" action="./dashboard/editUserCompte.php?q=info">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">
                                <div class="row mt-4">

                                    <div class="col-sm-6">
                                        <label>Prénom *</label>
                                        <input type="text" name="name" value="<?= htmlspecialchars($user['name']); ?>" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Nom *</label>
                                        <input type="text" name="firstname" value="<?= htmlspecialchars($user['name']); ?>" class="form-control">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Nom de l'entreprise *</label>
                                <input type="text" name="company" value="<?= htmlspecialchars($user['company']); ?>" class="form-control" required>

                                <label>Role dans l'entreprise *</label>
                                <input type="text" name="role" value="<?= htmlspecialchars($user['role']); ?>" class="form-control" required>

                                <label>Email *</label>
                                <input type="email" name="email" value="<?= htmlspecialchars($user['email']); ?>" class="form-control" required>

                                <button type="submit" class="mt-3 btn btn-outline-primary">
                                    <span>Enregistrer</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </form>



                            <h4 class="pt-5">Modifier le mot de passe :</h4>
                            <form method="POST" action="./dashboard/editUserCompte.php?q=password">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">
                                <label>Nouveau mot de passe</label>
                                <input type="password" name="newpassword" class="form-control">

                                <label>Confirmer nouveau mot de passe</label>
                                <input type="password" name="newpassword2" class="form-control mb-2">

                                <button type="submit" class="mt-3 btn btn-outline-primary">
                                    <span>Enregistrer</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>

                            </form>
                            <h4 class="pt-5">Supprimer mon compte (Cette action est irréversible)</h4>
                            <a href="./dashboard/deleteCompte.php?id=<?= htmlspecialchars($user['id']) ?>">
                                <button class="mt-3 btn btn-outline-danger">
                                    <span>Supprimer</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="mb-5"></div>
                    <!-- fin Detail du compte -->
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5"></div>

<?php

    require('./assets/componants/footer.php');
} else {
    header('location: ./404.php');
}
?>