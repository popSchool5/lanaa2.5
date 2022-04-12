<?php
session_start();
require('./assets/componants/header.php');
require('./assets/componants/function.php');
require('./assets/componants/menu.php');
require('./assets/componants/co_bdd.php');
$actus = viewActualites();
$actuExpress = viewActuExpress();

$video = viewVideo();
?>
<style>
  @media (max-width: 992px) {
    .liststyletop {
      display: none;
    }
  }

  /* @media (max-width: 1199px) {
    .u-header .u-logo-image-1 {
    max-width: 64px;
    max-height: 659px !important;
     border: 1px solid black;
    }
  } */
</style>

<!-- message d'erreur ou de succés -->
<?php if (!empty($_GET['success']) && $_GET['success'] == "inscription") { ?>
  <div class="alert container alert-success alert-dismissible fade show text-center" role="alert">
    <strong>Vous etes inscrit veuillez vous connectez</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

<?php } elseif (!empty($_GET['success']) && $_GET['success'] == "co") { ?>

  <div class="alert container alert-success alert-dismissible fade show text-center" role="alert">
    Bienvenu <?= $_SESSION['user']['name'] ?> acceder à <strong> <a href="dashboard.php">votre compte</a> </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php } elseif (!empty($_GET['error']) && $_GET['error'] == "emailexiste") { ?>


  <div class="alert container alert-danger alert-dismissible fade show text-center" role="alert">
    <strong> Cette adresse email existe déja.</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

<?php } elseif (!empty($_GET['error']) && $_GET['error'] == "pasidentitque") {  ?>

  <div class="alert container alert-danger alert-dismissible fade show text-center" role="alert">
    <strong>Les mot de passe ne conviennent pas.</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>



<?php } elseif (!empty($_GET['error']) && $_GET['error'] == "co") {  ?>

  <div class="alert container alert-danger alert-dismissible fade show text-center" role="alert">
    <strong>Probléme lors de la connexion.</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>



<?php }  ?>


