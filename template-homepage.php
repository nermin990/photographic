<?php
// Template name: Homepage

get_header();
?>

<?php
$hero_gallery = get_field('hero_gallery');
?>

<section class="hero">
    <div class="container-fluid">
        <div class="row">
            <div class="hero-holder">
                <?php foreach ($hero_gallery as $single_image): ?>
                    <div class="image-container">
                        <img src="<?php echo $single_image['url']; ?>" alt="Loading..."
                             width="<?php echo $single_image['width']; ?>"
                             height="<?php echo $single_image['height']; ?>"
                             loading="lazy">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
$content = get_field('content');
$link = get_field('link');
$image_right = get_field('image_right');
?>
<section class="about-us">
    <div class="hero-gradient"></div>
    <div class="container">
        <div class="row">
            <div id="about-me" class="about-us-section">
                <div class="about-us-section__left col-md-6">
                    <h1>About me</h1>
                    <?=
                    $content;
                    ?>
                    <div class="about-us-section__left-button">
                        <a href="#contact">Contact me</a>
                    </div>
                </div>
                <div class="about-us-section__right col-md-6">
                    <img src="<?= $image_right['url']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="first-gallery" >
    <div class="container" >
        <div class="row">
            <div class="first-gallery-heading"  >
                <h2>Wedding Photos</h2>
            </div>
            <div class="first-gallery-holder">
                <?php
                $first_gallery = get_field('gallery_first');

                foreach ($first_gallery as $single_img):
                    $single_img_url = $single_img['url'];
                    $single_img_alt = $single_img['alt'];
                    $single_img_width = $single_img['width'];
                    $single_img_height = $single_img['height'];
                    ?>
                    <div class="first-gallery-holder__img">
                        <img src="<?= $single_img_url; ?>" alt="<?= $single_img_alt; ?>"
                             width="<?= $single_img_width; ?>"
                             height="<?= $single_img_height; ?>">
                    </div>
                <?php
                endforeach;
                ?>
            </div>

        </div>
    </div>
</section>

<section class="second-gallery">
    <div class="container">
        <div class="row">
            <div class="second-gallery-heading">
                <h2>Photo Sessions</h2>
            </div>
            <div class="second-gallery-holder">
                <?php
                $second_gallery = get_field('gallery_second');

                foreach ($second_gallery as $single_img):
                    $single_img_url = $single_img['url'];
                    $single_img_alt = $single_img['alt'];
                    $single_img_width = $single_img['width'];
                    $single_img_height = $single_img['height'];
                    ?>
                    <div class="second-gallery-holder__img">
                        <img src="<?= $single_img_url; ?>" alt="<?= $single_img_alt; ?>"
                             width="<?= $single_img_width; ?>"
                             height="<?= $single_img_height; ?>">
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>

<section class="other-photos">
    <div class="container-fluid">
        <div class="other-photos-heading">
            <h2>Other Photos</h2>
        </div>
        <div class="other-photos-holder">
            <?php
            $other_photos = get_field('gallery_other');

            foreach ($other_photos as $photo):
                ?>
                <div class="other-photos-holder-img">
                    <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" loading="lazy">
                </div>

            <?php
            endforeach;
            ?>
        </div>


        <div class="other-photos-holder-arrows">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/divider.png" alt="Loading...">
        </div>
    </div>
</section>

<?php
get_footer();
?>
