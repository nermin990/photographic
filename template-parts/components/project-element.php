<div class="project-cart">
    <div class="project-cart-featured">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </a>
    </div>
    <div class="project-cart-content">
        <a href="<?php the_permalink(); ?>">
            <h3>
                <?php the_title(); ?>
            </h3>
        </a>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <a href="#">
            View more
        </a>
    </div>
</div>