<?php
if (!defined('ABSPATH')) exit;
get_header();
if (have_posts()) :
  while (have_posts()) : the_post();
    echo '<main class="container section"><article>';
    the_title('<h1>', '</h1>');
    the_content();
    echo '</article></main>';
  endwhile;
endif;
get_footer();
