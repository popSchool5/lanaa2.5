<?php
session_start();
require('./assets/componants/header.php');
require('./assets/componants/function.php');
require('./assets/componants/menu.php');
require('./assets/componants/co_bdd.php');
?>

<div class="container">
    <hr>
    <h3 class="titreTelechargements">Forum</h3>

    <hr>


    <style>
        .questions {
            border: 0.5px solid #cfcfcf42;
            display: flex;
            border-radius: 5px;
            flex-direction: column;
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
            margin: 2rem 0;
        }

        .question {
            display: flex;
            justify-content: space-between;
            padding: 1rem;
            border-bottom: 0.5px solid #cfcfcf;
        }

        .dateQuestion {
            border-left: 1px solid grey;
            width: 20%;
            padding-left: 1rem;
            height: 100%;
        }

    
        .questionPoserPremier{
            margin: auto;
        }
        .questionPoser .titre {
            color: red;
          
        }
    </style>
    <div class="questions">
        <div class="question">
            <div class="questionPoser questionPoserPremier">
                <h3 class="titre">Sujets</h3>
            </div>
            <div class="dateQuestion">Date de la question</div>
        </div>
        <div class="question">
            <a href="qc.php" class="questionPoser">
               
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ipsa.
            </a>
                <div class="dateQuestion">05-12-2022</div>
           
        </div>
        <div class="question">
            <a href="" class="questionPoser">
               
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ipsa.
            </a>
                <div class="dateQuestion">05-12-2022</div>
           
        </div>
        <div class="question">
            <a href="" class="questionPoser">
               
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ipsa.
            </a>
                <div class="dateQuestion">05-12-2022</div>
           
        </div>
        <div class="question">
            <a href="" class="questionPoser">
               
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ipsa.
            </a>
                <div class="dateQuestion">05-12-2022</div>
           
        </div>
        <div class="question">
            <a href="" class="questionPoser">
               
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ipsa.
            </a>
                <div class="dateQuestion">05-12-2022</div>
           
        </div>

    </div>


</div>


<?php require('./assets/componants/footer.php'); ?>