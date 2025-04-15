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
      <div class="flex flex-wrap -mx-4">
        <?php
        while (have_posts()): the_post(); ?>
          <?php get_template_part('template-parts/content', 'page'); ?>
        <?php
        endwhile;
        ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>