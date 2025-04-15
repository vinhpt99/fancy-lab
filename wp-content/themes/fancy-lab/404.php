<?php get_header(); ?>
<div class="content-are">
  <main>
    <div class="container">
      <div class="error-404">
        <header>
          <h1>Page not found</h1>
          <p>Unfortunately, the page you are looking for does not exist.</p>
        </header>
        <?php
        the_widget('WP_Widget_Recent_Posts', array(
          'title' => 'Take a look at our latest posts',
          'number' => 3,
        ));
        ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>