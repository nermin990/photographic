<?php
get_header();
?>

    <section class="portfolio">
        <div class="container">
            <div class="portfolio-holder">
                <?php
                if (have_rows('flexible_content')):

                    // Loop through rows.
                    while (have_rows('flexible_content')) : the_row();

                        // Case: Paragraph layout.
                        if (get_row_layout() == 'full_width_img'):

                            get_template_part('template-parts/components/full-width-img');

                        elseif (get_row_layout() == 'two_image_in_row'):

                            get_template_part('template-parts/components/two-image-in-row');

                        elseif (get_row_layout() == 'three_in_row'):

                            get_template_part('template-parts/components/three-in-row');

                        elseif (get_row_layout() == 'left_one_big_image_right_two_small_images'):

                            get_template_part('template-parts/components/left-one-big-image-right-two-small-images');

                        elseif (get_row_layout() == 'left_two_small_images_right_one_big_image'):

                            get_template_part('template-parts/components/left-two-small-images-right-one-big-image');

                            // End loop.
                        endif;

                        // End loop.
                    endwhile;

// No value.
                else :
                endif;
                ?>
            </div>
        </div>
    </section>

<?php
get_footer();
?>