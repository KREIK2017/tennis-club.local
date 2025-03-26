<?php
// Підключення стилів і скриптів

include(get_theme_file_path('/includes/front/scripts.php'));
include(get_theme_file_path('/includes/front/setup.php'));

add_action('wp_enqueue_scripts', 'tennisclub_enqueue_scripts');
add_action('after_setup_theme','u_setup_theme');