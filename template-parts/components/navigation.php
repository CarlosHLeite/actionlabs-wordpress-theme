<header class="site-header" role="banner">

    <div class="container">

        <nav class="site-nav">

            <ul class="site-nav__list">

                <li class="site-nav__item site-nav__item--logo">

                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>

                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                        <?php bloginfo('name'); ?>
                    </a>

                    <?php } ?>

                </li>

                <?php $about_page = get_page_by_path('sobre-nos'); ?>

                <li class="site-nav__item">
                    <a href="<?php echo esc_url( get_permalink($about_page->ID) ); ?>" class="btn btn--primary">
                        Sobre nós
                    </a>
                </li>

            </ul>

        </nav>

    </div>

</header>