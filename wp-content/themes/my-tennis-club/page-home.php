<?php
/**
 * Template Name: Tennis Club
 */

?>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>

    <title><?php bloginfo('name'); ?></title>

</head>

<body>

    <?php get_template_part('/patterns/header'); ?>
    <main role="main">

        <?php get_template_part('/patterns/part1'); ?>
        <?php get_template_part('/patterns/part2'); ?>
        <?php get_template_part('/patterns/part3'); ?>
        <?php get_template_part('/patterns/part4'); ?>
        <?php get_template_part('/patterns/part5'); ?>
        <?php get_template_part('/patterns/part6'); ?>
        <?php get_template_part('/patterns/part7'); ?>
        <?php get_template_part('/patterns/part8'); ?>
        <?php get_template_part('/patterns/part9-10'); ?>

    </main>

    <?php get_template_part('/patterns/footer'); ?>
    <?php wp_footer(); ?>
    
</body>

</html>