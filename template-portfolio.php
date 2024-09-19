<?php
// Template name: Portfolio

get_header();
?>

<section class="portfolio">
    <div class="container">
        <div class="row">
            <div class="portfolio-holder">
                <h1>Portfolio</h1>

                <?php
                $posts_per_page = 12;

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => $posts_per_page,
                    'paged' => $paged,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
                        <div class="portfolio-holder__single">
                            <a href="<?= get_permalink(); ?>">
                                <div class="portfolio-holder__single-img">
                                    <?php
                                    if (has_post_thumbnail()) :
                                        the_post_thumbnail('full', array('class' => 'portfolio-thumbnail'));
                                    endif;
                                    ?>
                                </div>

                                <h5><?php the_title(); ?></h5>
                            </a>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '';
                endif;
                ?>
            </div>

            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => __('« Prev'),
                    'next_text' => __('Next »'),
                    'mid_size' => 2,
                ));
                ?>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>
