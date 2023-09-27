<?php get_header(); ?>

<?php 
// Champs ACF
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
        <h1><?php  echo get_the_title(get_post_thumbnail_id()) ?></h1>
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
            <h2 class="second-title">Langages utilisés et autres liens</h2>
            <div class="paragraph-content">
                <p class="size">Pour réaliser ce projet, j'ai eu recours à ces langages:</p>
            </div>
        </div>
    </div>
    <?php get_template_part('/templates-part/social-icon'); ?>
</div>


<?php endwhile; endif ?> 

<?php get_footer(); ?>
