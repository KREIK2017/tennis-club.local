<?php
function tennisclub_enqueue_scripts()
{
    //CSS
    wp_register_style('main-style', get_theme_file_uri('/assets/css/all_styles.css'));
    wp_enqueue_style('main-style');
    wp_register_style('head-style', get_theme_file_uri('/assets/css/header.css'));
    wp_enqueue_style('head-style');
    wp_register_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css');
    wp_enqueue_style('swiper-css');

    wp_register_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-css');


    //JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('videos-js', 'https://vjs.zencdn.net/8.16.1/video.min.js', array(), null, true);

    wp_enqueue_script('carousel-js', get_template_directory_uri() . '/assets/js/carousel.js', array(), null, true);
    wp_enqueue_script('cards-js', get_template_directory_uri() . '/assets/js/cards.js', array(), null, true);
    wp_enqueue_script('video-js', get_template_directory_uri() . '/assets/js/video.js', array(), null, true);
}
