<?php
$three_images = get_sub_field('three_images');
?>
<div class="three-in-row">
    <?php
    foreach ($three_images as $single_img):
        if ($single_img):
            $image_full_url = $single_img['url'];
            $image_full_alt = $single_img['alt'];
            $image_full_width = $single_img['width'];
            $image_full_height = $single_img['height'];
            ?>
            <img src="<?= esc_url($image_full_url); ?>" alt="<?= esc_attr($image_full_alt); ?>"
                 width="<?= esc_attr($image_full_width); ?>" height="<?= esc_attr($image_full_height); ?>">
        <?php
        endif;
    endforeach;
    ?>
</div>
