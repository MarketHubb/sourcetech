<?php
/**
 * Template Name: Used Servers
 */
get_header(); ?>

<h1>Used Servers Template</h1>

<?php
while ( have_posts() ) : the_post();

    the_content();

endwhile; // End of the loop.
?>


<?php get_footer(); ?>
