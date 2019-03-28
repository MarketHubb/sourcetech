<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Source_Tech
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="quote-block">
			<h3><a href="https://www.source-tech.net/request-a-quote/" class="button request-quote">Request a Quote</a></h3>
			<p>Top Quality Servers, Networking & Storage Equipment at Great Prices.</p>
		</div>

		<?php 
			if ( is_active_sidebar( 'footer-widgets' ) ) {
				$widget_count = widget_count('footer-widgets');
				?>
					<div class="widget-columns widget-count-<?php echo $widget_count; ?> row info-blocks">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div><!--.widget-columns-->
				<?php
			}
		?>
		<div class="site-info">
			&copy;<?php echo date("Y"); ?> Source Tech Systems. All Rights Reserved. Privacy Policy. Terms of Use.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script>
  window.addEventListener('load',function(){
    jQuery('[class="button request-quote"]').click(function(){
      gtag('event', 'click', {
        'event_category' : 'button',
        'event_label' : window.location.pathname
      });
    })
  });
</script>

<?php wp_footer(); ?>
</body>
</html>
