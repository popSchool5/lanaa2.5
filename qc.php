<?php
session_start();
require('./assets/componants/header.php');
require('./assets/componants/function.php');
require('./assets/componants/menu.php');
require('./assets/componants/co_bdd.php');
?>

<div class="container">
    <hr>
    <h3 class="titreTelechargements">Titre</h3>

    <hr>

    <style>
        .partiQuestion {
            display: flex;
            flex-direction: column;
            padding: 25px 55px;
            background-color: rgb(241, 241, 255);
            border-top-left-radius: 13px;
            border-top-right-radius: 13px;
            box-shadow: rgb(164 164 164 / 13%) 2px 4px 8px 1px;
        }

        .reponses {
            background-color: rgb(255, 255, 255);
            box-shadow: rgb(164 164 164 / 13%) 2px 4px 8px 1px;
            padding-bottom: 1rem;
            border-radius: 5px;

        }

        .reponse {
            margin-top: 1rem;
            padding: 1rem;
            border-bottom: 1px solid #c2c2c24f;
        }

        .nomDuPerso,
        .reponseEntiere {
            border-bottom: 1px dashed #c2c2c226;
            padding: 0.5rem 0;
        }
    </style>

    <div class="partiQuestion">
        <H5>

            Titre de la question posé. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti laboriosam sapiente consectetur unde nostrum iste optio, harum quo eius, repellat obcaecati! Incidunt culpa architecto vitae optio itaque, cum neque adipisci?

        </H5>

    </div>
    <div class="reponses">
        <div class="reponse">
            <div class="nomDuPerso">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
            <div class="reponseEntiere">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, deserunt?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat nesciunt ratione excepturi temporibus dolore eveniet alias enim quae quidem rerum sunt similique dolorum velit pariatur dolores totam illo quasi eligendi officiis reiciendis maiores animi vitae, numquam cumque. Similique, quisquam repellat.
            </div>
            <div class="dateDeLaReponse">
                04-05-21
            </div>
        </div>
        <div class="reponse">
            <div class="nomDuPerso">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
            <div class="reponseEntiere">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, deserunt?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat nesciunt ratione excepturi temporibus dolore eveniet alias enim quae quidem rerum sunt similique dolorum velit pariatur dolores totam illo quasi eligendi officiis reiciendis maiores animi vitae, numquam cumque. Similique, quisquam repellat.
            </div>
            <div class="dateDeLaReponse">
                04-05-21
            </div>
        </div>
    </div>


</div>


<?php require('./assets/componants/footer.php'); ?>