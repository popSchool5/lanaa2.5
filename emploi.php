<?php
session_start();
require('./assets/componants/header.php');
require('./assets/componants/function.php');
require('./assets/componants/menu.php');
require('./assets/componants/co_bdd.php');
$actus = viewActualites();
?>

<section class="formationHeader">

</section>
<div class="container">
    <section class="formation container pt-4 mt-4">
        <style>
            li {
                padding-bottom: 1rem;

            }
        </style>
        <h3 style="text-align: center; color:#1c9cdd; ">Des interactions constructives</h3>
        <p>Afin d’acquérir des notions théoriques et pratiques essentielles et indispensables pour tout professionnel concerné, nous vous proposons différentes formations en entreprise ou dans nos locaux.

        </p>
        <p>Ces formations permettront de vous sensibiliser à différentes questions :</p>
        <ul>
            <li>La réglementation dite « Paquet Hygiène »</li>
            <li> Le monde microbien</li>
            <li> L’hygiène du personnel</li>
            <li> Le nettoyage et la désinfection du matériel et des locaux</li>
            <li> La démarche HACCP</li>
            <li> Le plan de maîtrise sanitaire</li>
            <li> Les toxi-infections alimentaires collectives (TIAC)</li>
            <li> Les autocontrôles</li>
            <li> Les critères bactériologiques</li>
            <li> Le Guide des Bonnes Pratiques et d’Application aux Principes de l’HACCP</li>
            <li> L'équilibre alimentaire et nutrition</li>
        </ul>
    </section>
    <style>
        .separator {
            border-bottom: 1px solid #DFF2FF;
            margin: 1rem 0 1rem 0;
        }
    </style>
    <div class="separator"></div>
    <section class="emploi mt-4 pt-5 pb-5">
        <h3 style="text-align: center; color:#1c9cdd; ">En cas d’une intoxication alimentaire</h3>
        <p>Une intoxication alimentaire se produit en cas d’ingestion d’un aliment avarié. Différents germes peuvent être en cause &nbsp;:&nbsp;  salmonelloses, staphylocoques, listéria et toxine botulique.</p>
        <p>Nous vous prions de ramener le produit avec son étiquetage directement au laboratoire afin de procéder aux analyses qui identifieront les raisons et prendre les mesures correctives pour le retirer du marché et/ou de l’étalage. Merci pour votre compréhension.
        </p>
    </section>

</div>


<?php require('./assets/componants/footer.php'); ?>