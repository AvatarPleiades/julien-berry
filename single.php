<?php get_header(); ?>

<?php 
// Champs ACF
    $details = get_field('details'); 
    $processus = get_field('processus');
    $titre_maquette = get_field('titre_maquette');
	$maquette_url = get_field('lien_maquette');
    $titre_lien = get_field('titre_lien'); 
    $lien_url = get_field('liens'); 
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
        <h1 class="first-title"><?php  echo get_the_title(get_post_thumbnail_id()) ?></h1>
    </div>
    <div class="container-img">
        <img class ="single-photo" src="<?php echo $tablette_url ?>" alt="<?php the_title_attribute(); ?>">
        <img class ="single-photo" src="<?php echo $desktop_url ?>" alt="<?php the_title_attribute(); ?>">
        <img class ="single-photo" src="<?php echo $mobile_url ?>" alt="<?php the_title_attribute(); ?>">
    </div>
    <p class="text-align">Projet de la formation "Développeur WordPress" d'OpenClassrooms</p>
    <div class="container-details-process">
        <div class="project-details">
            <h2 class="second-title">Détails du projet</h2>
            <p><?php echo $details ?></p>
        </div>
        <div class="project-process">
            <h2 class="second-title">Processus de réalisation du projet</h2>
            <p><?php echo $processus ?></p>
        </div>
    </div>
    <div class="container-maquette-languages">
        <div class="maquette-cert">
            <h2 class="second-title">Maquettes et certificats</h2>
            <a href="<?php echo ($maquette_url) ?>"><p class="text-align"><?php echo $titre_maquette ?></p></a>
        </div>
        <div class="languages-used">
            <h2 class="second-title">Langages utilisés et autres liens</h2>
            <p><?php echo $processus ?></p>
        </div>
    </div>
</div>


<?php endwhile; endif ?> 

<?php get_footer(); ?>
