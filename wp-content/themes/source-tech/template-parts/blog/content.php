<?php
$categories = get_the_category();
?>
<div class="container post-content-container">
    <div class="row bg-blue-grey">
        <div class="col">
            <div class="post-content-section post-overview">
                <h3>Post Overview</h3>
                <p><strong>Quick Read: </strong><?php the_field('pos_quick_read'); ?></p>
                <p><strong>Read Time: </strong><?php the_field('post_read_time'); ?> minutes</p>
                <p><strong>Posted In: </strong>
                    <?php
                    foreach ($categories as $category) {
                        echo $category->name;
                    }
                    ?>
                </p>
                <p><strong>Models Covered: </strong>
                    <?php
                    if( have_rows('post_products_covered') ):
                        $products = '';
                        while ( have_rows('post_products_covered') ) : the_row();
                            $products .= '<a href="' . get_permalink(get_sub_field('post_products_covered_product_id')) . '" class="product-links">';
                            $products .= get_the_title(get_sub_field('post_products_covered_product_id'));
                            $products .= '</a>';
                        endwhile;
                    endif;
                    echo $products;
                    ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row bg-white">
        <div class="col">
            <?php
            if (!get_field('post_content_migrated')) {
                the_content();
            } else {
                if( have_rows('post_section') ):
                    $content = '';
                    while ( have_rows('post_section') ) : the_row();
                        $content .= '<div class="post-content-section">';
                        $content .= '<h3>' . get_sub_field('post_section_content_heading') . '</h3>';

                        if (get_sub_field('post_section_content_type') == 'Text') {
                            $content .= get_sub_field('post_section_content_body');
                        } else {
                            $content = get_post_table_from_repeater();
                        }
                        $content .= '</div>';
                    endwhile;
                endif;

                echo $content;
            }
            ?>
        </div>
    </div>
</div>