<?php
if (!$actus) {
?>
  <style>
    @media (max-width: 575px) {

      .u-section-1 {
        min-height: 350px;
      }
    }

    .u-image-generique {
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
  </style>
<?php
}
?>
<section class="u-clearfix u-white u-section-1" id="carousel_0813">
  <div class="u-expanded-width u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
  <!-- <img src="./images/imageLabo/LABO/_DSC3990.JPG" alt="" class="u-image u-image-default u-image-1"> -->
  <img src="./images/imageFondEcran-2.jfif" alt="" class="u-image u-image-default u-image-generique u-image-1">
  <?php
  if ($actus) {

    $v = 1;
  ?>
    <div id="carousel-ab56" data-interval="5000" data-u-ride="carousel" class="u-carousel u-slider u-slider-1">

      <div class="u-carousel-inner" role="listbox">



        <style>
          .textItalique {
            font-style: italic;
            text-align: justify;
          }
        </style>
        <?php


        foreach ($actuExpress as $a) { ?>
          <div class="<?php if ($v == 1) { ?>u-active <?php };
                                                    $v++; ?> u-carousel-item u-container-style u-expanded-width u-slide u-white u-carousel-item-2">
            <div class="u-container-layout u-valign-top u-container-layout-2">
              <h2 class="u-custom-font u-font-lato u-text u-text-palette-1-base u-text-3"></h2>
              <p class="u-large-text textItalique u-text u-text-variant u-text-4"> <?= $a['accroche'] ?> <br>
                <br>
              </p>
              <a href="./post.php?id=<?= htmlspecialchars($a['id']) ?>" class="u-border-0 u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">Voir
                plus</a>
            </div>
          </div>
        <?php }
        ?>

      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hover-palette-3-base u-palette-1-base u-spacing-9 u-text-body-alt-color u-text-hover-white u-carousel-control-1" href="#carousel-ab56" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175">
            <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
          </svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hover-palette-3-base u-palette-1-base u-spacing-9 u-text-body-alt-color u-text-hover-white u-carousel-control-2" href="#carousel-ab56" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175">
            <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z">
            </path>
          </svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <?php } else
  ?>
</section>

<section class="u-align-center u-clearfix u-palette-4-light-3 u-section-2" id="carousel_05e4" style="background-color: white;">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <h2 class="u-custom-font u-text u-text-default u-text-palette-1-base u-text-1"> Nos prestations</h2>
    <div class="u-expanded-width u-layout-grid u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-align-left u-container-style u-custom-background u-list-item u-palette-4-base u-radius-4 u-repeater-item u-shape-round u-list-item-1">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-icon u-icon-circle u-radius-8 u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-baea"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-baea">
                <g>
                  <path d="m151 421c0-17.284-7.356-32.875-19.09-43.833l.006-.083c1.063-14.686 1.924-30.168 2.578-46.143 30.713 5.786 52.476 17.431 64.796 34.728 15.886 22.302 11.655 48.495 9.98 55.991-5.584 24.991 9.215 50.308 34.285 55.124 14.49 2.783 28.95 4.173 43.314 4.173 50.36 0 100.864-17.212 142.556-51.648 52.459-43.33 82.557-106.497 82.574-173.304.036-126.622-110.09-229.925-225.096-225.796-62.835 2.257-119.305 33.211-158.24 67.283-.498-4.643-1.019-9.164-1.564-13.548-2.856-22.982-6.23-41.2-10.028-54.149-2.614-8.916-8.738-29.795-26.071-29.795s-23.457 20.879-26.071 29.795c-3.798 12.949-7.171 31.167-10.028 54.149-5.74 46.185-8.901 107.289-8.901 172.056 0 42.314 1.412 84.184 4.084 121.083l.006.084c-11.734 10.958-19.09 26.549-19.09 43.833v31c0 16.262-14.196 30-31 30v30h61c49.55 0 90-41.067 90-91zm136.979-360.81c96.651-3.468 194.052 84.771 194.021 195.806-.016 57.831-26.142 112.57-71.679 150.183-45.002 37.17-103.726 52.165-161.106 41.144-8.352-1.604-12.552-10.684-10.666-19.121 3.023-13.532 7.632-48.412-14.823-79.938-17.618-24.735-47.273-40.72-88.256-47.619.348-14.693.527-45.763.527-46.323 5.845 6.811 13.587 11.714 22.444 14.087 24.021 6.437 48.706-7.907 55.114-31.82 6.422-23.968-7.853-48.691-31.82-55.113-18-4.823-35.97 1.971-46.646 15.164-.667-21.309-1.694-41.749-3.054-60.855 33.943-35.861 91.33-73.274 155.944-75.595zm-132.379 160.869c2.146-8.008 10.362-12.753 18.371-10.607 7.989 2.141 12.748 10.382 10.607 18.371-2.141 7.99-10.386 12.748-18.372 10.607-8.007-2.145-12.752-10.361-10.606-18.371zm-72.406-120.617c2.591-24.144 5.363-40.509 7.806-51.524 2.443 11.015 5.215 27.38 7.806 51.524 4.639 43.231 7.194 98.476 7.194 155.558 0 5.01-.021 10.012-.061 15h-29.878c-.04-4.988-.061-9.99-.061-15 0-57.082 2.555-112.327 7.194-155.558zm-6.649 200.548h28.91c-.514 21.183-1.389 41.784-2.604 61.191-3.833-.771-7.795-1.181-11.851-1.181s-8.018.41-11.851 1.181c-1.214-19.407-2.089-40.007-2.604-61.191zm-15.545 151.01v-31c0-16.542 13.458-30 30-30s30 13.458 30 30c0 33.635-26.916 61-60 61h-8.256c5.386-9.041 8.256-19.314 8.256-30z">
                  </path>
                  <path d="m402.673 202.967c17.586-17.585 17.59-46.051 0-63.64-17.544-17.545-46.094-17.546-63.64 0-17.586 17.585-17.59 46.051 0 63.64 17.545 17.545 46.094 17.546 63.64 0zm-42.427-42.426c5.849-5.848 15.364-5.849 21.214 0 5.863 5.863 5.863 15.35 0 21.213-5.851 5.849-15.365 5.848-21.214 0-5.862-5.863-5.863-15.351 0-21.213z">
                  </path>
                  <path d="m266.588 183.556c23.967-6.422 38.243-31.146 31.821-55.113-6.424-23.967-31.148-38.242-55.114-31.82-23.967 6.422-38.242 31.146-31.82 55.114 6.437 24.022 31.087 38.256 55.113 31.819zm-15.528-57.956c8.006-2.145 16.235 2.636 18.372 10.606 2.141 7.989-2.618 16.231-10.607 18.371-8.007 2.145-16.225-2.597-18.371-10.606-2.142-7.989 2.616-16.23 10.606-18.371z">
                  </path>
                  <path d="m273.591 383.559c6.414 23.932 31.112 38.251 55.115 31.819 23.967-6.422 38.241-31.146 31.819-55.113-6.437-24.019-31.082-38.258-55.114-31.82-23.967 6.422-38.242 31.146-31.82 55.114zm39.586-26.137c8.022-2.15 16.23 2.614 18.37 10.606 2.141 7.99-2.617 16.231-10.606 18.372-7.99 2.141-16.23-2.619-18.371-10.606-2.141-7.99 2.617-16.231 10.607-18.372z">
                  </path>
                  <path d="m358.444 275.412c-6.422 23.968 7.853 48.691 31.82 55.114 24.004 6.432 48.671-7.778 55.113-31.82 6.436-24.022-7.794-48.676-31.819-55.113-24.021-6.44-48.675 7.793-55.114 31.819zm57.955 15.529c-2.143 8.006-10.362 12.753-18.37 10.607-7.989-2.141-12.747-10.382-10.606-18.372 2.14-7.991 10.346-12.756 18.37-10.606 7.988 2.14 12.747 10.381 10.606 18.371z">
                  </path>
                </g>
              </svg></span>
            <h4 class="u-custom-font u-text u-text-2 text-shadow-vert">CONTROLE DES IMPORTATIONS DES DENREES ALIMENTAIRES </h4>
            <!-- <p class="u-text u-text-3"> CONTROLE DES IMPORTATIONS DES DENREES ALIMENTAIRES
            </p> -->
          </div>
        </div>
        <div class="u-align-left u-container-style u-list-item u-palette-1-base u-radius-4 u-repeater-item u-shape-round u-video-cover">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-radius-8 u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f1cf"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-f1cf" style="enable-background:new 0 0 512 512;">
                <g>
                  <g>
                    <path d="M255.985,59.99c-8.284,0-15,6.716-15,15s6.716,15,15,15c49.634,0,90.015,40.374,90.015,90c0,8.284,6.716,15,15,15    s15-6.716,15-15C376,113.822,322.162,59.99,255.985,59.99z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M217.335,4.03c-67.77,14.161-122.72,68.585-137.179,136.776c-12.209,57.582,2.836,115.392,41.277,158.607    C140.224,320.536,151,348.419,151,375.99v30c0,19.96,13.067,36.917,31.093,42.79c5.928,35.025,36.328,63.209,73.907,63.209    c37.569,0,67.977-28.175,73.907-63.209C347.933,442.907,361,425.95,361,405.989v-30c0-27.625,10.812-55.173,30.442-77.569    C420.176,265.64,436,223.58,436,179.99C436,66.425,332.051-19.936,217.335,4.03z M256,481.99c-19.282,0-36.188-13.268-42.431-31.1    h84.861C292.188,468.722,275.282,481.99,256,481.99z M331,405.99c0,8.271-6.729,15-15,15H196c-8.271,0-15-6.729-15-15v-15h150    V405.99z M368.882,278.647c-20.92,23.867-33.791,52.647-37.057,82.343H180.178c-3.262-29.712-16.1-58.775-36.328-81.516    c-32.038-36.016-44.557-84.291-34.346-132.445C121.423,90.815,167.223,45.15,223.472,33.397C319.496,13.33,406,85.442,406,179.99    C406,216.302,392.818,251.339,368.882,278.647z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M45,179.99H15c-8.284,0-15,6.716-15,15s6.716,15,15,15h30c8.284,0,15-6.716,15-15S53.284,179.99,45,179.99z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M51.213,104.99L30,83.777c-5.857-5.858-15.355-5.858-21.213,0c-5.858,5.858-5.858,15.355,0,21.213L30,126.203    c5.857,5.858,15.355,5.859,21.213,0C57.071,120.345,57.071,110.848,51.213,104.99z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M51.213,263.777c-5.858-5.858-15.356-5.858-21.213,0L8.787,284.99c-5.858,5.858-5.858,15.355,0,21.213    c5.857,5.858,15.355,5.859,21.213,0l21.213-21.213C57.071,279.132,57.071,269.635,51.213,263.777z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M497,179.99h-30c-8.284,0-15,6.716-15,15s6.716,15,15,15h30c8.284,0,15-6.716,15-15S505.284,179.99,497,179.99z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M503.213,83.777c-5.857-5.858-15.355-5.858-21.213,0l-21.213,21.213c-5.858,5.858-5.858,15.355,0,21.213    c5.857,5.857,15.355,5.858,21.213,0l21.213-21.213C509.071,99.132,509.071,89.635,503.213,83.777z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M503.213,284.99L482,263.777c-5.857-5.858-15.355-5.858-21.213,0c-5.858,5.858-5.858,15.355,0,21.213L482,306.203    c5.857,5.857,15.355,5.858,21.213,0C509.071,300.345,509.071,290.848,503.213,284.99z">
                    </path>
                  </g>
                </g>
              </svg></span>
            <style>
              .text-shad-blue {
                text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px #478ac9;
                font-weight: 400 !important;

              }

              .text-shadow-vert {
                /* text-shadow: 1px 1px 2px black, 0 0 25px #2cccc4, 0 0 5px #2cccc4 !important; */
                text-shadow: 1px 1px 2px #00000082, 0 0 25px #2cccc4, 0 0 5px #2cccc4 !important;
                font-weight: 400 !important;
              }
            </style>
            <h4 class="u-custom-font u-text u-text-4 text-shad-blue">PROGRAMME DE SURVEILLANCE POUR LUTTER CONTRE LES INTOXICATIONS ALIMENTAIRES – BRIGADE MOBILE </h4>
            <!-- <p class="u-text u-text-5">PROGRAMME DE SURVEILLANCE POUR LUTTER CONTRE LES INTOXICATIONS ALIMENTAIRES – BRIGADE MOBILE </p> -->
          </div>
        </div>
        <div class="u-align-left u-container-style u-custom-background u-list-item u-palette-4-base u-radius-4 u-repeater-item u-shape-round u-video-cover">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-radius-8 u-text-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6fa4"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-6fa4">
                <path d="m497 90c8.284 0 15-6.716 15-15v-60c0-8.284-6.716-15-15-15h-60c-8.284 0-15 6.716-15 15v15h-332v-15c0-8.284-6.716-15-15-15h-60c-8.284 0-15 6.716-15 15v60c0 8.284 6.716 15 15 15h15v332h-15c-8.284 0-15 6.716-15 15v60c0 8.284 6.716 15 15 15h60c8.284 0 15-6.716 15-15v-15h332v15c0 8.284 6.716 15 15 15h60c8.284 0 15-6.716 15-15v-60c0-8.284-6.716-15-15-15h-15v-332zm-45-60h30v30h-30zm-422 0h30v30h-30zm30 452h-30v-30h30zm422 0h-30v-30h30zm-30-60h-15c-8.284 0-15 6.716-15 15v15h-332v-15c0-8.284-6.716-15-15-15h-15v-332h15c8.284 0 15-6.716 15-15v-15h332v15c0 8.284 6.716 15 15 15h15z">
                </path>
                <path d="m386.936 346.137-117.573-230.597c-2.562-5.024-7.724-8.187-13.363-8.187s-10.802 3.163-13.363 8.187l-117.573 230.597c-.019.038-.033.077-.051.115-2.655 5.043-4.013 10.337-4.013 15.748 0 46.729 87.455 60 135 60 47.625 0 135-13.297 135-60 0-5.411-1.358-10.705-4.012-15.748-.019-.038-.033-.077-.052-.115zm-130.936-190.761 80.317 157.527c-24.213-7.405-53.276-10.903-80.317-10.903s-56.104 3.498-80.317 10.904zm0 236.624c-52.218 0-105-16.226-105-30 0-.513.203-1.144.602-1.877 6.174-11.342 43.624-28.123 104.398-28.123s98.224 16.781 104.398 28.123c.399.733.602 1.365.602 1.877 0 13.784-52.678 30-105 30z">
                </path>
              </svg></span>
            <h4 class="u-custom-font u-text u-text-6 text-shadow-vert">SURVEILLANCE DE LA QUALITE DES PRODUITS MIS SUR LE MARCHE NATIONAL - ANALYSE AUTOCONTROLE
            </h4>
            <!-- <p class="u-text u-text-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
          </div>
        </div>
        <div class="u-align-left u-container-style u-list-item u-palette-1-base u-radius-4 u-repeater-item u-shape-round u-video-cover">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-icon u-icon-circle u-radius-8 u-text-white u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.002 512.002">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-90ea"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 512.002 512.002" x="0px" y="0px" id="svg-90ea" style="enable-background:new 0 0 512.002 512.002;">
                <g>
                  <g>
                    <path d="M512.001,255.969c-0.011-5.193-2.708-10.011-7.129-12.737l-52.034-32.076l52.089-32.421    c4.393-2.734,7.066-7.539,7.074-12.712c0.008-5.174-2.651-9.987-7.036-12.734l-241-151c-4.871-3.052-11.058-3.052-15.929,0    l-241,151c-4.384,2.747-7.043,7.56-7.036,12.734c0.008,5.174,2.681,9.979,7.074,12.712l51.732,32.198L7.051,243.282    c-4.39,2.744-7.055,7.557-7.05,12.734c0.005,5.177,2.679,9.985,7.074,12.721l51.732,32.198L7.051,333.282    c-4.383,2.74-7.047,7.543-7.05,12.712s2.656,9.975,7.036,12.719l241,151c2.436,1.526,5.2,2.289,7.964,2.289    c2.764,0,5.529-0.763,7.964-2.289l241-151c4.394-2.753,7.055-7.581,7.036-12.766c-0.019-5.185-2.715-9.993-7.129-12.714    l-52.034-32.076l52.089-32.421C509.336,265.992,512.012,261.162,512.001,255.969z M43.32,165.96L256.001,32.703L468.682,165.96    c-2.044,1.272-206.586,128.58-212.681,132.374L43.32,165.96z M468.584,346.106L256.001,479.301L43.278,346.018l43.889-27.431    l160.908,100.15c2.426,1.51,5.176,2.265,7.926,2.265c2.75,0,5.5-0.755,7.926-2.265l160.464-99.874L468.584,346.106z     M256.001,388.334L43.345,255.976l43.822-27.389l160.908,100.15c2.426,1.51,5.176,2.265,7.926,2.265c2.75,0,5.5-0.755,7.926-2.265    l160.464-99.874l44.125,27.2C467.297,256.822,261.631,384.829,256.001,388.334z">
                    </path>
                  </g>
                </g>
              </svg></span>
            <h4 class="u-custom-font u-text u-text-8 text-shad-blue"> FORMATION ET EXPERTISE EN MATIERE HACCP </h4>
            <!-- <p class="u-text u-text-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
          </div>
        </div>

        <!-- <div class="u-align-left u-container-style u-list-item u-palette-1-base u-radius-20 u-repeater-item u-shape-round u-video-cover">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><span class="u-icon u-icon-circle u-radius-8 u-text-white u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.927 511.927">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-88c4"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 511.927 511.927" id="svg-88c4">
                <g>
                  <path d="m496.899.063c-107.348.099-212.523 45.282-288.585 123.979l-27.046 27.046-28.754-28.754-84.879 23.958-67.635 67.634 59.212 59.214-.001.001 3.062 3.061-27.853 57.46 18.359 18.359-44.905 44.906 21.213 21.213 44.905-44.905 21.717 21.719-95.096 95.094 21.213 21.213 95.096-95.095 21.717 21.717-44.907 44.907 21.213 21.213 44.907-44.907 18.359 18.36 57.462-27.853 62.274 62.274 67.629-67.626 24.041-84.809-28.831-28.829 27.045-27.045c37.509-36.154 68.597-80.734 89.905-128.928 40.467-91.521 33.292-165 34.191-174.591zm-413.585 172.975 60.422-17.054 16.317 16.316-79.629 79.628-37.999-38.002zm101.018 268.113-113.607-113.609 14.002-28.884 128.492 128.491zm171.619-72.946-17.108 60.354-40.896 40.894-38-37.999 79.625-79.625zm10.966-86.145-27.343 27.343-.003-.003-100.835 100.836-137.097-137.095c10.108-10.107 91.088-91.086 100.842-100.84 3.156-3.156-10.724 10.725 27.322-27.325 66.815-69.171 157.838-110.413 251.764-114.566-4.149 93.993-45.421 184.971-114.65 251.65z">
                  </path>
                  <path d="m367.495 241.092c26.69-26.69 26.711-70.097.048-96.76-12.895-12.895-30.061-19.997-48.336-19.997-37.725 0-68.393 30.4-68.384 68.355.005 18.283 7.111 35.455 20.01 48.354 26.409 26.407 69.855 26.856 96.662.048zm-48.288-86.757c10.262 0 19.895 3.981 27.123 11.21 14.966 14.967 14.944 39.341-.048 54.334-7.181 7.18-16.792 11.134-27.064 11.134-21.466 0-38.389-17.211-38.395-38.332-.003-10.26 17.372-38.346 38.384-38.346z">
                  </path>
                </g>
              </svg></span>
            <h4 class="u-custom-font u-text u-text-12"> Lorem ipsum dolor sit amet, consectetu<br>
            </h4>
            <p class="u-text u-text-13">Eea​Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor
              sit amet, consectetur adipiscing elit.</p>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>
<style>
  .titreQuiSommeNous {
    font-size: 50px;
    width: 100%;
    text-align: center;
    font-size: 3.75rem;
    font-family: Poppins !important;
    letter-spacing: 1px;
    font-weight: 600;
    margin: 60px auto 0;
  }

  .justify-text {
    text-align: justify !important;
  }
</style>
<section class="u-clearfix u-section-7" id="carousel_8197">
  <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">

    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <h2 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-palette-1-base u-text-1 titreQuiSommeNous">Qui sommes
        nous ?</h2>
      <div class="u-layout">

        <div class="u-layout-row">

          <div class="u-container-style u-layout-cell u-size-40-md u-size-40-sm u-size-40-xs u-size-43-lg u-size-43-xl u-layout-cell-1">
            <div class="u-container-layout u-valign-middle-lg u-container-layout-1">
              <div class="u-expand-resize u-image u-image-circle u-image-1" data-image-width="407" data-image-height="501"></div>
              <div class="u-shape u-shape-svg u-text-custom-color-1 u-shape-1">
                <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9d3d"></use>
                </svg>
                <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-9d3d" style="enable-background:new 0 0 160 160;">
                  <path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path>
                </svg>
              </div>
              <div class="u-expand-resize u-image u-image-circle u-image-2" data-image-width="750" data-image-height="500"></div>
              <div class="u-shape u-shape-svg u-text-palette-1-base u-shape-2">
                <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9d3d"></use>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-9d3d" style="enable-background:new 0 0 160 160;">
                  <path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path>
                </svg>
              </div>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-size-17-lg u-size-17-xl u-size-20-md u-size-20-sm u-size-20-xs u-layout-cell-2">
            <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-2">
              <div class="u-shape u-shape-svg u-text-palette-1-base u-shape-3">
                <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 80">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-50e6"></use>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 160 80" x="0px" y="0px" id="svg-50e6">
                  <path d="M34.9,0H0c0,44.3,35.7,80,80,80s80-35.7,80-80h-34.9c0,25-20.1,45.1-45.1,45.1S34.9,25,34.9,0z">
                  </path>
                </svg>
              </div>
              <h1 class="u-custom-font u-font-playfair-display u-text u-text-palette-1-base u-text-1"><b>Lanaa</b>
                Center
              </h1>
              <p class="u-text u-text-2 justify-text">Le Laboratoire National d’Analyses Alimentaires (LANAA) est un établissement public disposant d’une autonomie tant sur le plan administratif que financier. Crée suite à la loi N° 48/AN/09/6ème L du 19 avril 2009 et placé sous la tutelle du Ministère de l’Agriculture, de l’Eau, de la Pêche de l’Elevage et des Ressources Halieutiques.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="u-align-center u-clearfix u-grey-5 u-section-3" id="carousel_fce8">

  <div class="u-clearfix u-sheet u-sheet-1">
    <style>
      .titreNosMissions {
        padding-top: 1rem !important;
        margin: 1rem;
        text-align: center;

        width: 100%;
        font-weight: 900 !important;
        font-size: 48px !important;
      }
    </style>
    <h2 class="u-custom-font u-text u-text-default u-text-palette-1-base u-text-1 titreNosMissions">Nos missions</h2>
    <div class="u-clearfix u-gutter-50 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
      <div class="u-gutter-0 u-layout">

        <div class="u-layout-row">
          <div class="u-size-30">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
              </div>
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1" data-image-width="407" data-image-height="501">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-valign-bottom-sm u-container-layout-3">
                  <div class="u-align-center u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-group u-white u-group-1">
                    <div class="u-container-layout u-valign-top u-container-layout-4">
                      <!-- <h3 class="u-text u-text-palette-2-base u-text-1"> Medical Center</h3> -->
                      <p class="u-text u-text-2 justify-text">Contrôler toute importation des denrées alimentaires au niveau des ports, aéroport et éventuellement dans toutes les barrières d’importations des territoires.<br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="u-size-30">
            <div class="u-layout-col">
              <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-2" data-image-width="407" data-image-height="501">
                <div class="u-container-layout u-container-layout-5"></div>
              </div>
              <div class="u-align-center-sm u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-5">
                <div class="u-container-layout u-container-layout-6">
                  <div class="u-align-center u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-group u-white u-group-2">
                    <div class="u-container-layout u-valign-top u-container-layout-7">
                      <!-- <h3 class="u-text u-text-palette-2-base u-text-3">Our Doctors</h3> -->
                      <p class="u-text u-text-4 justify-text"> Garantir la qualité des produits agro-alimentaires (restaurants, hôtels, hôpitaux etc.) et enfin surveiller la qualité des produits mis sur les marchés nationales et destinés à la consommation humaine ou animale pour protéger la santé des consommateurs. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-layout-row">
          <div class="u-size-30">

            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
              </div>

              <div id="bgbg" class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-33" data-image-width="407" data-image-height="501">

                <div class="u-container-layout u-container-layout-2"></div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-valign-bottom-sm u-container-layout-3">
                  <div class="u-align-center u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-group u-white u-group-1">
                    <div class="u-container-layout u-valign-top u-container-layout-4">
                      <!-- <h3 class="u-text u-text-palette-2-base u-text-1"> Medical Center</h3> -->
                      <p class="u-text u-text-2 justify-text">Lancer des plans de surveillance visant les produits de la chaîne bioalimentaire du pays afin d’assurer la salubrité des aliments offerts à la consommation sur le territoire Djiboutien.<br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="u-size-30">
            <div class="u-layout-col">
              <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-22" data-image-width="407" data-image-height="501">
                <div class="u-container-layout u-container-layout-5"></div>
              </div>
              <div class="u-align-center-sm u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-5">
                <div class="u-container-layout u-container-layout-6">
                  <div class="u-align-center u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-group u-white u-group-2">
                    <div class="u-container-layout u-valign-top u-container-layout-7">
                      <!-- <h3 class="u-text u-text-palette-2-base u-text-3">Our Doctors</h3> -->
                      <p class="u-text u-text-4 justify-text">Effectuer des programmes de formation, ainsi que des expertises en matière de normes HACCP.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-layout-row">
          <div class="u-size-30">
            <style>
              .u-image-11 {
                min-height: 472px !important;
                background: url("./images/imageLabo/LABO/testimage.jpg") !important;
                background-position: 50% 50% !important;
                background-size: cover !important;

              }

              .u-image-33 {
                min-height: 472px !important;
                background: url("./images/imageLabo/LABO/top/9.jpg") !important;
                background-position: 50% 50% !important;
                background-size: cover !important;
                background-repeat: no-repeat !important;
              }

              .u-image-22 {
                min-height: 472px !important;
                background: url("./images/imageLabo/LABO/image2.JPG") !important;
                background-position: 50% 50% !important;
                background-size: cover !important;
                background-repeat: no-repeat !important;
              }

              @media (max-width: 991px) {

                .u-section-3 .u-image-11,
                .u-section-3 .u-image-33,
                .u-section-3 .u-image-22 {
                  min-height: 387px;
                }

              }


              @media (max-width: 767px) {

                .u-section-3 .u-image-11,
                .u-section-3 .u-image-33,
                .u-section-3 .u-image-22 {
                  min-height: 581px;
                }

              }

              @media (max-width: 575px) {

                .u-section-3 .u-image-11,
                .u-section-3 .u-image-33,
                .u-section-3 .u-image-22 {
                  min-height: 366px;
                }

              }
            </style>
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
              </div>
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-11" data-image-width="407" data-image-height="501">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-valign-bottom-sm u-container-layout-3">
                  <div class="u-align-center u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-group u-white u-group-1">
                    <div class="u-container-layout u-valign-top u-container-layout-4">
                      <!-- <h3 class="u-text u-text-palette-2-base u-text-1"> Medical Center</h3> -->
                      <p class="u-text u-text-2 justify-text">Répondre à toute demande d’expertise scientifique ou technique dans le domaine de l’hygiène alimentaire et de la sécurité sanitaire des aliments.
                        <br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if ($video) { ?>
  <section class="u-align-center u-clearfix u-white u-section-4" id="sec-4908">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-text u-text-default u-text-palette-1-base u-text-1">Notre vidéo</h1>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-gradient u-section-5" id="carousel_bc93">

    <video controls width="80%" height="600px">

      <source src="./admin/upload/<?= $video['valeur'] ?>">

    </video>

  </section>


<?php } else { ?>

  <section class="u-align-center u-clearfix u-white u-section-4" id="sec-4908">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-text u-text-default u-text-palette-1-base u-text-1">Notre vidéo</h1>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-gradient u-section-5" id="carousel_bc93">

    <video controls width="80%" height="600px">

      <source src="./images/lanaaAccreracc.mp4">

    </video>

  </section>


<?php } ?>
<?php if ($actus) { ?>
  <style>
    .u-section-6 .u-metadata-1 {

      min-height: 110px !important;
    }
  </style>
  <section class="u-align-center u-clearfix u-gradient u-section-6" id="carousel_43ef">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h2 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-palette-1-base u-text-1">Nos actualités</h2>

      <div class="u-blog u-expanded-width u-blog-1">
        <div class="owl-carousel owl-theme u-repeater u-repeater-1">
          <?php foreach ($actus as $actu) {
          ?>
            <div class="u-align-center u-blog-post u-container-style u-repeater-item u-video-cover u-repeater-item-1">
              <div class="u-container-layout u-similar-container u-valign-top-sm u-valign-top-xs u-container-layout-1">
                <a class="u-post-header-link" href="./post.php?id=<?= htmlspecialchars($actu['id']) ?>">

                  <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="./admin/upload/actu/<?= htmlspecialchars($actu['image']) ?>">

                </a>

                <h4 class="u-blog-control u-text u-text-3">
                  <a class="u-post-header-link" href="./post.php?id=<?= htmlspecialchars($actu['id']) ?>">
                    <?= htmlspecialchars($actu['name']) ?>

                  </a>
                </h4>

                <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1">


                  <?= htmlspecialchars($actu['accroche']) ?>

                </div>

                <a href="./post.php?id=<?= htmlspecialchars($actu['id']) ?>" class="u-blog-control u-btn u-button-style u-palette-1-base u-btn-1">
                  Lire la suite

                </a>

              </div>
            </div>
          <?php   } ?>



        </div>
      </div>

    </div>
    <style>
      .separator {
        border-bottom: 0.5px solid #EDEDED;

      }
    </style>
    <div class="separator"></div>
  </section>

<?php } ?>


<section class="u-clearfix u-valign-middle-sm u-valign-middle-xs u-section-8" id="carousel_b779">
  <div class="u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
  <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
    <div class="u-gutter-0 u-layout">
      <div class="u-layout-row">
        <div class="u-align-left u-container-style u-image liststyletop u-layout-cell u-left-cell u-size-25 u-size-60-md u-image-1" src="" data-image-width="750" data-image-height="500">
          <div class="u-container-layout u-valign-middle u-container-layout-1" src=""></div>
        </div>
        <div class="u-align-left u-container-style u-layout-cell u-size-16-sm u-size-16-xs u-size-18-lg u-size-18-xl u-size-60-md u-layout-cell-2">
          <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-valign-middle-lg u-valign-middle-xl u-container-layout-2">
            <img src="images/imageLabo/photo_nomadcome/_DSC4636.JPG" alt="" class="u-align-left u-expanded-width u-image u-image-2" data-image-width="750" data-image-height="500">
          </div>
        </div>
        <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-17-lg u-size-17-xl u-size-19-sm u-size-19-xs u-size-60-md u-layout-cell-3">
          <div class="u-container-layout u-container-layout-3">
            <h3 class="u-custom-font u-font-oswald u-text u-text-1">Des interactions constructives</h3>
            <p class="u-text u-text-2">Afin d’acquérir des notions théoriques et pratiques essentielles et indispensables pour tout professionnel concerné, nous vous proposons différentes formations en entreprise ou dans nos locaux.</p>
            <a href="emploi.php" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">vOIR PLUS</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="separator"></div>
<section class="u-align-left u-clearfix current-section u-block-e78f-7" custom-posts-hash="[]" data-style="blank" data-section-properties="{&quot;margin&quot;:&quot;none&quot;,&quot;stretch&quot;:true}" id="carousel_7158" data-id="e78f" data-source="fix" style="">
  <div class="u-clearfix u-sheet u-valign-middle u-block-e78f-2" data-height-lg="596" data-height-md="502" data-height-sm="399" data-height-xs="853" style="min-height: 585px">

    <style>
      .titreMDDG {
        text-align: center;
        font-weight: 700 !important;
        font-size: 3rem !important;
        margin: 60px 0 0 !important;
      }
    </style>
    <h2 class="titreMDDG u-text u-text-palette-1-base u-text-1">Le mot du directeur général </h2>

    <div class="u-clearfix u-expanded-width u-layout-wrap u-block-e78f-10" style="margin-top: 30px; margin-bottom: 30px" data-layout-wrap-id="1" data-block="23" data-block-type="Layout">

      <div class="u-layout">

        <div class="u-layout-row">

          <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-38 ui-draggable ui-droppable u-block-e78f-11" style="min-height: 525px" data-cell-id="1" data-column-id="1" data-block="24">

            <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-md u-valign-top-sm u-valign-top-xs u-block-e78f-12" style="padding-top: 15px; padding-bottom: 15px; padding-left: 30px; padding-right: 30px" data-container-layout-dom="3">
              <p class="u-text u-block-e78f-5" style="font-size: 1.25rem; font-weight: 700; font-style: normal; margin-top: 0; margin-right: 8px; margin-bottom: 0; margin-left: 0" data-block="25" data-block-type="Text"><span style="font-size: 1.125rem;">​</span>
              <h4>"Le LANAA renforce son assise qualité pour mieux assurée la sécurité alimentaire des Djiboutiens "</h4>
              La crise
              sanitaire mondiale a plus que jamais porté le focus de la vox populi sur l’efficacité
              de nos services de santé public et poussée aux paroxysmes l’enjeu de sensibilisation
              des communautés pour prévenir des risques multiples et polymorphes. </p>
              <p class="u-text u-block-e78f-6" style="letter-spacing: 2px; margin-top: 8px; margin-right: 8px; margin-bottom: 0; margin-left: 0" data-block="26" data-block-type="Text">Hassan Kamil Ali</p><a href="motDuDg.php" class="u-border-2 u-border-black u-btn u-btn-rectangle u-button-style u-none u-block-e78f-9" style="background-image: none; border-style: solid; text-transform: uppercase; letter-spacing: 2px; margin-top: 60px; margin-right: auto; margin-bottom: 0; margin-left: 0" data-block="27" data-block-type="Button">lIRE LA SUITE<br></a>
            </div>
          </div>
          <div class="u-container-style u-image u-layout-cell u-right-cell u-size-22 ui-draggable ui-droppable u-block-e78f-13" data-image-width="1080" data-image-height="606" style="min-height: 525px; background-image: url('./images/dgLanaa2.jpg'); background-position: 50% 50%" data-cell-id="2" data-column-id="2" data-block="28" data-block-type="Cell,BackgroundImage">
            <div class="u-container-layout u-block-e78f-14" style="padding-top: 30px; padding-bottom: 30px; padding-left: 30px; padding-right: 30px" data-container-layout-dom="4"></div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <style data-mode="XL" data-visited="true">
    .u-block-e78f-9:hover {
      background-color: blue;
    }

    @media (max-width: 0px) {
      .u-block-e78f-2 {
        min-height: 585px
      }

      .u-block-e78f-10 {
        margin-top: 30px;
        margin-bottom: 30px
      }

      .u-block-e78f-11 {
        min-height: 525px
      }

      .u-block-e78f-12 {
        padding-top: 15px;
        padding-bottom: 15px;
        padding-left: 30px;
        padding-right: 30px
      }

      .u-block-e78f-5 {
        font-size: 1.25rem;
        font-weight: 700;
        font-style: normal;
        margin-top: 0;
        margin-right: 8px;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-6 {
        letter-spacing: 2px;
        margin-top: 8px;
        margin-right: 8px;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-9 {
        background-image: none;
        border-style: solid;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 60px;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-13 {
        min-height: 525px;
        background-image: url("./images/dgLanaa2.jpg");
        background-position: 50% 50%
      }

      .u-block-e78f-14 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-right: 30px
      }
    }
  </style>
  <style data-mode="LG">
    @media (max-width: 0px) {
      .u-block-e78f-2 {
        min-height: 744px
      }

      .u-block-e78f-10 {
        margin-top: 30px;
        margin-bottom: 30px
      }

      .u-block-e78f-11 {
        min-height: 433px
      }

      .u-block-e78f-12 {
        padding-top: 15px;
        padding-bottom: 15px;
        padding-left: 30px;
        padding-right: 30px
      }

      .u-block-e78f-5 {
        font-size: 1.25rem;
        font-weight: 700;
        font-style: normal;
        margin-top: 0;
        margin-right: 0px;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-6 {
        letter-spacing: 2px;
        margin-top: 8px;
        margin-right: 0px;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-9 {
        background-image: none;
        border-style: solid;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 60px;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-13 {
        min-height: 433px;
        background-image: url("./images/dgLanaa2.jpg");
        background-position: 50% 50%
      }

      .u-block-e78f-14 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-right: 30px
      }
    }
  </style>
  <style data-mode="MD">
    @media (max-width: 0px) {
      .u-block-e78f-2 {
        min-height: 513px
      }

      .u-block-e78f-10 {
        margin-top: 30px;
        margin-bottom: 30px
      }

      .u-block-e78f-11 {
        min-height: 453px
      }

      .u-block-e78f-12 {
        padding-top: 15px;
        padding-bottom: 15px;
        padding-left: 30px;
        padding-right: 30px
      }

      .u-block-e78f-5 {
        font-size: 1.875rem;
        font-weight: 700;
        font-style: normal;
        margin-top: 0;
        margin-bottom: 0;
        margin-left: 0;
        margin-right: 0px
      }

      .u-block-e78f-6 {
        letter-spacing: 2px;
        margin-top: 8px;
        margin-left: 0;
        margin-right: 0px;
        margin-bottom: 0
      }

      .u-block-e78f-9 {
        background-image: none;
        border-style: solid;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 60px;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-13 {
        min-height: 453px;
        background-image: url("./images/dgLanaa2.jpg");
        background-position: 50% 50%
      }

      .u-block-e78f-14 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-right: 30px
      }
    }
  </style>
  <style data-mode="SM">
    @media (max-width: 0px) {
      .u-block-e78f-2 {
        min-height: 1095px
      }

      .u-block-e78f-10 {
        margin-top: 30px;
        margin-bottom: 30px
      }

      .u-block-e78f-11 {
        min-height: 100px
      }

      .u-block-e78f-12 {
        padding-top: 15px;
        padding-bottom: 15px;
        padding-left: 10px;
        padding-right: 10px
      }

      .u-block-e78f-5 {
        font-size: 1.875rem;
        font-weight: 700;
        font-style: normal;
        margin-top: 0;
        margin-right: 0px;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-6 {
        letter-spacing: 2px;
        margin-top: 8px;
        margin-right: 0px;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-9 {
        background-image: none;
        border-style: solid;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 60px;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-13 {
        min-height: 927px;
        background-image: url("./images/dgLanaa2.jpg");
        background-position: 50% 50%
      }

      .u-block-e78f-14 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 10px;
        padding-right: 10px
      }
    }
  </style>
  <style data-mode="XS">
    @media (max-width: 0px) {
      .u-block-e78f-2 {
        min-height: 838px
      }

      .u-block-e78f-10 {
        margin-top: 30px;
        margin-bottom: 30px
      }

      .u-block-e78f-11 {
        min-height: 100px
      }

      .u-block-e78f-12 {
        padding-top: 15px;
        padding-bottom: 15px;
        padding-left: 10px;
        padding-right: 10px
      }

      .u-block-e78f-5 {
        font-size: 1.875rem;
        font-weight: 700;
        font-style: normal;
        margin-top: 0;
        margin-right: 0px;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-6 {
        letter-spacing: 2px;
        margin-top: 8px;
        margin-right: 0px;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-9 {
        background-image: none;
        border-style: solid;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 60px;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0
      }

      .u-block-e78f-13 {
        min-height: 584px;
        background-image: url("./images/dgLanaa2.jpg");
        background-position: 50% 50%
      }

      .u-block-e78f-14 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 10px;
        padding-right: 10px
      }
    }

    .mettreenflex {
      display: flex;
      flex-direction: column;
    }
  </style>
</section>
<div class="separator"></div>
<section class="u-align-center u-clearfix u-gradient u-section-9" id="carousel_7d68">
  <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
    <h2 class="u-text u-text-palette-1-base u-text-1">Contact </h2>
    <p class="u-text u-text-2">
      <span style="font-weight: 700;">Dans le cas où vous souhaitez prélever vos échantillons, contactez le laboratoire au préalable afin qu'il vous indique le ou les protocole(s) à suivre </span>
    </p>
    <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
      <div class="u-repeater mettreenflex  u-repeater-1">

        <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-2">
          <div class="u-container-layout u-similar-container u-valign-middle-sm u-valign-top-lg u-valign-top-md u-valign-top-xl u-valign-top-xs u-container-layout-2">
            <span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 513.64 513.64">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9786"></use>
              </svg>
              <svg class="u-svg-content" viewBox="0 0 513.64 513.64" x="0px" y="0px" id="svg-9786" style="enable-background:new 0 0 513.64 513.64;">
                <g>
                  <g>
                    <path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72    c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68    c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44    l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z">
                    </path>
                  </g>
                </g>
              </svg></span>
            <h5 class="u-align-center u-text u-text-5">APPELEZ NOUS</h5>
            <p class="u-align-center u-text u-text-6"><a href="tel:+21 35 80 67">21 35 80 67 </a> <br>
            </p>
          </div>
        </div>

        <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-4">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9f82"></use>
              </svg>
              <svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-9f82" style="enable-background:new 0 0 512 512;">
                <g>
                  <g>
                    <path d="M507.49,101.721L352.211,256L507.49,410.279c2.807-5.867,4.51-12.353,4.51-19.279V121    C512,114.073,510.297,107.588,507.49,101.721z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M467,76H45c-6.927,0-13.412,1.703-19.279,4.51l198.463,197.463c17.548,17.548,46.084,17.548,63.632,0L486.279,80.51    C480.412,77.703,473.927,76,467,76z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M4.51,101.721C1.703,107.588,0,114.073,0,121v270c0,6.927,1.703,13.413,4.51,19.279L159.789,256L4.51,101.721z">
                    </path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M331,277.211l-21.973,21.973c-29.239,29.239-76.816,29.239-106.055,0L181,277.211L25.721,431.49    C31.588,434.297,38.073,436,45,436h422c6.927,0,13.412-1.703,19.279-4.51L331,277.211z">
                    </path>
                  </g>
                </g>
              </svg></span>
            <h5 class="u-align-center u-text u-text-9">Email</h5>
            <p class="u-align-center u-text u-text-10"><a href="mailto:Service-reclamation-lanaa@gmail.com"> Service-reclamation-lanaa@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.3969021136627!2d43.13142401480829!3d11.59502649176923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x162301271d94e50f%3A0x3821e0271b6b8072!2sLANAA!5e0!3m2!1sfr!2sfr!4v1641849112622!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<?php require('./assets/componants/footer.php'); ?>