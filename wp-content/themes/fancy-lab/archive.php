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
        <div class="col-lg-9 col-md-8 col-12">
          <?php
          the_archive_title('<h1 class="article_title">', '</h1>');
          if (have_posts()):
            while (have_posts()): the_post();
          ?>
              <?php get_template_part('template-parts/content', 'archive'); ?>
          <?php
            endwhile;
            the_posts_pagination(array(
              'prev_text' => __('Previous', 'fancy-lab'),
              'next_text' => __('Next', 'fancy-lab'),
            ));
          else:
            echo '<p>Nothing to display.</p>';
          endif;
          ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>