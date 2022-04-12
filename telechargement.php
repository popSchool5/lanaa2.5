<?php
session_start();
require('./assets/componants/header.php');
require('./assets/componants/function.php');
require('./assets/componants/menu.php');
require('./assets/componants/co_bdd.php');
?>
<style>
    @media (max-width: 992px) {
        .liststyletop {
            display: none;
        }
    }

    .telechargement {
        padding: 1rem;
        border: 1px solid #EFF8FB;
        border-radius: 4px;
        margin: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 280px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .lesTelechargements {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 2rem 0 2rem 0;

    }

    .imageDownload {
        width: 30px;
    }

    .titreTelechargements {
        margin-top: 2rem;
        text-align: center;
        margin-bottom: 2rem
    }
</style>

<div class="container">
    <hr>
    <h3 class="titreTelechargements">Nos documents à télécharger</h3>

    <hr>
    <div class="lesTelechargements">
        <div class="telechargement">
            <h4><u>Nos tarifs</u> </h4>
            <p>Découvrez nos tarifs.</p>
            <a href="./telechargement/tariflanaa.docx" download="tariflanaa.docx"><img class="imageDownload" src="./download.gif" alt=""></a>
        </div>
        <div class="telechargement">
            <h4><u>Plan de surveillance</u> </h4>
            <p>Découvrez notre plan de surveillance.</p>
            <a href="./telechargement/LE_PLAN_DE_SURVEILLANCE.docx" download="LE_PLAN_DE_SURVEILLANCE.docx"><img class="imageDownload" src="./download.gif" alt=""></a>
        </div>
        <div class="telechargement">
            <h4><u>Demande d'analyse</u> </h4>
            <p>Bon demande d'analyse MICROBIOLOGIQUE.</p>
            <a href="./telechargement/BON_DEMANDE_D'ANALYSE_MB.pdf" download="BON_DEMANDE_D'ANALYSE_MB.pdf"><img class="imageDownload" src="./download.gif" alt=""></a>
        </div>
        <div class="telechargement">
            <h4><u>Demande d'analyse</u> </h4>
            <p>Bon demande d'analyse PHYSICO-CHIMIE.</p>
            <a href="./telechargement/BON_DEMANDE_DANALYSE_PC.pdf" download="BON_DEMANDE_DANALYSE_PC.pdf"><img class="imageDownload" src="./download.gif" alt=""></a>
        </div>
    </div>
</div>


<?php require('./assets/componants/footer.php'); ?>