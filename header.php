<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php 
        wp_head(); 
      ?>
  </head>

  <!-- <script>
    jQuery(window).on('mousewheel DOMMouseScroll', function(e) {
      var dir,
      amt = 100;
      e.preventDefault();
      if(e.type === 'mousewheel') {
        dir = e.originalEvent.wheelDelta > 0 ? '-=' : '+=';
      }
      else {
        dir = e.originalEvent.detail < 0 ? '-=' : '+=';
      }      

      jQuery('html, body').stop().animate({
        scrollTop: dir + amt
      },500, 'linear');
  })

  </script> -->




  <header id="header"> 

      <nav id="navigation">
        <?php
        if(function_exists('the_custom_logo'))
        {
          the_custom_logo();
        }
        ?>
        <?php
          wp_nav_menu(array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary'
          ))
      ?>
      </nav>

  </header>

  <body>