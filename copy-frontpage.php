
<?php 
    get_header();
?>




    <div id="front-page">
        
        <section class="jumbotron">
            <div class="flap">
                <!-- <div id="absolute-box">
                    <svg height="400" width="400">
                        <circle cx="50" cy="300" r="200" stroke="" stroke-width="0" fill="#c2e7bea4"></circle>
                    </svg>
                </div> -->
                <div class="flap__left">
                    <div class="large-heading">
                        <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                            <?php dynamic_sidebar('sidebar-1'); ?>                        
                        <?php } ?>

                    </div>
                </div>
                <div class="flap__right">
                </div>
            </div>
        </section>

        <section id="presentation">

            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                
                <?php the_content(); ?>

            <?php endwhile; endif; ?>

        </section>

        <section class="intersection">

        </section>

    </div>

<?php 

get_footer();

?>