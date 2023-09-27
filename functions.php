<?php 

// Liens avec les styles et les scripts du thème enfant

function julien_berry_style_script() {
    
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('page', get_template_directory_uri() . '/assets/css/page.css');
    wp_enqueue_style('front-page', get_template_directory_uri() . '/assets/css/front-page.css');
    wp_enqueue_style('single', get_template_directory_uri() . '/assets/css/single.css');
    wp_enqueue_style( 'swiper-css', get_stylesheet_directory_uri() . '/node_modules/swiper/swiper-bundle.min.css', array());
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.js', array(), '9.2.0', true );
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'julien_berry_style_script');


// Liens avec les menus créer en amont dans WordPress

register_nav_menus( array(
    'footer' => 'Menu Footer',
));

// Navigation entre les projets
function get_permalink_for_project($project_num) {
    $project_query = new WP_Query(array(
        'post_type' => 'projet-oc',
        'meta_query' => array(
            array(
                'key' => 'num',
                'value' => $project_num,
                'compare' => '=',
            ),
        ),
    ));

    if ($project_query->have_posts()) {
        $project_query->the_post();
        $permalink = get_permalink();
        wp_reset_postdata();
        return $permalink;
    } else {
        return '';
    }
}

?>
