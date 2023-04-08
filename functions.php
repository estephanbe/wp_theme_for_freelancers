<?php

function theme_support()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_support');

function add_theme_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
