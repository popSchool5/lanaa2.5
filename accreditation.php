<?php
session_start();
require('./assets/componants/header.php');
require('./assets/componants/function.php');
require('./assets/componants/menu.php');
require('./assets/componants/co_bdd.php');
$actus = viewActualites();
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
    <section class="formation container pt-4 mt-4">

        <div class="telechargement">
            <h4><u>Lanaa accréditation</u> </h4>
            <p>Notre accréditation.</p>
            <a href="./telechargement/nosTarifs/TARIFS_PHYSICO_CHIMIE.xlsx" download="TARIFS_PHYSICO_CHIMIE.xlsx"><img class="imageDownload" src="./download.gif" alt=""></a>
        </div>

    </section>



</div>


<?php require('./assets/componants/footer.php'); ?>