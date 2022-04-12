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
    <h3 class="titreTelechargements">Nos documents concernant les tarifs</h3>

    <hr>
    <div class="lesTelechargements">
        <div class="telechargement">
            <h4><u>HS code importation</u> </h4>
            <p>Découvrez nos tarifs.</p>

            <a href="./telechargement/nosTarifs/HS_CODE_IMPORTATION.docx" download="HS_CODE_IMPORTATION.docx"><img class="imageDownload" src="./download.gif" alt=""></a>
        </div>





        <div class="telechargement">
            <h4><u>MICROBIOLOGIE</u> </h4>
            <p>Tarifs appliclable en 2021.</p>
            <a href="./telechargement/nosTarifs/TARIFS_APPLICABLES_EN_2021(MICROBIOLOGIE).pdf" download="TARIFS_APPLICABLES_EN_2021(MICROBIOLOGIE).pdf"><img class="imageDownload" src="./download.gif" alt=""></a>
        </div>
        <div class="telechargement">
            <h4><u>Tarif Physico Chimie</u> </h4>
            <p>Tarif Physico Chimie.</p>
            <a href="./telechargement/nosTarifs/TARIFS_PHYSICO_CHIMIE.xlsx" download="TARIFS_PHYSICO_CHIMIE.xlsx"><img class="imageDownload" src="./download.gif" alt=""></a>
        </div>
      
        <!-- <div class="telechargement">
            <h4><u>Tarif microbiologique</u> </h4>
            <p>Tarif microbiologique.</p>
            <a href="./telechargement/nosTarifs/TARIFS_MICROBIOLOGIE.pdf" download="TARIFS_MICROBIOLOGIE.pdf"><img class="imageDownload" src="./download.gif" alt=""></a>
        </div> -->
    </div>
</div>


<?php require('./assets/componants/footer.php'); ?>