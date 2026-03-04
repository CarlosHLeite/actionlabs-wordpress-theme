<section class="home-posts container teste">

    <div class="posts-grid">

        <?php

            $query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 6
            ]);

            if($query->have_posts()) :

                while($query->have_posts()) : $query->the_post();

                    get_template_part('template-parts/components/post','card');

                endwhile;

                wp_reset_postdata();

            endif;

        ?>

    </div>

</section>