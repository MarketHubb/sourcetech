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
			<h3><a href="<?php echo get_permalink(726); ?>" class="button request-quote">Request a Quote</a></h3>
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
  // window.addEventListener('load',function(){
  //   jQuery('[class="button request-quote"]').click(function(){
  //     gtag('event', 'click', {
  //       'event_category' : 'button',
  //       'event_label' : window.location.pathname
  //     });
  //   })
  // });
</script>

<?php wp_footer(); ?>

<!-- Zoho Live Chat widget -->
<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"00c1181641a8e8a370b3731ece5fb9e8aaf8fb161310d62c4552975ade569d50", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>

<!-- Zoho Customizations -->
<script>

$zoho.salesiq.ready=function(embedinfo)

{
   $zoho.salesiq.chatbutton.texts([["Hi! Here to browse, or", "can I get you a quote?"], ["Hi! Here to browse, or", "can I get you a quote?", "Offline"]]);
   $zoho.salesiq.floatwindow.onlinetitle('Live Support');
   $zoho.salesiq.floatwindow.offlinetitle('Live Support');
 //   $zoho.salesiq.floatwindow.fields({"offline":"name,email"});
 //   // Custom placeholder values for offline form
 //   $zoho.salesiq.customfield.add({
	// 	"name":"_default.name",
	// 	"hint":"Name",
	// 	"required":"false"
 //   });
	// $zoho.salesiq.customfield.add({
	// 	"name":"_default.email",
	// 	"hint":"Email",
	// 	"required":"false"
	// });
	// $zoho.salesiq.customfield.add({
	// 	"name":"_default.question",
	// 	"hint":"Email",
	// 	"required":"false"
	// });
}


</script>

</body>
</html>
