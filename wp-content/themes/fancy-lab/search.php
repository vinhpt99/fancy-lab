<?php

/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package Fancy_Lab
 */
get_header();

?>
<div class="content-area">
  <main>
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <h1>Search Results for: <?php echo get_search_query(); ?></h1>
        <?php
        get_search_form();
        if (have_posts()):
          while (have_posts()): the_post();
        ?>
            <?php get_template_part('template-parts/content', 'search'); ?>
        <?php
          endwhile;
          the_posts_pagination(array(
            'prev_text' => __('Previous', 'fancy-lab'),
            'next_text' => __('Next', 'fancy-lab'),
          ));
        else:
          echo '<p>There are no results for your query.</p>';
        endif;
        ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>