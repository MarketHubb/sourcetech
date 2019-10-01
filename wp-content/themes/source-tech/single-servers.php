<?php get_header(); ?>

<?php 
$post_id = $post->ID; 
$model_clean = ri_remove_model_name_adjectives($post_id);
$tags = array();
$server_tag_cats = array('server_manufacturers', 'product_line', 'server_types', 'form_factor');
foreach ($server_tag_cats as $tag_cat) {
	$terms = get_the_terms($post_id, $tag_cat);
	$label = ri_get_labels_from_terms($terms[0]->taxonomy);
	$tags[$label] = $terms[0]->name;
}
?>

<div class="custom-page-content" id="custom-model-page-template">
	
	<!-- CTA -->
	<div class="row justify-content-end model-page-cta">
		<div class="col-6">
			<div class="cta-container">
				<!-- <h3 class="model-page-cta-title text-center">Get a real-time quote now:</h3> -->
				<div class="text-center">
					<span class="badge badge-pill badge-primary model-page-tags model-page-cta-tag">2 Easy Ways to get a Real-time Quote</span>
				</div>
				<div class="row">
					<div class="col model-page-cta-phone-container">
						<!-- <h4><i class="fal fa-phone fa-lg"></i> <a href="tel:800-932-0657" class="model-phone model-page-cta-phone model-page-cta-phone-copy">800-932-0657</a></h4> -->
						<p class="model-page-cta-phone-copy"><i class="fal fa-phone fa-lg"></i> <a href="tel:800-932-0657" class="model-phone model-page-cta-phone model-page-cta-phone-copy">800-932-0657</a></p>
					</div>
					<div class="col">
						<p class="model-page-cta-phone-copy"><i class="fal fa-comments-alt fa-lg"></i> Chat with us</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Title -->
	<div class="row model-page-title">
		<div class="col">
			<h1 class="page-title"><?php echo get_the_title($post_id); ?></h1>
			<?php 
			if( have_rows('post_product_tags') ):
				$tags = '';
			    while ( have_rows('post_product_tags') ) : the_row();
			        $tags .= '<span class="badge badge-pill badge-primary model-page-tags">' . get_sub_field('post_product_tags_tag') . '</span>';
			    endwhile;
			    echo $tags;
			endif;
			
			foreach ($tags as $tag => $value) {
				$tag_items .= '<span class="badge badge-pill badge-primary model-page-tags">' . $value . '</span>';
			}
			
			echo $tag_items;
				
			 ?>
		</div>
	</div>
	
	<!-- Start: Tabs -->
	<div class="row" id="model-page-tabs">
		<div class="col">
			<ul class="nav nav-tabs nav-fill">
				<li class="nav-item">
					<a class="nav-link active" href="#server" data-toggle="tab" role="tab"><i class="fal fa-server fa-lg"></i><?php echo $model_clean; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#specs" data-toggle="tab" role="tab"><i class="fal fa-file-alt fa-lg"></i>Specs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#why" data-toggle="tab" role="tab"><i class="fal fa-hdd fa-lg"></i>Why SourceTech</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#faq" data-toggle="tab" role="tab"><i class="fal fa-question-circle fa-lg"></i>FAQs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#warranty" data-toggle="tab" role="tab"><i class="fal fa-certificate fa-lg"></i>Warranty</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#shipping" data-toggle="tab" role="tab"><i class="fal fa-shipping-fast fa-lg"></i>Shipping</a>
				</li>
			</ul>
		</div>
	</div> 
	<!-- End: Tabs -->
	
	<!-- Start: Tab Content -->
	<div class="row" id="model-page-tabs-content">
		<div class="col">
			<div class="tab-content" id="server-tab-content">
				<!-- Start Tab Content: Image & Description -->
				<div class="tab-pane fade show active" id="server" role="tabpanel" aria-labelledby="specs-tab">
					<div class="row">
						<div class="col col-md-6 col-lg-6" id="model-page-image-container">
							<?php 
							if( have_rows('post_servers_images') ):
								$i = 1;
								$images = '<div class="row image-thumb-container">';
							    while ( have_rows('post_servers_images') ) : the_row();
							    	if ($i === 1) {
							    		$image_class = ' active';
							    		$load_image  = '<img src="' . get_sub_field('post_servers_images_image') . '" class="model-page-featured-image" />';
							    	} else {
							    		$image_class = ' ';
							    	}
									$images .= '<div class="col col-md-3 col-lg-3' . $image_class . '">';
							        $images .= '<img src="' . get_sub_field('post_servers_images_image') . '" class="img-thumbnail rounded float-left" />';
									$images .= '</div>';
							        
							        $i++;
							    endwhile;
							    $images .= '</div>';
							endif;
							
							echo $load_image;
							echo $images;
							 ?>
							 
						</div>
						<div class="col col-md-6 col-lg-6">
							<h4 class="model-page-description-label">Description:</h4>
							<p class="model-page-description"><?php the_field('post_servers_description'); ?></p>
						</div>
					</div>
				</div>
				<!-- End Tab Content: Image & Description -->
				<!-- Start Tab Content: Specs -->
				<div class="tab-pane fade show" id="specs" role="tabpanel" aria-labelledby="specs-tab">
					<h2 class="section-heading model-tab-heading"><?php echo get_field('global_server_specs_heading', 'option'); ?></h2>
					<?php $specs_sub_heading = preg_replace('/{Server}/i', $model_clean, get_field('global_server_specs_sub_heading', 'option'));  ?>
					<p class="section-sub-heading"><?php echo $specs_sub_heading; ?></p>
					<table class="table" id="model-specs-table">
						<tbody>
							<?php 
							$specs_table = '';
							
							// Output specs from taxonomies
							$tax_specs = '';
							foreach ($tags as $tag => $value) {
								$tax_specs .= '<tr>';
							    $tax_specs .= '<th scope="row">' . $tag . ':</th>';
							    $tax_specs .= '<td>' . $value . '</td>';
								$tax_specs .= '</tr>';
							}
							// Output specs from custom field
							$post_specs = '';
							if( have_rows('post_servers_specs') ):
							    while ( have_rows('post_servers_specs') ) : the_row();
							    	$post_specs .= '<tr>';
							        $post_specs .= '<th scope="row">' . get_sub_field('post_servers_specs_label') . ':</th>';
							        $post_specs .= '<td>' . get_sub_field('post_servers_specs_value') . '</td>';
							    	$post_specs .= '</tr>';
							    endwhile;
							endif;
							
							$specs_table = $tax_specs . $post_specs;
							
							echo $specs_table;
							 ?>
						</tbody>
					</table>
				</div>
				<!-- End Tab Content: Specs -->
				<!-- Start Tab Content: Why -->
				<div class="tab-pane fade" id="why" role="tabpanel" aria-labelledby="why-tab">
					<h2>Why SourceTech</h2>
				</div>
				<!-- End Tab Content: Why -->
				<!-- Start Tab Content: FAQs -->
				<div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
					<h2>FAQs</h2>
				</div>
				<!-- End Tab Content: FAQs -->
				<!-- Start Tab Content: Warranty -->
				<div class="tab-pane fade" id="warranty" role="tabpanel" aria-labelledby="warranty-tab">
					<h2>Warranty</h2>
				</div>
				<!-- End Tab Content: Warranty -->
				<!-- Start Tab Content: Shipping -->
				<div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
					<h2>Shipping</h2>
				</div>
				<!-- End Tab Content: Shipping -->
			</div>
		</div>
	</div>
	<!-- End: Tab Content -->
	
	
	
	<!-- Start: Tab Content -->
	<!-- <div class="row" id="model-page-tabs-content">
		<div class="col">
			<div class="tab-content" id="myTabContent">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="specs" role="tabpanel" aria-labelledby="specs-tab">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Label</th>
								<th scope="col">Values</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							if( have_rows('post_servers_specs') ):
								$specs_table = '';
							    while ( have_rows('post_servers_specs') ) : the_row();
							    	$specs_table .= '<tr>';
							        $specs_table .= '<th scope="row">' . get_sub_field('post_servers_specs_label') . '</th>';
							        $specs_table .= '<td>' . get_sub_field('post_servers_specs_value') . '</td>';
							    	$specs_table .= '</tr>';
							    endwhile;
							endif;
							
							echo $specs_table;
							 ?>
						</tbody>
					</table>
				</div>
				
				<div class="tab-pane fade" id="why" role="tabpanel" aria-labelledby="why-tab">...</div>
				<div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">...</div>
			</div>
		</div>
	</div>  -->
	<!-- End: Tab Content -->
	
	
	<!-- How it Works -->
	<div class="row model-page-how">
		<?php 
		if( have_rows('global_server_how_it_works', 'option') ):
	    	$heading_with_server_name = preg_replace('/{Server}/i', $model_clean, get_field('global_server_how_it_works_heading', 'option'));
			$how = '<div class="col col-md-12 col-lg-12"><h2 class="section-heading text-center">' . $heading_with_server_name . '</h2></div>';
			$i = 1;
		    while ( have_rows('global_server_how_it_works', 'option') ) : the_row();
		    	$description_with_server_name = preg_replace('/{Server}/i', $model_clean, get_sub_field('global_server_how_it_works_description', 'option'));
		    	// $description_with_server_name = str_replace('{Server}', get_sub_field('global_server_how_it_works_description', 'option'), $model_clean);
		        $how .= '<div class="col col-md-4 col-lg-4 text-center">';
		        $how .= get_sub_field('global_server_how_it_works_icon', 'option');
		        $how .= '<h3 class="section-heading">' . get_row_index() . '. ' . get_sub_field('global_server_how_it_works_heading', 'option') . '</h3>';
		        $how .= '<p>' . $description_with_server_name . '</p>';
		        $how .= '</div>';
		    endwhile;
		endif;
		
		echo $how;
			
			
		 ?>
	</div>
	
	<!-- Testimonial -->
	<div class="row model-page-testimonial">
		<div class="col">
			<blockquote class="blockquote text-center">
				<i class="fal fa-quote-right"></i>
				<p class="mb-0">"Abundant supply. Fastest service. Lowest prices. Proven in multiple deals. Our #1 choice"</p>
				<footer class="blockquote-footer"><cite title="Source Title">UMMC Tidwell</cite></footer>
			</blockquote>
		</div>
	</div>
	
</div><!-- custom-model-page-template -->

<?php get_footer(); ?>
