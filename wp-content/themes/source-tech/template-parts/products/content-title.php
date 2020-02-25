<?php
$tags = get_query_var('tags');
$title = ($post->post_type == 'servers') ? get_the_title() . ' Servers' : get_the_title();
$subtitle_field = 'global_' . $post->post_type . '_subtitle';
$subtitle = replace_product_variable_in_string(get_field($subtitle_field, 'option'), $post->ID);
?>

    <div class="row model-page-title mt-4">
        <div class="col-sm-12 col-md-6 col-lg-8">
            <h1 class="page-title"><?php echo $title; ?></h1>
            <h6 class="server-title-abstract mb-3"><?php echo $subtitle; ?></h6>
            <?php
            foreach ($tags as $tag => $value) {
                if ($tag != 'title') {
                    $tag_items .= '<span class="badge badge-pill badge-primary model-page-tags">' . $value . '</span>';
                }
            }

            echo $tag_items;
            ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 text-right">
            <?php
            set_query_var('manufacturer',$tags['Manufacturer']);
            get_template_part('template-parts/content', 'cta' );
            ?>
        </div>
    </div>
