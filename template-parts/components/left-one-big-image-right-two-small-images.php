<?php
$left_image_big = get_sub_field('left_image_big');
$first_right_image = get_sub_field('first_right_image');
$second_right_image = get_sub_field('second_right_image');

if ($left_image_big || $first_right_image || $second_right_image):
    $left_image_big_url = $left_image_big['url'];
    $left_image_big_alt = $left_image_big['alt'];
    $left_image_big_width = $left_image_big['width'];
    $left_image_big_height = $left_image_big['height'];

    $first_right_image_url = $first_right_image['url'];
    $first_right_image_alt = $first_right_image['alt'];
    $first_right_image_width = $first_right_image['width'];
    $first_right_image_height = $first_right_image['height'];

    $second_right_image_url = $second_right_image['url'];
    $second_right_image_alt = $second_right_image['alt'];
    $second_right_image_width = $second_right_image['width'];
    $second_right_image_height = $second_right_image['height'];
    ?>
    <div class="left-one-right-two">
        <div class="left-one__holder">
            <img src="<?= $left_image_big_url; ?>" alt="<?= $left_image_big_alt; ?>" width="<?= $left_image_big_width; ?>" height="<?= $left_image_big_height; ?>">
        </div>
        <div class="right-two__holder">
            <img src="<?= $first_right_image_url; ?>" alt="<?= $first_right_image_alt; ?>" width="<?= $first_right_image_width; ?>" height="<?= $first_right_image_height; ?>">
            <img src="<?= $second_right_image_url; ?>" alt="<?= $second_right_image_alt; ?>" width="<?= $second_right_image_width; ?>" height="<?= $second_right_image_height; ?>">
        </div>
    </div>
<?php
endif;
?>