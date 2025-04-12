<footer>
  <section class="footer-widgets">
    <div class="container">
      <div class="row">Footer Widgets</div>
    </div>
  </section>
  <section class="copyright">
    <div class="container">
      <div class="row">
        <div class="copy-right-text col-12 col-md-6">
          <p><?php echo get_theme_mod('set_copyright', 'Copyright X - All Rights Reserved'); ?></p>
        </div>
        <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'fancy_lab_footer_menu',
            'container' => false,
            'menu_class' => 'footer-menu',
          ));
          ?>
        </nav>
      </div>
    </div>
  </section>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>