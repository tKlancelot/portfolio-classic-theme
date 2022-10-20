<?php 

get_header();

?>

<link id="themeStylesheet" rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/themes/blue-theme.css">

<!-- rjs cursor  -->
<?php
    // include(dirname(__FILE__) . '/template-parts/rjs-cursor.php');
?>



<main id="blog">

  <section class="splide">
        <div class="splide__header">
            <h2 class="section-heading">Articles récents</h2>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
              <?php
              // checks if there are any posts that match the query
              if (have_posts()) :
              // If there are posts matching the query then start the loop
              while ( have_posts() ) : the_post();
                // the code between the while loop will be repeated for each post
                ?>
                <div class="splide__slide">
                  <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                  <p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>    
                  <?php the_content(); ?>
                </div>
            
                <?php
                // Stop the loop when all posts are displayed
              endwhile;
              // If no posts were found
              else : ?>
              <p>Sorry no posts matched your criteria.</p>
              <?php
              endif;
              ?>
            </ul>
        </div>
  </section>


</main>  

<?php

get_footer();

?>

<script>
  document.addEventListener('DOMContentLoaded', function () {

    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 3,
        gap: '3.2rem',
        breakpoints: {
            1200:{
                perPage: 2,
                pagination: false
            },
            800: {
                perPage: 1,
                pagination: false,
                padding: '4rem',
                gap:'2rem'
            },
        }
    });

  });
</script>