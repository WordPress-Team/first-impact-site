<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of contents of the about page
 *
 * Template Name: About
 *
 * @package first-impact-site
 */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/hero-section'); ?>
<?php get_template_part('template-parts/mission-statement');?>
<?php get_template_part('template-parts/dev-list') ?>
<? get_template_part('template-parts/contact-section'); ?>

<?php get_footer(); ?>
