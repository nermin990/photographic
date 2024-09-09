<?php
$image_full = get_sub_field('image_full');

if ($image_full):
    $image_full_url = $image_full['url'];
    $image_full_alt = $image_full['alt'];
    $image_full_width = $image_full['width'];
    $image_full_height = $image_full['height'];
    ?>
    <div class="full-width-image">
        <img src="<?= $image_full_url; ?>" alt="<?= $image_full_alt; ?>" width="<?= $image_full_width; ?>" height="<?= $image_full_height; ?>">
    </div>

<?php
endif;
?>