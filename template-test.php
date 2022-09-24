<?php
/**
* Template Name: Page Test
*/

?>

<?php 
    get_header();
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<link id="themeStylesheet" rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/themes/blue-theme.css">


<main id="test">

    <div id="rjs_cursor" class="rjs-cursor">
        <div class="rjs-cursor-icon"></div>
    </div>
    <!-- section jumbotron -->

    <section id="jumbo" class="section banner" data-spy>
        <div class="section__header">
        </div>

        <div class="section__body">
            <div class="flap">
                <div class="flap__left">
                    <div class="flap__left__heading">
                        <h2 class="g-text section-heading">Bonjour,</h2>
                        <h1 class="g-text-name">
                            <span>J</span>
                            <span>e</span>
                            &nbsp;
                            <span>s</span>
                            <span>u</span>
                            <span>i</span>
                            <span>s</span>
                            &nbsp;
                            <span>T</span>
                            <span>a</span>
                            <span>r</span>
                            <span>i</span>
                            <span>k</span>
                        </h1>
                        <h3 class="g-text">Je suis développeur <i>front-end</i>, passionné d'<i>intégration</i> et
                            prêt à relever de nouveaux challenges !</h3>
                    </div>
                    <div class="flap__left__content">
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
                <div class="flap__right">
                    <div class="flap__right__content">
                        <img src="<?php echo get_template_directory_uri();?>/assets/portrait/portrait-grayscale-one.webp"
                            alt="portrait détouré">
                    </div>
                </div>
            </div>
        </div>
    </section>

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


    <section id="activities" class="activities" data-spy>

        <div class="activities__footer">
            <img data-id="conception" class="active" src="<?php echo get_template_directory_uri();?>/assets/backgrounds/pexels-cottonbro.webp" alt="cottonbro">
            <img data-id="integration" src="<?php echo get_template_directory_uri();?>/assets/backgrounds/responsive-design.webp" alt="responsive design">
            <img data-id="modelisation" src="<?php echo get_template_directory_uri();?>/assets/backgrounds/pexels-rodion-kutsaiev.webp" alt="rodion kutsaiev">
            <img data-id="amelioration" src="<?php echo get_template_directory_uri();?>/assets/backgrounds/pexels-antonio-batinic.webp" alt="antonio batinic">
        </div>

        <div class="activities__header">
            <h2 class="section-heading">expertises</h2>
        </div>
        <div class="activities__body">

            <div class="activities__body__left">
                <ul class="tabs">
                    <li class="active" data-id="conception"><a>conception graphique</a></li>
                    <li data-id="integration"><a>intégration</a></li>
                    <li data-id="modelisation"><a>modélisation 3d</a></li>
                    <li data-id="amelioration"><a>amelioration de code</a></li>
                </ul>
            </div>
            <div class="activities__body__right">
                <div class="tab-content">
                    <div class="skill-card active" data-id="conception">
                        <div class="skill-card__content">
                            <div class="skill-card__content__header">
                                <img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/pexels-cottonbro.webp" alt="pexels cottonbro">
                            </div>
                            <div class="skill-card__content__body">
                                <h3><i class="fa-solid fa-plus"></i>&nbsp;conception graphique</h3><hr/>
                                <p>Tout projet web part d'une maquette. Une <i>maquette</i> de site Web est tout bonnement une représentation graphique simplifiée mais précise de la façon dont notre site Web et ses éléments/parties seront agencées.</p>
                                <p>Un développeur front doit être en mesure de produire ce document en réfléchissant à l'expérience de l'utilisateur mais en veillant également à la propreté et l'esthétique des graphismes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="skill-card" data-id="integration">
                        <div class="skill-card__content">
                            <div class="skill-card__content__header">
                                <img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/responsive-design.webp" alt="responsive design">
                            </div>
                            <div class="skill-card__content__body">
                                <h3><i class="fa-solid fa-plus"></i>&nbsp;intégration</h3><hr/>
                                <p>L'intégration est au coeur de mon métier. Cette activité consiste à trouver des solutions technologiques pour transformer une maquette graphique en site web.</p>
                                <p>Une structure organisée et logique est essentielle pour atteindre notre objectif. Des conventions existent, mais chaque projet a ses spécificités et mérite une analyse minutieuse au préalable. L'idée, c'est de décortiquer la maquette et créer progressivement les composants de l'application, puis les layouts et les pages.</p>
                            </div>
                        </div>
                    </div>
                    <div class="skill-card" data-id="modelisation">
                        <div class="skill-card__content">
                            <div class="skill-card__content__header">
                                <img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/pexels-rodion-kutsaiev.webp" alt="rodion kutsaiev">
                            </div>
                            <div class="skill-card__content__body">
                                <h3><i class="fa-solid fa-plus"></i>&nbsp;modélisation 3d</h3><hr/>
                                <p>Rien de plus gratifiant que de voir un objet 3d prendre vie sous ses yeux au fil de différentes étapes de construction sur <i>Blender</i>. Ce gratuiciel légendaire permet de créer des objets, des scènes et des animations 3d.</p> 
                                <p>À l'issu du processus, on obtient des objets 3d légers, avec peu de facettes, texturés et animés, nos lumières, nos caméras et tout cela constitue une scène 3d. On l'exportera au format gltf afin de pouvoir l'intégrer dans un navigateur grâce à la librairie javaScript <i>Three.js</i>.</p> 
                            </div>
                        </div>
                    </div>
                    <div class="skill-card" data-id="amelioration">
                        <div class="skill-card__content">
                            <div class="skill-card__content__header">
                                <img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/pexels-antonio-batinic.webp" alt="antonio batinic">
                            </div>
                            <div class="skill-card__content__body">
                                <h3><i class="fa-solid fa-plus"></i>&nbsp;Réusinage de code</h3><hr/>
                                <p>Dans la phase qui précède la mise en production d'un site, le développeur procède à des <i>améliorations</i> du code. 
                                Cela consiste à parcourir le projet dans sa totalité, et éliminer les portions de code répétitives et non fonctionnelles. 
                                Selon le principe du <i>DRY</i> (don't repeat yourself) on fera également du <i>code refactoring</i> ou refactorisation, technique par laquelle on obtient le code le plus condensé, concis et efficace possible.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- section carousel cards -->

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
                ?>
                <li class="splide__slide">
                    <div class="project-card">
                        <div class="project-card__header">
                            <?php 
                            the_post_thumbnail();
                            ?>
                        </div>
                        <div class="project-card__body">
                            <h3><?php the_title();?></h3>
                            <!-- <p> -->
                            <?php 
                                // echo $description 
                                ?>
                            <!-- </p> -->

                        </div>
                        <div class="project-card__footer">
                            <?php the_terms( get_the_ID() , 'type-projet', '', '&nbsp;/ ', '' ); ?>
                            <!-- <a href="<?php 
                            // echo the_permalink();
                            ?>" title="<?php 
                            // the_title_attribute();
                            ?>"
                                rel="bookmark">voir le projet</a> -->
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>


    <section id="contact" class="contact-form" data-spy>
        <div class="contact-form__header">
            <h2 class="section-heading">contactez-moi</h2>
        </div>
        <div class="contact-form__body">
            <?php echo do_shortcode('[contact-form-7 id="207" title="Contact me"]');?>
        </div>
    </section>

    <div id="theme-picker" class="theme-picker">
        <div class="theme-picker__heading">
            <h3>Theme picker</h3>
            <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 -1.5299e-07L4.5 8M4.5 8L8 4.93985M4.5 8L0.999998 4.93976" stroke="var(--write)" />
            </svg>
        </div>
        <form action="./" method="post">
            <fieldset id="themeSelect">
                <!-- <legend>Select a theme:</legend> -->

                <div>

                    <label for="dark-theme" class="form-control">
                        <input type="radio" id="" name="themeSelect" value="dark-theme">
                        Dark theme
                    </label>
                </div>

                <div>
                    <label for="purple-theme" class="form-control">
                        <input type="radio" id="" name="themeSelect" value="purple-theme">
                        Purple theme
                    </label>
                </div>
                <div>
                    <label for="blue-theme" class="form-control">
                        <input type="radio" id="" name="themeSelect" value="blue-theme" checked>
                        Grey theme
                    </label>
                </div>
            </fieldset>
        </form>
    </div>


</main>

<?php 

get_footer();

?>

