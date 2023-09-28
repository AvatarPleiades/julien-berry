<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php
        // Récupérer les projets ACF dans l'ordre décroissant en fonction de $num
        $args = array(
            'post_type' => 'projet-oc',
            'posts_per_page' => -1,
            'orderby' => 'meta_value_num',
            'meta_key' => 'num',
            'order' => 'DESC'
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                $desktop_url = get_field('desktop');
                ?>
                <div class="swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url($desktop_url); ?>">
                    </a>
                </div>
            <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>