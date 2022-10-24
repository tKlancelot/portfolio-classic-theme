  <footer id="footer" class="footer">
    <div class="footer__header">
      <div class="frame">
        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.7378 15.7377L6.7378 0.737672M6.7378 0.737672L0.737796 6.47545M6.7378 0.737672L12.7378 6.47562"
            stroke="white" />
        </svg>
      </div>
    </div>
    <div class="footer__body">
      <div class="footer__body__top">
        <?php 
            include __dir__.'/template-parts/social-media.php'; 
        ?> 
      </div>
      <hr/>
      <div class="footer__body__bottom">
        <p>© Tarik Louatah 2022 - Tous droits réservés</p>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  </body>


  </html>

  <script>
    const handleFooterArrow = () => {
      let handler = document.querySelector('#footer .frame');
      handler.addEventListener('click', function () {
        window.scrollTo({
          top: 0,
          left: 0,
          behavior: 'smooth'
        });
      });
    }

    document.addEventListener('DOMContentLoaded', function () {
      handleFooterArrow();
    });
  </script>