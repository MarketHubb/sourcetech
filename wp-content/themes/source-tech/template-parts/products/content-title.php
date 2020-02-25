<?php
$tags = get_query_var('tags');
$title = ($post->post_type == 'servers') ? get_the_title() . ' Servers' : get_the_title();
$subtitle_field = 'global_' . $post->post_type . '_subtitle';
?>

    <div class="row model-page-title mt-4">
        <div class="col-sm-12 col-md-6 col-lg-8">
            <h1 class="page-title"><?php echo $title; ?></h1>
            <h6 class="server-title-abstract mb-3"><?php the_field($subtitle_field, 'option'); ?></h6>
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
        <div class="col-sm-12 col-md-6 col-lg-4 text-right">
            <?php
            set_query_var('manufacturer',$tags['Manufacturer']);
            get_template_part('template-parts/content', 'cta' );
            ?>
        </div>
    </div>