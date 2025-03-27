<?php
function fancylab_enqueue_styles()
{
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'fancylab_enqueue_styles');

function fancy_lab_scripts()
{
  wp_enqueue_style('fancy-lab-style', get_stylesheet_uri(), array(), fileatime(get_template_directory()) . 'style.css', 'all');
}
add_action('wp_enqueue_scripts', 'fancy_lab_scripts');
