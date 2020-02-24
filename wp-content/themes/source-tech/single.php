<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Source_Tech
 */
get_header();
?>

<?php
if ($post->post_type == 'servers' || $post->post_type == 'networking') {
    get_template_part('content-product');
} elseif ($post->post_type == 'post') {
    get_template_part('content-post');
}
?>

<?php get_footer(); ?>
