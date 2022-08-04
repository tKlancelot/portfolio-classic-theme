<?php
/**
 * The template for displaying all single projects
 *
 */

get_header(); 

?>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
        ?>
        <p>custom projet - single-projets.php</p>
        <h1><?php echo the_title();?></h1>
        <p><?php echo the_content();?></p>
        
        <?php
        // Previous/next post navigation.
        // the_post_navigation();

    // End the loop.
    endwhile;
    ?>