<div class="row model-page-how-title">
    <div class="col col-md-12 col-lg-12">
        <h2 class="section-heading text-center mb-4">Getting the lowest price on a <?php the_title(); ?> has never been easier</h2>
    </div>
</div>
<div class="row model-page-how">
    <?php
    if( have_rows('global_ordering_steps', 'option') ):
        $how = '';
        $i = 1;
        while ( have_rows('global_ordering_steps', 'option') ) : the_row();
            $description = replace_product_variable_in_string(get_sub_field('global_ordering_steps_description', 'option'), $post->ID);
            $how .= '<div class="col col-md-4 col-lg-4 text-center">';
            $how .= '<div class="panel shadow">';
            $how .= get_sub_field('global_ordering_steps_icon', 'option');
            $how .= '<h3 class="section-heading">' . get_row_index() . '. ' . get_sub_field('global_ordering_steps_heading', 'option') . '</h3>';
            $how .= '<p class="how-copy single-product-copy">' . $description . '</p>';
            $how .= '</div>';
            $how .= '</div>';
        endwhile;
    endif;

    echo $how;


    ?>
</div>