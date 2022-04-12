<?php 
 
if(!empty($_SESSION)){

?>
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <style>
                .lnr-rocket {
                    margin-right: 13px;
                }
                .nav{
                    padding-top: 2rem;
                }
            </style>
            <ul class="nav">
               
                <li><a href="./factures.php" class="<?php if ((!empty($page)) && isset($page) && ($page == "factures")) {
                                                        echo 'active ';
                                                    } else {
                                                        echo '';
                                                    } ?>"><i class="lnr lnr-exit"></i><span>Factures</span></a></li>
                <li><a href="./contrats.php" class="<?php if ((!empty($page)) && isset($page) && ($page == "contrats")) {
                                                        echo 'active ';
                                                    } else {
                                                        echo '';
                                                    } ?>"><i class="lnr lnr-exit"></i><span>Contrat</span></a></li>
    
                <li><a href="resultat.php" class="<?php if ((!empty($page)) && isset($page) && ($page == "resultat")) {
                                                        echo 'active ';
                                                    } else {
                                                        echo '';
                                                    } ?>"><i class="lnr lnr-code"></i> <span>Résultat</span></a></li>
                <li><a href="clients.php" class="<?php if ((!empty($page)) && isset($page) && ($page == "clients")) {
                                                        echo 'active ';
                                                    } else {
                                                        echo '';
                                                    } ?>"><i class="lnr lnr-chart-bars"></i> <span>Clients</span></a></li>
                <li><a href="./setting.php" class="<?php if ((!empty($page)) && isset($page) && ($page == "setting")) {
                                                        echo 'active ';
                                                    } else {
                                                        echo '';
                                                    } ?>"><i class="lnr lnr-cog"></i> <span>Parametres</span></a></li>

                <li><a href="./actualite.php" class="<?php if ((!empty($page)) && isset($page) && ($page == "actualites")) {
                                                            echo 'active ';
                                                        } else {
                                                            echo '';
                                                        } ?>"><i class="lnr lnr-exit"></i><span>Actualitées</span></a></li>
                <li><a href="./video.php" class="<?php if ((!empty($page)) && isset($page) && ($page == "video")) {
                                                            echo 'active ';
                                                        } else {
                                                            echo '';
                                                        } ?>"><i class="lnr lnr-exit"></i><span>Vidéo</span></a></li>

                <li><a href="./src/deconnexion.php"><i class="lnr lnr-exit"></i><span>Déconnexion</span></a></li>

            </ul>
        </nav>
    </div>
</div>
 <?php 
 }else{
 
    header('location: index.php'); 
       
   }
 ?>