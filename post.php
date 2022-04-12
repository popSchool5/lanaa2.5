<?php
session_start();
require('./assets/componants/co_bdd.php');
require('./assets/componants/function.php');
$existeOuPas = verifiePost($_GET['id']);

if (!$existeOuPas) {
    header('location: index.php');
}
require('./assets/componants/header.php');

require('./assets/componants/menu.php');

$lactu = viewOneActu($_GET['id']);

?>
<style>
    img {
        width: 100%;
      max-height: 700px;
    }

    .titre {
        margin: 2rem ;
        text-align: center;

    }
    .description{
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
</style>

<div class="container">


    <div class="image">
        <img src="./admin/upload/actu/<?= htmlspecialchars($lactu['image']) ?>">

    </div>

    <div class="titre">
        <h3> <?= htmlspecialchars($lactu['name']) ?></h3>
    </div>


    <div class="description">
        <?= $lactu['description'] ?>
    </div>
</div>





<?php require('./assets/componants/footer.php');

?>