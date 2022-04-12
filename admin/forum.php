<?php
session_start();

if (!empty($_SESSION)) {
    $page = "factures";
    require('./src/co_bdd.php');
    require('./src/function.php');

    require('./header.php');
    require('./sidebar.php');
    $resultats = viewFactures();

?>
    <style>
        .questions {
            display: flex;
            flex-direction: column;


        }

        .question {
            display: flex;
            flex-direction: column;
            border: 1px solid #f9e9e9;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 1rem;
            align-items: center;
            margin: 2rem 0;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
        }

        .question .buttons a {

            padding: 1rem 2rem;
            margin: 1rem;
            border-radius: 5px;
            color: white;
            text-decoration: none;
        }

        .question .buttons {
            margin: 2rem;

        }

        .question .buttons :last-child {
            background-color: #ea0000a1;
            border: 1px solid #ff0000b0;
        }

        .question .buttons :first-child {
            background-color: #45ab19a1;
            border: 1px solid #49c414a1;

        }

        .bb h3 {
            text-align: center;
            text-decoration: underline;
        }
    </style>
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid bb">
                <h3>Nouvelle questions</h3>
                <div class="row questions">
                    <div class="question">
                        <div class="poseurDeQuestion">
                            <h5>Lorem, ipsum.</h5>
                        </div>
                        <div class="questionPoser">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in?
                        </div>
                        <div class="buttons">
                            <a href="">Approuvé</a>
                            <a href="">Refusé</a>
                        </div>
                    </div>
                    <div class="question">
                        <div class="poseurDeQuestion">
                            Lorem, ipsum.
                        </div>
                        <div class="questionPoser">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in?

                        </div>
                        <div class="buttons">
                            <a href="">Approuvé</a>
                            <a href="">Refusé</a>
                        </div>
                    </div>
                    <div class="question">
                        <div class="poseurDeQuestion">
                            Lorem, ipsum.
                        </div>
                        <div class="questionPoser">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in?

                        </div>
                        <div class="buttons">
                            <a href="">Approuvé</a>
                            <a href="">Refusé</a>
                        </div>
                    </div>
                    <div class="question">
                        <div class="poseurDeQuestion">
                            Lorem, ipsum.
                        </div>
                        <div class="questionPoser">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in?

                        </div>
                        <div class="buttons">
                            <a href="">Approuvé</a>
                            <a href="">Refusé</a>
                        </div>
                    </div>
                    <div class="question">
                        <div class="poseurDeQuestion">
                            Lorem, ipsum.
                        </div>
                        <div class="questionPoser">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, in?

                        </div>
                        <div class="buttons">
                            <a href="">Approuvé</a>
                            <a href="">Refusé</a>
                        </div>
                    </div>

                </div>

                <style>
                    .reponsePourLaQuestion {
                        display: flex;
                        flex-direction: column;
                        padding: 25px 55px;
                        background-color: rgb(241, 241, 255);
                        border-top-left-radius: 13px;
                        border-top-right-radius: 13px;
                        box-shadow: rgb(164 164 164 / 13%) 2px 4px 8px 1px;
                    }
                </style>
                <h3>Nouvelle réponses</h3>
                <div class="row reponses">
                    <div class="reponsePourLaQuestion">
                        <div class="ecrivainQuestion">
                            Lorem, ipsum dolor.
                        </div>
                        <div class="questionDeLecrivrain">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ex? Ipsum reiciendis unde earum, dignissimos corporis porro consectetur! Vel aspernatur exercitationem nisi, id fugiat sunt doloribus esse doloremque repellendus ducimus delectus asperiores dolores explicabo, quia nostrum iure ullam. Natus, vero.
                        </div>
                    </div>
                    <div class="reponse">

                        <div class="ecrivainReponse">
                            Lorem ipsum dolor sit.
                        </div>
                        <div class="reponseEcrite">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, recusandae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolore incidunt et quasi ex, dolorum perspiciatis odio sequi labore fugiat, culpa, similique voluptatem aliquid. Doloremque eligendi eveniet amet aspernatur hic.
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
    </div>


    </div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="assets/scripts/app-common.js"></script>

    </body>
<?php } else {

    header('location: index.php');
} ?>

</html>