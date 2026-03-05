<?php
/**
 * =================================
 * FOOTER TEMPLATE
 * =================================
 *
 * Responsável por renderizar o rodapé do site.
 * Inclui:
 * - Logo da empresa
 * - Divisor visual
 * - Copyright automático
 *
 *
 * @package ActionLabsTheme
 */
?>

<footer class="site-footer">

    <div class="container footer-container">

        <div class="footer-logo">
            <?php the_custom_logo(); ?>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-copy">
            © <?php echo date('Y'); ?>. Todos os direitos reservados.
        </div>

    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>