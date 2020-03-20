<?php
if (get_field('post_page_banner_image')) {
    $banner_url = get_field('post_page_banner_image');
} else {
    $banner_url = ri_get_acf_random_repeater_row('global_banners_banner_images', 'global_banners_banner_images_image', true);
}
?>
<!-- Page Title (Banner) -->
<div class="container-fluid p-0">
    <div class="banner-container" style="background-image: url('<?php echo $banner_url; ?>');">
        <div class="banner-overlay dark">
            <div class="container h-100 content-section">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="banner-headline"><?php the_title(); ?></h1>
                        <p class="banner-subheadline"><?php the_field('post_page_subtitle'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>