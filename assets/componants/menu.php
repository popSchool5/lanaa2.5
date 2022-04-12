<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300);

    * {
        margin: 0;
        padding: 0;
    }

    a {
        color: #666;
        text-decoration: none;
    }

    a:hover {
        color: #4FDA8C;
    }

    input {
        font: 16px/26px "Raleway", sans-serif;
    }

    body {
        color: #666;
        background-color: #f1f2f2;
        font: 16px/26px "Raleway", sans-serif;
    }

    .form-wrap {
        background-color: #fff;
        width: 100%;

        box-shadow: 0px 1px 8px #BEBEBE;
        -webkit-box-shadow: 0px 1px 8px #BEBEBE;
        -moz-box-shadow: 0px 1px 8px #BEBEBE;
    }

    .form-wrap .tabs {
        overflow: hidden;
    }

    .form-wrap .tabs h3 {
        float: left;
        width: 50%;
    }

    .form-wrap .tabs h3 a {
        padding: 0.5em 0;
        text-align: center;
        font-weight: 400;
        background-color: #e6e7e8;
        display: block;
        color: #666;
    }

    .form-wrap .tabs h3 a.active {
        background-color: #fff;
    }

    .form-wrap .tabs-content {
        padding: 1.5em;
    }

    .form-wrap .tabs-content div[id$="tab-content"] {
        display: none;
    }

    .form-wrap .tabs-content .active {
        display: block !important;
    }

    .form-wrap form .input {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        color: inherit;
        font-family: inherit;
        padding: .8em 0 10px .8em;
        border: 1px solid #CFCFCF;
        outline: 0;
        display: inline-block;
        margin: 0 0 .8em 0;
        padding-right: 2em;
        width: 100%;
    }

    .form-wrap form .button {
        width: 100%;
        padding: .8em 0 10px .8em;
        background-color: #28A55F;
        border: none;
        color: #fff;
        cursor: pointer;
        text-transform: uppercase;
    }

    .form-wrap form .button:hover {
        background-color: #4FDA8C;
    }

    .form-wrap form .checkbox {
        visibility: hidden;
        padding: 20px;
        margin: .5em 0 1.5em;
    }

    .form-wrap form .checkbox:checked+label:after {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: alpha(opacity=100);
        opacity: 1;
    }

    .form-wrap form label[for] {
        position: relative;
        padding-left: 20px;
        cursor: pointer;
    }

    .form-wrap form label[for]:before {
        content: '';
        position: absolute;
        border: 1px solid #CFCFCF;
        width: 17px;
        height: 17px;
        top: 0px;
        left: -14px;
    }

    .form-wrap form label[for]:after {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        filter: alpha(opacity=0);
        opacity: 0;
        content: '';
        position: absolute;
        width: 9px;
        height: 5px;
        background-color: transparent;
        top: 4px;
        left: -10px;
        border: 3px solid #28A55F;
        border-top: none;
        border-right: none;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .form-wrap .help-text {
        margin-top: .6em;
    }

    .form-wrap .help-text p {
        text-align: center;
        font-size: 14px;
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 0rem;
    }

    .u-header .u-image-1 {
    width: 64px;
    height: 65px;
    margin: 6px auto 0 0;
}
</style>

<body data-home-page="index.php" data-home-page-title="Accueil" class="u-body">
    <header class="u-clearfix u-header u-header" id="sec-fe49">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="index.php" class="u-image u-logo u-image-1">
                <img src="images/logoBlancRogner2.jpg" width="50%" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Accueil</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="tarif.php" data-page-id="498426236" style="padding: 10px 20px;">Nos
                                tarifs</a>
                        </li>


                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="telechargement.php" data-page-id="498426236" style="padding: 10px 20px;">Téléchargement</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="emploi.php" data-page-id="498426236" style="padding: 10px 20px;">Formation</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="accreditation.php" data-page-id="498426236" style="padding: 10px 20px;">Accréditation</a>
                        </li>
                        <?php if (!empty($_SESSION['user']['id'])) { ?>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="dashboard.php" style="padding: 10px 20px;">Mon compte</a>
                            </li>
                        <?php } else { ?>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 10px 20px;">M'inscrire/Me connecter</a>
                            </li>
                        <?php } ?>


                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 20px;">Accueil</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="tarif.php" data-page-id="498426236" style="padding: 10px 20px;">Nos tarifs</a>
                                </li>

                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php#carousel_7d68" data-page-id="498426236" style="padding: 10px 20px;">Contact</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="telechargement.php" data-page-id="498426236" style="padding: 10px 20px;">Téléchargement</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="accreditation.php" data-page-id="498426236" style="padding: 10px 20px;">Accréditation</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="emploi.php" data-page-id="498426236" style="padding: 10px 20px;">Emploi</a>
                                </li>
                                <?php if (!empty($_SESSION['user']['id'])) { ?>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="dashboard.php" style="padding: 10px 20px;">Mon compte</a>
                                    </li>
                                <?php } else { ?>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" style="padding: 10px 20px;">M'inscrire/Me connecter</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="form-wrap">
                        <div class="tabs">
                            <h3 class="signup-tab"><a class="active" href="#signup-tab-content">Me connecter</a></h3>
                            <h3 class="login-tab"><a href="#login-tab-content">M'inscrire</a></h3>
                        </div>
                        <!--.tabs-->

                        <div class="tabs-content">
                            <div id="signup-tab-content" class="active">
                                <form class="signup-form" action="./connexion/connexion.php?sess=co" method="post">
                                    <input type="email" name="email" class="input" id="user_email" autocomplete="off" placeholder="Email">

                                    <input type="password" name="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                                    <input type="submit" class="button" value="Se connecter">
                                </form>
                                <!--.login-form-->
                                <div class="help-text">

                                    <!-- <p><a href="#">Forget your password?</a></p> -->
                                </div>

                                <!--.help-text-->
                            </div>
                            <!--.signup-tab-content-->

                            <div id="login-tab-content">
                                <form class="login-form" action="./connexion/connexion.php?sess=insc" method="post">
                                    <input type="email" name="email" class="input" id="user_login" autocomplete="off" placeholder="Email" required>
                                    <input type="text" name="name" class="input" autocomplete="off" placeholder="Votre nom" required>
    
                                    <input type="text" name="company" class="input" id="user_name" autocomplete="off" placeholder="Nom de l'entreprise" >
                                    <input type="text" name="role" class="input" autocomplete="off" placeholder="Votre role dans l'entreprise">
                                    <input type="password" name="password" class="input" id="user_pass" required autocomplete="off" placeholder="Mot de passe (6  caractéres minimum)" minlength="6">
                                    <input type="password" name="secondPassword" class="input" id="user_pass" required autocomplete="off" placeholder="Retaper votre mot de passe">
                                    <input type="checkbox" class="checkbox" id="remember_me">


                                    <input type="submit" class="button" value="S'inscrire">
                                </form>
                                <!--.login-form-->

                                <!--.help-text-->
                            </div>
                            <!--.login-tab-content-->
                        </div>
                        <!--.tabs-content-->
                    </div>
                    <!--.form-wrap-->


                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
        jQuery(document).ready(function($) {
            tab = $('.tabs h3 a');

            tab.on('click', function(event) {
                event.preventDefault();
                tab.removeClass('active');
                $(this).addClass('active');

                tab_content = $(this).attr('href');
                $('div[id$="tab-content"]').removeClass('active');
                $(tab_content).addClass('active');
            });
        });
    </script>