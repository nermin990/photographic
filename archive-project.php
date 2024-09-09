<?php get_header();

get_template_part('inc/custom-taxonomies', null, array('taxonomy'=>'project_categories'));

?>

<div class="projects">
<?php

$args = array(
    'post_type' => 'project',
    'posts_per_page' => 1,
    'post_status' => 'publish',
);
$QUERY = new WP_Query($args);

if($QUERY->have_posts()):

    while ($QUERY->have_posts()): $QUERY->the_post();

        get_template_part('template-parts/components/project-element');

    endwhile;

endif;

wp_reset_query();

?>

</div>

    <a href="#!" class="load_more_button" data-paged="1">Load More</a>

<?php

get_footer();

?>