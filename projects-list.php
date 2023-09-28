<?php get_header(); ?>

<?php 
// Champs ACF
    $project = get_field('projet');
    $name = get_field('nom');
    $details = get_field('details'); 
    $num = get_field('num');
    $banniere = get_field('banniere');
    $desktop_url = get_field('desktop');

// Langages utilisés
    $wordpress = get_field('wordpress');
    $html = get_field('html');
    $css = get_field('css');
    $javascript = get_field('javascript');
    $php = get_field('php');
    $bootstrap = get_field('bootstrap');

//Récupération de l'id et de l'url	
	$id = get_the_ID();
    $url = get_permalink();
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<div class="container-single">
    <div class="title-description">
        <h1>Tous les projets</h1>
        <h3 class="second-title margin-bottom"><?php echo $name ?></h2>
    </div>
    <p class="text-align">Retrouvez sur cette page tous les projets sur lesquels j'ai travaillé.</p>
    <div class="projects-grid">
        <?php 
        $args = array(
            'post_type' => 'projet-oc',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); 
            ?>
            <a href="<?php the_permalink(); ?>"> <!-- Lien vers le projet -->
                <div class="project-block">
                    <div class="project-img">
                        <img src="<?php echo esc_url(get_field('desktop')); ?>">      
                    </div>
                </div>
            </a>
            <?php endwhile; 
            wp_reset_postdata();
        else :
            echo 'Aucun projet trouvé.';
        endif;
        ?> 
    </div>
</div>

<?php get_footer(); ?>


<?php endwhile; endif ?> 

<?php get_footer(); ?>