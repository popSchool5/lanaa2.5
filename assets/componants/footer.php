<style>
    .u-footer .u-image-1 {
    width: 90px;
    height: 80px;
    margin: 40px auto 0;
}

</style>
<footer class="u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-7ebe">
    <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="100" data-image-height="50" title="Logo Lanaa">
            <img src="./images/logo_LanaaSombre2.jpg" class="u-logo-image u-logo-image-1">
        </a>

        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
                        <div class="u-container-layout u-valign-top u-container-layout-1">

                            <div data-position="" class="u-position">

                                <div class="u-block">
                                    <div class="u-block-container u-clearfix">

                                        <h5 class="u-block-header u-text">
                                            Nos horaires
                                        </h5>

                                        <div class="u-block-content u-text">
                                            Du Dimanche au Jeudi de 8h00 à 13h00 et de 14h00 à 17h00
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                        <div class="u-container-layout u-valign-top u-container-layout-2">

                            <div data-position="" class="u-position">

                                <div class="u-block">
                                    <div class="u-block-container u-clearfix">

                                        <h5 class="u-block-header u-text">
                                            Notre adresse

                                        </h5>

                                        <div class="u-block-content u-text">
                                            Port de pêche - Djibouti - Republique de Djibouti

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                        <div class="u-container-layout u-valign-top u-container-layout-3">

                            <div data-position="" class="u-position">

                                <div class="u-block">
                                    <div class="u-block-container u-clearfix">

                                        <h5 class="u-block-header u-text">
                                            Lien du site

                                        </h5>

                                        <div class="u-block-content u-text">
                                            <a href="./tarif.php">Nos tarifs</a> <br>
                                            <a href="telechargement.php">Téléchargement</a> <br>
                                            <a href="emploi.php">Formation</a> <br>
                                            <a href="accreditation.php">Accréditation</a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                        <div class="u-container-layout u-valign-top u-container-layout-4">

                            <div data-position="" class="u-position">

                                <div class="u-block">
                                    <div class="u-block-container u-clearfix">




                                        <div class="u-block-content u-text">
                                            <a href="index.php">Actualités</a> <br>
                                            <?php if (!empty($_SESSION['user']['id'])) { ?>
                                                <a href="dashboard.php">Mon compte</a>

                                            <?php } else { ?>
                                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">M'inscrire/Me connecter</a>

                                            <?php } ?>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .u-social-url-aa {
                visibility: hidden;
            }

            .logoLaboFacebook img {
                width: 60px;

            }

            .logoLaboFacebook {
                display: flex;
                justify-content: center;
                align-items: center;
                
            }
            .copyr{
                text-align: center;
                margin: 2rem;
            }
        </style>
        <div class="">
            <a href="https://www.facebook.com/profile.php?id=100013590126560" class="logoLaboFacebook"><img src="./logo-facebook.png" alt="Facebook du laboratoire Lanaa"></a>

        </div>
        <div class="copyr">
             COPYRIGHT 2022 &copy; LANAA 
        </div>
    </div>
</footer>

</body>
<script src="../js/modal.js"></script>

<script src="./OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="./OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    })
</script>




</html>