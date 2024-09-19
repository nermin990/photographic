<?php
$first_left_image = get_sub_field('first_left_image');
$second_left_image = get_sub_field('second_left_image');
$right_image_big = get_sub_field('right_image_big');

if ($first_left_image || $second_left_image || $right_image_big):
    $first_left_image_url = $first_left_image['url'];
    $first_left_image_alt = $first_left_image['alt'];
    $first_left_image_width = $first_left_image['width'];
    $first_left_image_height = $first_left_image['height'];

    $second_left_image_url = $second_left_image['url'];
    $second_left_image_alt = $second_left_image['alt'];
    $second_left_image_width = $second_left_image['width'];
    $second_left_image_height = $second_left_image['height'];

    $right_image_big_url = $right_image_big['url'];
    $right_image_big_alt = $right_image_big['alt'];
    $right_image_big_width = $right_image_big['width'];
    $right_image_big_height = $right_image_big['height'];
    ?>
    <div class="left-two-right-one">
        <div class="left-two__holder">
            <img src="<?= $first_left_image_url; ?>" alt="<?= $first_left_image_alt; ?>" width="<?= $first_left_image_width; ?>" height="<?= $first_left_image_height; ?>">
            <img src="<?= $second_left_image_url; ?>" alt="<?= $second_left_image_alt; ?>" width="<?= $second_left_image_width; ?>" height="<?= $second_left_image_height; ?>">

        </div>
        <div class="right-one__holder">
            <img src="<?= $right_image_big_url; ?>" alt="<?= $right_image_big_alt; ?>" width="<?= $right_image_big_width; ?>" height="<?= $right_image_big_height; ?>">
        </div>
    </div>
<?php
endif;
?>