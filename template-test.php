<?php
/**
* Template Name: Homepage
*/

?>

<?php 
    get_header();
?>

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css"> -->
<link id="themeStylesheet" rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/themes/blue-theme.css">
<script src="<?php echo get_template_directory_uri();?>/js/script3d.js" defer="true" type="module"></script>

<main id="test">

    <!-- rjs cursor  -->
    <?php
        include(dirname(__FILE__) . '/template-parts/rjs-cursor.php');
    ?>

    <!-- section jumbotron -->

    <section id="jumbo" class="section banner" data-spy>
        <div class="section__header">
            <?php 
            // include __dir__.'/template-parts/svg-curves.php'; 
            ?> 
            <!-- <img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/svg-curves.svg" alt="background svg"> -->
            <!-- <svg id="star-animation" width="791" height="790" viewBox="0 0 791 790" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_i_41_131)">
                    <path d="M1 395L342.354 342.354L395 1.00001M1 395L352.354 352.354L395 1.00001M1 395L362.354 362.354L395 1.00001M1 395L372.354 372.354L395 1.00001M1 395L382.354 382.354L395 1.00001" stroke="white"/>
                    <path d="M1 395.707L342.354 448.354L395 789.707M1 395.707L352.354 438.354L395 789.707M1 395.707L362.354 428.354L395 789.707M1 395.707L372.354 418.354L395 789.707M1 395.707L382.354 408.354L395 789.707" stroke="white"/>
                    <path d="M790.707 395L449.353 342.354L396.707 1.00001M790.707 395L439.353 352.354L396.707 1.00001M790.707 395L429.353 362.354L396.707 1.00001M790.707 395L419.353 372.354L396.707 1.00001M790.707 395L409.353 382.354L396.707 1.00001" stroke="white"/>
                    <path d="M790.707 395.707L449.353 448.354L396.707 789.707M790.707 395.707L439.353 438.354L396.707 789.707M790.707 395.707L429.353 428.354L396.707 789.707M790.707 395.707L419.353 418.354L396.707 789.707M790.707 395.707L409.353 408.354L396.707 789.707" stroke="white"/>
                </g>
                <defs>
                    <filter id="filter0_i_41_131" x="0.923828" y="0.923798" width="789.859" height="788.859" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dx="50" dy="50"/>
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow_41_131"/>
                    </filter>
                </defs>
            </svg> -->
            <svg id="star-animation" width="791" height="790" viewBox="0 0 791 790" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_i_41_131)">
                <path d="M1 395L342.354 342.354L395 1.00001M1 395L352.354 352.354L395 1.00001M1 395L362.354 362.354L395 1.00001M1 395L372.354 372.354L395 1.00001M1 395L382.354 382.354L395 1.00001" stroke="white"/>
                <path d="M1 395.707L342.354 448.354L395 789.707M1 395.707L352.354 438.354L395 789.707M1 395.707L362.354 428.354L395 789.707M1 395.707L372.354 418.354L395 789.707M1 395.707L382.354 408.354L395 789.707" stroke="white"/>
                <path d="M790.707 395L449.353 342.354L396.707 1.00001M790.707 395L439.353 352.354L396.707 1.00001M790.707 395L429.353 362.354L396.707 1.00001M790.707 395L419.353 372.354L396.707 1.00001M790.707 395L409.353 382.354L396.707 1.00001" stroke="white"/>
                <path d="M790.707 395.707L449.353 448.354L396.707 789.707M790.707 395.707L439.353 438.354L396.707 789.707M790.707 395.707L429.353 428.354L396.707 789.707M790.707 395.707L419.353 418.354L396.707 789.707M790.707 395.707L409.353 408.354L396.707 789.707" stroke="white"/>
                </g>
                <defs>
                <filter id="filter0_i_41_131" x="0.923828" y="0.923798" width="789.859" height="788.859" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dx="50" dy="50"/>
                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.572549 0 0 0 0 0.921569 0 0 0 0 1 0 0 0 1 0"/>
                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_41_131"/>
                </filter>
                </defs>
            </svg>
        </div>

        <div class="section__body">
            <div class="flap">
                <div class="flap__left">
                    <div class="flap__left__heading">

                        <!-- greetings widget -->

                        <?php if (is_active_sidebar('greetings')) : ?>
                            <?php dynamic_sidebar('greetings'); ?>
                        <?php endif; ?>
                        
                        <!-- presentation heading widget -->
                        
                        <?php if (is_active_sidebar('presentation-heading')) : ?>
                            <?php dynamic_sidebar('presentation-heading'); ?>
                        <?php endif; ?>

                        <!-- job description widget -->

                        <?php if (is_active_sidebar('job-description')) : ?>
                            <?php dynamic_sidebar('job-description'); ?>
                        <?php endif; ?>

                        <div class="download-frame">
                            <a href="<?php echo get_template_directory_uri();?>/assets/downloads/RESUME-A4.pdf" download="CV-TARIK" class="cta g-text-cta">
                                <span>T</span>
                                <span>é</span>
                                <span>l</span>
                                <span>é</span>
                                <span>c</span>
                                <span>h</span>
                                <span>a</span>
                                <span>r</span>
                                <span>g</span>
                                <span>e</span>
                                <span>r</span>
                                <span>&emsp;</span>
                                <span>C</span>
                                <span>V</span>
                                &emsp;
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 11.3065L12.4999 24M12.4999 24L1 11.3066M12.4999 24L12.4999 0.999999"
                                        stroke="white" stroke-linecap="square" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flap__right">
                    <div class="flap__right__content">
                        <!-- <img src="<?php echo get_template_directory_uri();?>/assets/portrait/portrait-grayscale-one.webp"
                            alt="portrait détouré"> -->
                        <div id="three-container" class="three-container">
                            <div class="three-container__header" style="display:none">
                                <div class="form-group">
                                    <label for="lights">directional light</label>
                                    <input class="custom-slider" type="range" id="lights" name="lights" min="0" max="1" value="0.5" step="0.1">
                                </div>
                                <div class="form-group">
                                    <label for="xPos">dirlight x position</label>
                                    <input class="custom-slider" type="range" id="xPos" name="xPos" min="0" max="1000" value="50" step="10">
                                </div>
                                <div class="form-group">
                                    <label for="zPos">dirlight z position</label>
                                    <input class="custom-slider" type="range" id="zPos" name="zPos" min="0" max="1000" value="50" step="10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section about  -->

    <section id="about" class="large-text-banner" data-spy>
        <div class="large-text-banner__header">
            <h2 class="section-heading">À propos de moi</h2>
            <hr />
        </div>
        <div class="large-text-banner__body">
            <p class="g-text-triggered">Suite à des études de langues à l'université et une expérience de huit ans dans
                le commerce de grande distribution,
                je décide d'entreprendre, il y a maintenant 4 ans de cela, une révolution dans ma carrière. Je découvre
                alors le développement web et
                je me prends de passion pour les nouvelles technologies et en particulier pour l'intégration. J'en ferai
                très rapidement mon métier
                actuel.
            </p>
            <p class="g-text-triggered">Mon objectif : développer des sites beaux et bien construits. Mais ... pas que !
                Rester en veille face à l'évolution rapide des technologies
                du web, afin de proposer des sites et des applications de qualité, durables et dans l'ère du temps !
            </p>
        </div>
        <div class="large-text-banner__footer">
            <div class="large-text-banner__footer__top">
                <span>explorer</span>
            </div>
            <div class="large-text-banner__footer__bottom">
                <div class="frame">
                    <div class="container">
                        <div id="vertical-stroke"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section activities -->

    <section id="activities" class="activities" data-spy>
        <div class="activities__header">
            <h2 class="section-heading">expertises</h2>
        </div>

        <div class="activities__body">
            <div class="grid">
                <div class="grid__row">
                    <div class="item">
                        <div class="item__header">
                            <svg width="72" height="56" viewBox="0 0 72 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.04817 49.4363H20.7757H37.5518H52.2309H67.9585C67.9585 49.4363 68.5572 52.9999 65.2062 52.9999C61.8552 52.9999 12.0282 52.9999 8.19374 52.9999C4.35925 52.9999 5.04817 49.4363 5.04817 49.4363Z" fill="#E3EDF5"/>
                                <path d="M18.125 15.375H14C12.8954 15.375 12 16.2704 12 17.375V41.375C12 42.4796 12.8954 43.375 14 43.375H59C60.1046 43.375 61 42.4796 61 41.375V17.375C61 16.2704 60.1046 15.375 59 15.375H54.875" stroke="#E3EDF5" stroke-width="2"/>
                                <path d="M31.5454 36.6277H40.8581V37.9474C40.8581 38.4997 40.4103 38.9474 39.8581 38.9474H32.5454C31.9931 38.9474 31.5454 38.4997 31.5454 37.9474V36.6277Z" fill="#E3EDF5"/>
                                <path d="M36.2013 20.0243V26.9621M36.2013 19.6162L29.3944 29.1617C29.2854 29.3146 29.2712 29.5156 29.3576 29.6822L31.7566 34.308H40.646L43.045 29.6822C43.1314 29.5156 43.1172 29.3146 43.0082 29.1617L36.2013 19.6162Z" stroke="#E3EDF5" stroke-width="2"/>
                                <rect x="34.75" y="4" width="3.5" height="3.69811" rx="0.5" fill="#E3EDF5"/>
                                <path d="M20.75 19.2925C20.75 19.0163 20.9739 18.7925 21.25 18.7925H23.75C24.0261 18.7925 24.25 19.0163 24.25 19.2925V21.9906C24.25 22.2667 24.0261 22.4906 23.75 22.4906H21.25C20.9739 22.4906 20.75 22.2667 20.75 21.9906V19.2925Z" fill="#E3EDF5"/>
                                <rect x="48.75" y="18.7925" width="3.5" height="3.69811" rx="0.5" fill="#E3EDF5"/>
                                <path d="M20.75 4.5C20.75 4.22386 20.9739 4 21.25 4H23.75C24.0261 4 24.25 4.22386 24.25 4.5V7.19811C24.25 7.47426 24.0261 7.69811 23.75 7.69811H21.25C20.9739 7.69811 20.75 7.47426 20.75 7.19811V4.5Z" fill="#E3EDF5"/>
                                <rect x="48.75" y="4" width="3.5" height="3.69811" rx="0.5" fill="#E3EDF5"/>
                                <path d="M38.25 5.84912H48.9954V6.39759H38.25V5.84912Z" fill="#E3EDF5"/>
                                <path d="M24.25 5.84912H34.9954V6.39759H24.25V5.84912Z" fill="#E3EDF5"/>
                                <path d="M50.5 18.7925C50.5 15.3597 49.025 12.0675 46.3995 9.64015C43.774 7.2128 40.213 5.84912 36.5 5.84912C32.787 5.84912 29.226 7.2128 26.6005 9.64015C23.975 12.0675 22.5 15.3597 22.5 18.7925H23.1371C23.1371 15.5159 24.545 12.3736 27.051 10.0567C29.557 7.73977 32.9559 6.38843 36.5 6.38843C40.0441 6.38843 43.443 7.73977 45.949 10.0567C48.455 12.3736 49.8629 15.5159 49.8629 18.7925H50.5Z" fill="#E3EDF5"/>
                            </svg>
                        </div>
                        <div class="item__body">
                            <div class="item__body__header">
                                <h2>Conception graphique</h2>
                            </div>
                            <div class="item__body__content">
                                <p>Tout projet web part d'une <span>maquette</span>. Une maquette de site Web est tout bonnement une <span>représentation graphique</span> simplifiée mais précise de la façon dont notre site Web et ses éléments/parties seront agencées.</p>   
                                <p>Un développeur front doit être en mesure de produire ce document en réfléchissant à l'expérience de l'utilisateur mais en veillant également à la propreté et l'esthétique des graphismes.</p>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="item__header">
                            <svg width="72" height="56" viewBox="0 0 72 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M53.5158 26.4129L44.8633 22.0805M53.5158 26.4129L44.8633 30.7454M53.5158 26.4129V35.0778M36.2108 52.4076L44.8633 48.0751M36.2108 52.4076L27.5583 48.0751M36.2108 52.4076V43.233M18.9058 26.4129C22.2848 28.1049 27.5583 30.7454 27.5583 30.7454M18.9058 26.4129C22.2848 24.721 27.5583 22.0805 27.5583 22.0805M18.9058 26.4129C18.9058 29.7968 18.9058 35.0778 18.9058 35.0778M36.2108 35.0778L27.5583 30.7454M36.2108 35.0778L44.8633 30.7454M36.2108 35.0778V43.233M27.5583 30.7454L44.8633 22.0805M27.5583 30.7454V48.0751M44.8633 22.0805L36.2108 17.748L27.5583 22.0805M44.8633 30.7454L27.5583 22.0805M44.8633 30.7454V48.0751M44.8633 48.0751L53.5158 43.7427V35.0778M27.5583 48.0751L18.9058 43.7427V35.0778M18.9058 35.0778L36.2108 43.233M36.2108 43.233L53.5158 35.0778" stroke="#E3EDF5" stroke-width="2"/>
                                <rect x="33.7363" y="15.7114" width="4.94445" height="4.60573" rx="2.30286" fill="#22272E" stroke="#E3EDF5"/>
                                <path d="M36.2085 6.66677C37.6813 6.66677 38.8752 5.47286 38.8752 4.0001C38.8752 2.52734 37.6813 1.33344 36.2085 1.33344C34.7357 1.33344 33.5418 2.52734 33.5418 4.0001C33.5418 5.47286 34.7357 6.66677 36.2085 6.66677ZM36.7085 12.4087L36.7085 4.0001L35.7085 4.0001L35.7085 12.4087L36.7085 12.4087Z" fill="#E3EDF5"/>
                                <rect x="-0.700207" y="0.18734" width="4.6923" height="4.8616" rx="2.34615" transform="matrix(-0.522148 0.852855 -0.878265 -0.478174 56.8023 43.4136)" fill="#22272E" stroke="#E3EDF5"/>
                                <path d="M64.172 49.2973C63.403 50.5534 63.8282 52.1425 65.1217 52.8467C66.4151 53.551 68.0871 53.1036 68.8561 51.8476C69.6251 50.5915 69.1999 49.0024 67.9064 48.2982C66.613 47.5939 64.941 48.0413 64.172 49.2973ZM58.5309 46.7946L66.253 50.9989L66.7751 50.146L59.0531 45.9417L58.5309 46.7946Z" fill="#E3EDF5"/>
                                <rect x="0.700207" y="0.18734" width="4.6923" height="4.8616" rx="2.34615" transform="matrix(0.522148 0.852855 0.878265 -0.478174 15.4664 42.2191)" fill="#22272E" stroke="#E3EDF5"/>
                                <path d="M8.82799 49.2973C9.59699 50.5534 9.17181 52.1425 7.87834 52.8467C6.58487 53.551 4.9129 53.1036 4.1439 51.8476C3.37491 50.5915 3.80008 49.0024 5.09355 48.2982C6.38702 47.5939 8.05899 48.0413 8.82799 49.2973ZM14.4691 46.7946L6.74702 50.9989L6.22487 50.146L13.9469 45.9417L14.4691 46.7946Z" fill="#E3EDF5"/>
                            </svg>
                        </div>
                        <div class="item__body">
                            <div class="item__body__header">
                                <h2>Modélisation 3d</h2>
                            </div>
                            <div class="item__body__content">
                                <p>Rien de plus gratifiant que de voir un objet 3d prendre vie sous ses yeux au fil de différentes étapes de construction sur <span>Blender</span>. Ce gratuiciel légendaire permet de créer des objets, des scènes et des animations 3d.</p>   
                                <p>À l'issu du processus, on obtient des objets 3d légers, avec peu de facettes, texturés et animés, nos lumières, nos caméras et tout cela constitue une scène 3d. On l'exportera au format <sapn>gltf</span> afin de pouvoir l'intégrer dans un navigateur grâce à la librairie javaScript <span>Three.js</span>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item__header">
                            <svg width="72" height="56" viewBox="0 0 72 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M62.1875 6H9C7.89543 6 7 6.89543 7 8V49C7 50.1046 7.89543 51 9 51H34.9236H62.1875C63.2921 51 64.1875 50.1046 64.1875 49V8C64.1875 6.89543 63.2921 6 62.1875 6Z" stroke="#E3EDF5" stroke-width="2"/>
                                <path d="M38.3521 26L32.8594 40.0001" stroke="#E3EDF5" stroke-width="2"/>
                                <path d="M44 37L51 32.5L44 28" stroke="#E3EDF5" stroke-width="2"/>
                                <path d="M27 28L20 32.5L27 37" stroke="#E3EDF5" stroke-width="2"/>
                                <path d="M10.1772 10.2146C10.1772 9.66231 10.625 9.2146 11.1772 9.2146H60.0106C60.5629 9.2146 61.0106 9.66231 61.0106 10.2146V20.4646H10.1772V10.2146Z" fill="#E3EDF5"/>
                                <ellipse cx="16.5312" cy="14.8392" rx="2.38281" ry="2.41071" fill="#22272E"/>
                                <ellipse cx="32.417" cy="14.8392" rx="2.38281" ry="2.41071" fill="#22272E"/>
                                <ellipse cx="24.4736" cy="14.8392" rx="2.38281" ry="2.41071" fill="#22272E"/>
                            </svg>
                        </div>
                        <div class="item__body">
                            <div class="item__body__header">
                                <h2>Intégration</h2>
                            </div>
                            <div class="item__body__content">
                                <p>L'intégration est au coeur de mon métier. Cette activité consiste à trouver des <span>solutions technologiques</span> pour transformer une maquette graphique en site web.</p>   
                                <p>Une structure organisée et logique est essentielle pour atteindre notre objectif. Des conventions existent, mais chaque projet a ses spécificités et mérite une analyse minutieuse au préalable. L'idée, c'est de décortiquer la maquette et créer progressivement les <span>composants</span> de l'application, puis les <span>layouts</span> et les <span>pages</span>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item__header">
                            <svg width="72" height="56" viewBox="0 0 72 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.4065 29.6058L21.0661 38.0399L17.322 35.8754L13.5778 37.6697L14.3497 28.6293L9.0474 28.0109V46.9623L28.5784 48.846V30.2811L21.4065 29.6058ZM53.9199 5.42226C54.1213 5.3897 54.3274 5.42226 54.5 5.51176C54.7925 5.61344 54.9986 5.85757 55.0034 6.14644L55.1711 25.6715L63.7478 26.6276C63.9491 26.5951 64.1553 26.6276 64.3279 26.7171C64.6203 26.8188 64.8265 27.0629 64.8312 27.3518L64.999 47.3651C65.0134 47.6091 64.8696 47.8533 64.6059 47.9876L54.9746 52.8617C54.8404 52.9471 54.6678 53 54.4857 53C54.4425 53 54.3946 52.9959 54.3562 52.9919L29.3647 50.6321C29.3024 50.628 29.2448 50.6199 29.1873 50.6077L7.77223 48.2723C7.34075 48.2561 7.00036 47.9509 7.00036 47.5848V27.2298C6.99079 26.9571 7.17291 26.6927 7.48458 26.5788L18.7602 22.3678V8.38826C18.7506 8.11563 18.9328 7.85119 19.2444 7.73726L31.7809 3.05845C31.9104 3.00957 32.059 2.98926 32.2124 3.00551L53.9199 5.42226ZM54.3946 26.9734L46.8582 30.7898L54.3418 31.5994L61.509 27.7668L54.3946 26.9734ZM18.7602 25.6389V23.8732L10.7637 26.8554L15.3516 27.3518L18.7602 25.6389ZM45.468 11.8831V29.8906L52.6639 26.2451L53.5412 25.6145L53.3878 7.64776L45.468 11.8831ZM43.4065 30.3341V11.7082L33.1808 10.5527L32.8308 19.1984L29.0867 17.0339L25.3425 18.8281L26.1143 9.78782L20.3806 9.16532V28.1167L43.4065 30.3341ZM42.1553 5.50363L34.293 9.29144L44.5188 10.3981L51.6859 6.56551L42.1553 5.50363ZM27.1211 8.51026L34.7436 4.67363L32.2315 4.39288L22.5331 8.00988L27.1211 8.51026ZM55.291 33.0844V51.0918L63.369 47.0029L63.2108 28.849L55.291 33.0844ZM53.2296 51.5353V32.9094L43.0038 31.754L42.6538 40.3997L38.9097 38.2352L35.1655 40.0294L35.9373 30.9891L30.6351 30.5497V49.5011L53.2296 51.5353Z" fill="#E3EDF5"/>
                            </svg>
                        </div>
                        <div class="item__body">
                            <div class="item__body__header">
                                <h2>Réusinage de code</h2>
                            </div>
                            <div class="item__body__content">
                                <p>Dans la phase qui précède la mise en production d'un site, le développeur procède à des améliorations du code. Cela consiste à parcourir le projet dans sa totalité, et éliminer les portions de code répétitives et non fonctionnelles. </p>   
                                <p>Selon le principe du <span>DRY</span> (don't repeat yourself) on fera également du <span>code refactoring</span> ou refactorisation, technique par laquelle on obtient le code le plus condensé, concis et efficace possible.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- section autoslide  -->

    <section id="autoslide" class="autoslide">
        <div class="autoslide__body">
            <div class="autoslide__body__top">
                <div class="scrolling-frame">
                    <div class="scrolling-frame__item">
                        <span>intégrateur!</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>freelance</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>rigoureux</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>minutieux</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>front-end</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>html/css/js</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>react</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>wordpress</span>
                    </div>
                </div>
            </div>

            <div class="autoslide__body__bottom">
                <div class="scrolling-frame">
                    <div class="scrolling-frame__item">
                        <span>airtable</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>scrum</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>github</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>figma</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>blender</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>DRY/BEM</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>code refactoring</span>
                    </div>
                    <div class="scrolling-frame__item">
                        <span>trello</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="intersection"></section> -->

    <!-- section carousel projets -->

    <section id="last-projects" class="splide carousel" data-spy>

        <div class="splide__header">
            <h2 class="section-heading">Projets récents</h2>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                <?php 
                    $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 10 ) ); 
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $description = get_field( "courte_description" );
                    $projetUrl = get_field( "url_projet" );
                ?>
                <li class="splide__slide">
                    <a href="<?= $projetUrl;?>" target="_blank">
                        <div class="project-card">
                            <div class="project-card__header">
                                <?php 
                                the_post_thumbnail('post-thumbnail');
                                ?>
                            </div>
                            <div class="project-card__body">
                                <h3><?php the_title();?></h3>
                            </div>
                            <div class="project-card__footer">
                                <?php the_terms( get_the_ID() , 'type-projet', '', '&nbsp;/ ', '' ); ?>
                            </div>

                        </div>
                    </a>

                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>

    <!-- section contact -->

    <section id="contact" class="contact-form" data-spy>
        <div class="contact-form__header">
            <h2 class="section-heading">contactez-moi</h2>
        </div>
        <div class="contact-form__body">
            <?php echo do_shortcode('[contact-form-7 id="207" title="Contact me"]');?>
        </div>
    </section>


    <!-- rjs cursor  -->
    <?php
        // include_once(dirname(__FILE__) . '/template-parts/theme-picker.php');
    ?>


</main>



<?php 

get_footer();

?>

