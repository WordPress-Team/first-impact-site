<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of contents of the front-page
 *
 * Template Name: Homepage
 *
 * @package first-impact-site
 */

?>

<?php get_header(); ?>
<?php get_template_part('template-parts/hero-section'); ?>
<?php get_template_part('template-parts/info-section'); ?>
<?php get_template_part('template-parts/resources'); ?>

<?php get_footer(); ?>