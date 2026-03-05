<?php
/**
 * =================================
 * PAGE TEMPLATE
 * =================================
 *
 * Template padrão para páginas do WordPress.
 * Renderiza o conteúdo utilizando o loop
 * padrão do WordPress.
 *
 *
 * @package ActionLabsTheme
 */
?>

<?php get_header(); ?>

<main class="site-main">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class(); ?>>

            <h1 class="page-title">
                <?php the_title(); ?>
            </h1>

            <div class="page-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>

<?php endif; ?>

</main>

<?php get_footer(); ?>