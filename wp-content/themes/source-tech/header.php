<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Source_Tech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	
	<?php if ( is_page(1574) || is_singular('servers') || is_singular('networking') || is_singular('post') ) { ?>
		<link rel="stylesheet" id="bootstrap-styles-css"  href="<?php echo get_stylesheet_directory_uri() . '/css/bootstrap.min.css?ver=5.2.3'; ?>" type="text/css" media="all" />
	<?php } ?>

	<?php wp_head(); ?>


    <?php if (is_singular('servers')) { ?>
    <!-- Hotjar Tracking Code for Source-tech.net -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1663225,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <?php } ?>

    <!-- ahrefs domain verification -->
    <meta name="ahrefs-site-verification" content="b1123fd872bc8c7860c22eadc8959120a93e9d7d4a3999dd64a3141842640706">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-8718028-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-8718028-1');
	</script>

	<!-- Global site tag (gtag.js) - Google Ads: 1033984787 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1033984787"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'AW-1033984787');
	</script>

	<!-- Google Adwords forwarding phone number snippet  -->
	<script>
		gtag('config', 'AW-1033984787/8p-5CPax_ZQBEJO2he0D', {
			'phone_conversion_number': '800-932-0657'
		});
	</script>
	
	<!-- Font Awesome CDN -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->




</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<?php 
		// Variant copy testing for primary CTA button on Server model pages
		if (is_singular( 'product' )) {		
			
			$type = ri_get_single_post_type(get_the_ID());
			
			if ($type == 'Servers') {
				$variants_array = array(
					'Request a Quote',
					'Configure this Server',
					'Configure to Order'
				);
				$rand = rand(0, 2);
				// $cta_copy = $variants_array[$rand];
				$cta_copy = 'Request a Quote';
				
			} else {
				$cta_copy = 'Request a Quote';
			}
		}
		?>
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'source-tech' ); ?></a>

		<header id="masthead" class="site-header" data-buttonvariant="<?php echo $cta_copy; ?>">
			<div class="row top-row">
				<div class="item">
					<?php
					if (is_active_sidebar( 'widget-header-left' )) {
						dynamic_sidebar( 'widget-header-left' );
					}
					?>
				</div>
				<div class="item">
					<?php
					if (is_active_sidebar( 'widget-header-right' )) {
						dynamic_sidebar( 'widget-header-right' );
					}
					?>
				</div>
			</div>
			<div class="row bottom-row">
				<div class="item site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$source_tech_description = get_bloginfo( 'description', 'display' );
				if ( $source_tech_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $source_tech_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<div class="item" id="middle-column">
				<a href="https://www.source-tech.net/contact">Give Feedback on our Website</a><span class="icon icon-angle-right"></span>
			</div>
			<div class="item" id="right-column">
				<?php get_search_form(); ?>
			<!-- <form role="search" method="get" class="header-search search-form" action="<?php echo home_url( '/' ); ?>">
				<label>
					<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
					<input type="search" class="search-field"
						placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
						value="<?php echo get_search_query() ?>" name="s"
						title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
				</label>
				<input type="submit" class="icon-search search-submit"
					value="&#xe800;" />
				</form> -->
				<a href="https://www.source-tech.net/cart/" class="button cart"><span class="icon icon-basket"></span>Cart</a>
			</div>
		</div>
		

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'source-tech' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<?php
	if(function_exists('bcn_display') && !is_front_page() && !is_page(777) && !is_page(1234) && !is_page(816) && !is_page(1372)) {
		echo '<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">';
		bcn_display();
		echo '</div>';
	}?>
	
	<?php if (is_singular('servers') || is_singular('networking')) { ?>
		<div class="container-fluid model-page-header-cta">
			<div class="row">
				<div class="col">
					<div class="alert alert-primary page-cta-alert" role="alert">
					  <?php 
					  $header_cta = get_field('global_server_cta_copy', 'option'); 
					  $alert_field = 'global_' . $post->post_type . '_alert';
					  $alert = replace_product_variable_in_string(get_field($alert_field, 'option'), $post->ID);
					  echo '<i class="fas fa-angle-double-right"></i> ' . $alert . ' <i class="fas fa-angle-double-left"></i>';
					  ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	
	<?php if (is_page(777) || is_singular('networking') || is_singular('servers')) { ?>
		<div id="custom-content" class="custom-site-content">
		<?php } else if (!is_singular('post')) { ?>
			<div id="content" class="site-content">
			<?php } ?>
