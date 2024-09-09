<?php
$image_left = get_sub_field('image_left');
$image_right = get_sub_field('image_right');

if ($image_left || $image_right):
    $image_left_url = $image_left['url'];
    $image_left_alt = $image_left['alt'];
    $image_left_width = $image_left['width'];
    $image_left_height = $image_left['height'];

    $image_right_url = $image_right['url'];
    $image_right_alt = $image_right['alt'];
    $image_right_width = $image_right['width'];
    $image_right_height = $image_right['height'];
    ?>
    <div class="two-in-row">
        <img src="<?= $image_left_url; ?>" alt="<?= $image_left_alt; ?>" width="<?= $image_left_width; ?>" height="<?= $image_left_height; ?>">
        <img src="<?= $image_right_url; ?>" alt="<?= $image_right_alt; ?>" width="<?= $image_right_width; ?>" height="<?= $image_right_height; ?>">

    </div>
<?php
endif;
?>