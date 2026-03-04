<article class="post-card">

    <a class="post-card__image" href="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium_large'); ?>
        <?php endif; ?>

        <span class="post-card__category">
            <?php echo get_the_category()[0]->name ?? ''; ?>
        </span>

    </a>

    <div class="post-card__content">

        <h3 class="post-card__title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>

        <p class="post-card__excerpt">
            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
        </p>

        <a class="post-card__link" href="<?php the_permalink(); ?>">
            Leia mais »
        </a>

    </div>

</article>