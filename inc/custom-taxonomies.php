<div class="categories">
    <p class="single_category active" data-slug="all">All</p>
    <?php

    $project_categories = $args['taxonomy'];

    $categories = get_terms(array(
        'taxonomy' => $project_categories,
        'hide_empty' => true
    ));

    if($categories) {
        foreach ($categories as $category) {
            echo '<p class="single_category" data-slug="' . $category->slug . '">'. $category->name .'</p>';
        }
    }
    ?>
</div>