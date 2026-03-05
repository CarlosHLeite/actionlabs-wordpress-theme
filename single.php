<?php
/**
 * =================================
 * SINGLE POST TEMPLATE
 * =================================
 *
 * Template responsável por renderizar
 * posts individuais do blog.
 *
 * Estrutura:
 * - Hero section
 * - Imagem destacada
 * - Categoria e metadados
 * - Título e autor
 * - Conteúdo do post
 *
 *
 * @package ActionLabsTheme
 */
?>

<?php get_header(); ?>

<main class="single-post">

<?php get_template_part('template-parts/sections/hero', 'home'); ?>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

        <article class="post-container">

            <div class="post-card-single">

                <div class="post-card-single__image">

                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>

                </div>

                <div class="post-card-single__content">

                    <span class="post-card-single__category">
                        <?php echo get_the_category()[0]->name ?? ''; ?>
                    </span>

                    <div class="post-card-single__meta">

                    <span class="meta-date">

                        <svg class="meta-icon" viewBox="0 0 24 24">
                            <path fill="currentColor"
                            d="M7 2v2H5a2 2 0 0 0-2 2v14a2 
                            2 0 0 0 2 2h14a2 2 0 0 0 
                            2-2V6a2 2 0 0 0-2-2h-2V2h-2v2H9V2H7zm12 
                            18H5V10h14v10z"/>
                        </svg>

                        <?php echo esc_html(get_the_date()); ?>

                    </span>

                    <span class="meta-tags">

                        <svg class="meta-icon" viewBox="0 0 24 24">
                            <path fill="currentColor"
                            d="M21.41 11.58l-9-9A2 
                            2 0 0 0 11 2H4a2 2 0 0 0-2 
                            2v7c0 .53.21 1.04.59 
                            1.41l9 9a2 2 0 0 0 
                            2.83 0l7-7a2 2 0 0 0 
                            0-2.83zM7.5 9A1.5 
                            1.5 0 1 1 9 7.5 
                            1.5 1.5 0 0 1 7.5 9z"/>
                        </svg>

                        <?php

                        $tags = get_the_tags();

                        if ($tags) {

                            $tag_names = wp_list_pluck($tags, 'name');
                            echo esc_html(implode(', ', $tag_names));

                        } else {

                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo esc_html($categories[0]->name);
                            }

                        }

                        ?>

                    </span>

                </div>

                    <h1 class="post-card-single__title">
                        <?php the_title(); ?>
                    </h1>

                    <p class="post-card-single__author">
                        Autor: <?php the_author(); ?>
                    </p>

                    <div class="post-card-single__text">
                        <?php the_content(); ?>
                    </div>

                </div>

            </div>

        </article>

    <?php
        endwhile;
    endif;
    ?>

</main>

<?php get_footer(); ?>