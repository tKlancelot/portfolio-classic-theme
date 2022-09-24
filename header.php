<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <?php 
        wp_head(); 
      ?>
  </head>


  <header id="header">
      <nav id="social-media" class="social-media">
        <div class="social-media__body">
          <a href="https://www.instagram.com/tklancelot/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/tarik-louatah-7983481b3/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </nav>

      <nav id="navigation">
        <?php
        // if(function_exists('the_custom_logo'))
        // {
        //   the_custom_logo();
        // }
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