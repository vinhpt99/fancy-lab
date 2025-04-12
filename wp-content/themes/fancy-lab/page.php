<?php

/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Fancy_Lab
 */

get_header();

?>
<div class="content-area">
  <main>
    <div class="container">
      <div class="row">
        <?php
        if (have_posts()) {
          while (have_posts()): the_post(); ?>
            <article class="col">
              <h1><?php the_title(); ?></h1>
              <div><?php the_content(); ?></div>
            </article>
          <?php
          endwhile;
        } else {
          ?>
          <p>Nothing to display.</p>
        <?php
        }
        ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>