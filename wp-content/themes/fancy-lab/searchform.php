<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label'); ?>" />
  <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo esc_attr_x('Search', 'submit button'); ?></span></button>
  <?php if (class_exists('WooCommerce')) : ?>
    <input type="hidden" name="post_type" value="product" id="post_type">
  <?php endif; ?>
</form>