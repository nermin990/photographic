<?php

function filter_projects() {
    $catSlug = $_POST['category'];
    $paged = intval($_POST['paged']);

    $args = array(
        'post_type' => 'project',
        'posts_per_page' => 1,
        'paged' => $paged,
    );

    if($catSlug !== "all") {
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 1,
            'paged' => $paged,
            'tax_query' => array(
            array(
                'taxonomy' => 'project_categories',
                'field'    => 'slug',
                'terms'    => $catSlug
            ),
        ));
    }

    $ajaxposts = new WP_Query($args);

    $posts_array = [];

    if($ajaxposts->have_posts()) {
        while($ajaxposts->have_posts()) : $ajaxposts->the_post();

            ob_start();
            get_template_part( 'template-parts/components/project-element' );
            $posts_array[] = ob_get_contents();
            ob_end_clean();

        endwhile;

        echo json_encode((object) [
            'html' => $posts_array,
            'max_pagination' => $ajaxposts->max_num_pages
        ]);

        exit;

    } else {

        echo 'No posts found';

        exit;

    }

}
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');