<?php
$categories = get_the_category();
?>
<div class="container post-content-container">
    <?php
    if (get_field('post_content_migrated')) {
//        get_template_part('template-parts/blog/content', 'overview');
    }
    ?>
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
                        $section_heading = get_sub_field('post_section_content_heading');

                        if ($section_heading) {
                            $content .= '<h3>' . $section_heading . '</h3>';
                        }


                        if (get_sub_field('post_section_content_type') == 'Text') {
                            $content .= get_sub_field('post_section_content_body');
                        }
                        if (get_sub_field('post_section_content_type') == 'Callout') {
                            $content .= '<div class="post-callout bg-blue-grey">';
                            $content .= '<p>' . get_sub_field('post_section_callout') . '</p>';
                            $content .= '</div>';
                        }
                        if (get_sub_field('post_section_content_type') == 'Images') {

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
