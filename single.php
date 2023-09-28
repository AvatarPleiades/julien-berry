<?php get_header(); ?>

<?php 
// Champs ACF
    $project = get_field('projet');
    $name = get_field('nom');
    $details = get_field('details'); 
    $processus = get_field('processus');
    $num = get_field('num');
    $titre_maquette = get_field('titre_maquette');
	$maquette_url = get_field('lien_maquette');
    $titre_prototype = get_field('prototype');
    $prototype_url = get_field('prototype_url');
    $banniere = get_field('banniere');
    $titre_lien = get_field('titre_lien');
    $titre_lien_2 = get_field('titre_lien_2'); 
    $titre_lien_3 = get_field('titre_lien_3'); 
    $titre_lien_4 = get_field('titre_lien_4'); 
    $titre_lien_5 = get_field('titre_lien_5');
    $lien_url_1 = get_field('lien_1'); 
    $lien_url_2 = get_field('lien_2'); 
    $lien_url_3 = get_field('lien_3'); 
    $lien_url_4 = get_field('lien_4'); 
    $lien_url_5 = get_field('lien_5'); 
    $desktop_url = get_field('desktop');
	$tablette_url = get_field('tablette');
    $mobile_url = get_field('mobile');

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

//Flèches précédent et suivant
	$nextPost = get_next_post();
    $previousPost = get_previous_post();
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<div class="container-single">
    <div class="title-description">
        <h1><?php  echo $project ?></h1>
        <h3 class="second-title margin-bottom"><?php echo $name ?></h2>
    </div>
    <div class="container-img">
        <img class ="single-photo" src="<?php echo $tablette_url ?>" alt="<?php the_title_attribute(); ?>" title="<?php echo get_the_title(get_post_thumbnail_id()) ?> sur Tablette">
        <img class ="single-photo" src="<?php echo $desktop_url ?>" alt="<?php the_title_attribute(); ?>" title="<?php echo get_the_title(get_post_thumbnail_id()) ?> sur Desktop">
        <img class ="single-photo" src="<?php echo $mobile_url ?>" alt="<?php the_title_attribute(); ?>" title="<?php echo get_the_title(get_post_thumbnail_id()) ?> sur Mobile">
    </div>
    <p class="text-align">Projet <?php echo $num ?> de la formation "Développeur WordPress" d'OpenClassrooms</p>
    <div class="container-details-process">
        <div class="project-details">
            <h2 class="second-title">Détails du projet</h2>
            <div class="paragraph-content">
                <p class="size"><?php echo $details ?></p>
                <img class="banniere" src="<?php echo $banniere ?>">
            </div>
        </div>
        <div class="project-process">
            <h2 class="second-title">Processus de réalisation du projet</h2>
            <div class="paragraph-content">
                <p class="size"><?php echo $processus ?></p>
            </div>
        </div>
    </div>
    <div class="container-maquette-languages">
        <div class="maquette-cert">
            <h2 class="second-title">Maquettes et certificats</h2>
            <div class="paragraph-content">
                <a href="<?php echo ($maquette_url) ?>" alt="<?php echo $titre_maquette ?>" title="<?php echo $titre_maquette ?>" target="_blank"><p class="text-align size"><?php echo $titre_maquette ?></p></a>
                <a href="<?php echo ($prototype_url) ?>" alt="<?php echo $titre_prototype ?>" title="<?php echo $titre_prototype ?>" target="_blank"><p class="text-align size"><?php echo $titre_prototype ?></p></a>
                <a href="<?php echo ($lien_url_1) ?>" alt="<?php echo $titre_lien ?>" title="<?php echo $titre_lien ?>" target="_blank"><p class="text-align size"><?php echo $titre_lien ?></p></a>
                <a href="<?php echo ($lien_url_2) ?>" alt="<?php echo $titre_lien_2 ?>" title="<?php echo $titre_lien_2 ?>" target="_blank"><p class="text-align size"><?php echo $titre_lien_2 ?></p></a>
                <a href="<?php echo ($lien_url_3) ?>" alt="<?php echo $titre_lien_3 ?>" title="<?php echo $titre_lien_3 ?>" target="_blank"><p class="text-align size"><?php echo $titre_lien_3 ?></p></a>
                <a href="<?php echo ($lien_url_4) ?>" alt="<?php echo $titre_lien_4 ?>" title="<?php echo $titre_lien_4 ?>" target="_blank"><p class="text-align size"><?php echo $titre_lien_4 ?></p></a>
                <a href="<?php echo ($lien_url_5) ?>" alt="<?php echo $titre_lien_5 ?>" title="<?php echo $titre_lien_5 ?>" target="_blank"><p class="text-align size"><?php echo $titre_lien_5 ?></p></a>     
            </div>
        </div>
        <div class="languages-used">
            <h2 class="second-title">Langages utilisés</h2>
            <div class="languages-content">
                <?php
                if (!empty($wordpress)) {
                    echo '<img src="' . esc_url($wordpress) . '" alt="Fait sur WordPress" title="Fait sur WordPress">';
                }
                if (!empty($html)) {
                    echo '<img src="' . esc_url($html) . '" alt="Codé avec HTML5" title="Codé avec HTML5">';
                }
                if (!empty($css)) {
                    echo '<img src="' . esc_url($css) . '" alt="Codé avec CSS3" title="Codé avec CSS3">';
                }
                if (!empty($javascript)) {
                    echo '<img src="' . esc_url($javascript) . '" alt="Codé avec JavaScript" title="Codé avec JavaScript">';
                }
                if (!empty($php)) {
                    echo '<img src="' . esc_url($php) . '" alt="Codé avec PHP8" title="Codé avec PHP8">';
                }
                if (!empty($bootstrap)) {
                    echo '<img src="' . esc_url($bootstrap) . '" alt="Utilisation de Bootstrap" title="Utilisation de Bootstrap">';
                }
                ?>
            </div>
        </div>
    </div>
    <?php
        $num = get_field('num');
        $total_projects = wp_count_posts('projet-oc')->publish;
        $previous_project_num = $num - 1;
        $next_project_num = $num + 1;

        $previous_project_id = $next_project_id = null;

        if ($previous_project_num >= 1) {
            $previous_project_link = get_permalink_for_project($previous_project_num);
            $previous_project_query = new WP_Query(array(
                'post_type' => 'projet-oc',
                'meta_query' => array(
                    array(
                        'key' => 'num',
                        'value' => $previous_project_num,
                        'compare' => '=',
                    ),
                ),
            ));

            if ($previous_project_query->have_posts()) {
                $previous_project_query->the_post();
                $previous_project_id = get_the_ID();
                wp_reset_postdata();
            }
        }

        if ($next_project_num <= $total_projects) {
            $next_project_link = get_permalink_for_project($next_project_num);
            $next_project_query = new WP_Query(array(
                'post_type' => 'projet-oc',
                'meta_query' => array(
                    array(
                        'key' => 'num',
                        'value' => $next_project_num,
                        'compare' => '=',
                    ),
                ),
            ));

            if ($next_project_query->have_posts()) {
                $next_project_query->the_post();
                $next_project_id = get_the_ID();
                wp_reset_postdata();
            }
        } else {
            $next_project_link = '';
        }
    ?>
    <div class="project-navigation">
        <?php if (!empty($previous_project_link)) : ?>
            <a href="<?php echo esc_url($previous_project_link); ?>" class="project-navigation-link">
                <h3><i class="fas fa-arrow-left"></i> Précédent</h3>
                <p class="project-link-right"><?php echo get_field('projet', $previous_project_id); ?></p>
            </a>
        <?php endif; ?>

        <?php if (!empty($next_project_link)) : ?>
            <a href="<?php echo esc_url($next_project_link); ?>" class="project-navigation-link">
                <h3>Suivant <i class="fas fa-arrow-right"></i></h3>
                <p class="project-link"><?php echo get_field('projet', $next_project_id); ?></p>
            </a>
        <?php endif; ?>
    </div>
    <?php get_template_part('/templates-part/social-icon'); ?>
</div>


<?php endwhile; endif ?> 

<?php get_footer(); ?>
