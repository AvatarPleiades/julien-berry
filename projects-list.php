<?php get_header(); ?>

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
    </div>
</div>

<?php get_footer(); ?>