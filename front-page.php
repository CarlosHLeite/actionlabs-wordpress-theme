<?php
/**
 * =================================
 * HOME TEMPLATE
 * =================================
 *
 * Template responsável por renderizar
 * a página inicial do site.
 *
 * Estrutura da página:
 * - Hero section
 * - Grid de posts recentes
 *
 *
 * @package ActionLabsTheme
 */
?>

<?php get_header(); ?>

<main class="site-main">

    <?php get_template_part('template-parts/sections/hero', 'home'); ?>

    <?php get_template_part('template-parts/sections/posts', 'grid'); ?>

</main>

<?php get_footer(); ?>

