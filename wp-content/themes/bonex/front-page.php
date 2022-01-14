<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zeman
 */

get_header();
?>

<main class="ly-content">
            <?php get_template_part( 'template-parts/hp-intro', 'none' ); ?>
            <?php get_template_part( 'template-parts/hp-services', 'none' ); ?>
            <?php get_template_part( 'template-parts/hp-about', 'none' ); ?>
            <?php get_template_part( 'template-parts/hp-projects', 'none' ); ?>
            <?php get_template_part( 'template-parts/hp-contact', 'none' ); ?>
            
        </main>

<?php
get_footer();
