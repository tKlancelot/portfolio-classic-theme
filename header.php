<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link rel="icon" href="<?= get_template_directory_uri() . '/assets/favicon/fav.png' ?>" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.min.js" integrity="sha512-n8IpKWzDnBOcBhRlHirMZOUvEq2bLRMuJGjuVqbzUJwtTsgwOgK5aS0c1JA647XWYfqvXve8k3PtZdzpipFjgg==" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/three@0.126.0/examples/js/loaders/GLTFLoader.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/three@0.126.0/examples/js/controls/OrbitControls.min.js"></script>
      <?php 
        wp_head(); 
      ?>
  </head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-BC966BE3PR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BC966BE3PR');
  </script>


  <header id="header" x-data="{showMenu: false }">
      <nav  class="top-menu">
        <div class="top-menu__left">
          <div class="burger-item">
            <div class="burger-item__body">
              <button x-show="!showMenu" x-on:click="showMenu = true">
                <i class="fa-solid fa-ellipsis"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="top-menu__right">
          <div class="social-menu">
            <div class="social-media__body">
              <a href="https://github.com/tKlancelot" target="_blank"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.instagram.com/tklancelot/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/tarik-louatah-7983481b3/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </nav>
      <div class="menu-content" x-show="showMenu" x-transition x-cloak>
        <div class="menu-content__header">
          <button x-on:click="showMenu = false">
            <i class="fa-regular fa-circle-xmark"></i>
          </button>
        </div>
        <div class="menu-content__body">
          <h2>votre menu <br/>coming soon !</h2>
        </div>
      </div>
      <div class="scrollBar"></div>

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