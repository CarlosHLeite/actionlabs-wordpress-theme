<?php
/**
 * =================================
 * ABOUT PAGE TEMPLATE
 * =================================
 *
 * Template personalizado para a página
 * "Sobre Nós".
 *
 * Exibe:
 * - Título da página
 * - Conteúdo editável pelo WordPress
 *
 *
 * @package ActionLabsTheme
 */

?>

<?php get_header(); ?>

<main class="about-page">

    <div class="about-container">

        <h1 class="about-title">
            <?php the_title(); ?>
        </h1>

        <div class="about-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>

    </div>

</main>

<?php get_footer(); ?>