<article class="post-card">

    <a href="<?php echo esc_url(get_permalink()); ?>">

        <?php if(has_post_thumbnail()) : ?>

            <div class="post-card__image">
                <?php the_post_thumbnail('medium'); ?>
            </div>

        <?php endif; ?>

        <h2 class="post-card__title">
            <?php echo esc_html(get_the_title()); ?>
        </h2>

    </a>

</article>