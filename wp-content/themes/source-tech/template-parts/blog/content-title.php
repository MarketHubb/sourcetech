<?php if (!get_field('post_featured_image')) { ?>
<div class="bg-blue">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="blog-title"><?php echo get_the_title(); ?></h1>
                <div class="publish-container">
                    <?php if (get_the_modified_date()) { ?>
                        <p class="post-updated"><strong>Updated: </strong> <?php the_modified_date(); ?></p>
                    <?php } ?>
                    <p class="post-created"><strong>Published: </strong> <?php echo get_the_date(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } else {
    $banner_url = get_field('post_featured_image');
?>
<!-- Page Title (Banner) -->
<div class="container-fluid p-0">
    <div class="banner-container" style="background-image: url('<?php echo $banner_url; ?>');">
        <div class="banner-overlay dark">
            <div class="container h-100 content-section">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="banner-headline"><?php the_title(); ?></h1>
                        <div class="publish-container">
                            <?php if (get_the_modified_date()) { ?>
                                <p class="post-updated"><strong>Updated: </strong> <?php the_modified_date(); ?></p>
                            <?php } ?>
                            <p class="post-created"><strong>Published: </strong> <?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>


