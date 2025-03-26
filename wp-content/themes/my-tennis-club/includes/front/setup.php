<?php
function u_setup_theme()
{
    add_theme_support('editor-styles');

    add_editor_style([
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css',
        '/assets/css/header.css',
        '/assets/css/footer.css',
        '/assets/css/carousel.css',
        '/assets/css/part2.css',
        '/assets/css/part3.css',
        '/assets/css/part4.css',
        '/assets/css/part5.css',
        '/assets/css/part6.css',
        '/assets/css/part7.css',
        '/assets/css/part8.css',
        '/assets/css/part9.css',
        'https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap',
        'https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&family=Teko:wght@300..700&display=swap',
        'https://fonts.googleapis.com/css2?family=Blinker:wght@100;200;300;400;600;700;800;900&family=Oxanium:wght@200..800&family=Teko:wght@300..700&display=swap',

    ]);
}
?>