<?php

if (has_post_thumbnail()) {
    $bg = get_the_post_thumbnail_url(null, 'hero-large');
} else {
    $bg = get_template_directory_uri() . '/assets/images/hero.jpg';
}

?>

<section class="hero-home" style="background-image:url('<?php echo esc_url($bg); ?>')">

    <div class="hero-home__overlay">

        <div class="container">

            <?php if (is_front_page()) : ?>

                <h1 class="hero-home__title">
                    <?php the_title(); ?>
                </h1>

            <?php endif; ?>

        </div>

    </div>

</section>