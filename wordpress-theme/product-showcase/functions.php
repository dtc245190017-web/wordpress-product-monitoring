<?php
if (!defined('ABSPATH')) exit;
function product_showcase_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('primary' => 'Menu chính'));
}
add_action('after_setup_theme', 'product_showcase_setup');

function product_showcase_styles() {
    wp_enqueue_style('product-showcase-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'product_showcase_styles');
