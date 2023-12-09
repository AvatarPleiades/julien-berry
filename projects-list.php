<?php get_header(); ?>

<?php 
// Champs ACF
$project = get_field('projet');
$name = get_field('nom');
$details = get_field('details'); 
$num = get_field('num');
$banniere = get_field('banniere');
$desktop_url = get_field('desktop');
$apercu = get_field('apercu');

// Langages utilisés
$wordpress = get_field('wordpress');
$html = get_field('html');
$css = get_field('css');
$javascript = get_field('javascript');
$php = get_field('php');
$bootstrap = get_field('bootstrap');

// Récupération de l'id et de l'url    
$id = get_the_ID();
$url = get_permalink();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container-list">
    <div class="title-description">
        <h1>Portfolio</h1>
        <h3 class="second-title margin-bottom"><?php echo $name ?></h2>
    </div>
    <div class="subtitle">
        <p class="text-align">Bienvenue sur la page regroupant l'ensemble de mes projets, qu'ils soient personnels ou ceux de la formation d'OpenClassrooms.</p>
        <p class="text-align margin-bottom">Explorez cette collection variée, filtrée par langage, pour découvrir mes compétences en <span></span>, WordPress et Bootstrap.</p> 
    </div>
    <div class="filter-buttons">
        <button data-filter="all" onclick="filterSelection(this)">Tous</button>
        <button data-filter="html" onclick="filterSelection(this)">HTML</button>
        <button data-filter="css" onclick="filterSelection(this)">CSS</button>
        <button data-filter="javascript" onclick="filterSelection(this)">JavaScript</button>
        <button data-filter="php" onclick="filterSelection(this)">PHP</button>
        <button data-filter="wordpress" onclick="filterSelection(this)">WordPress</button>
        <button data-filter="bootstrap" onclick="filterSelection(this)">Bootstrap</button>
    </div>
    <div class="projects-grid">
        <?php 
        $args = array(
            'post_type' => 'projet-oc',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); 
                $wordpress = get_field('wordpress');
                $html = get_field('html');
                $css = get_field('css');
                $javascript = get_field('javascript');
                $php = get_field('php');
                $bootstrap = get_field('bootstrap');
            ?>
            <a href="<?php the_permalink(); ?>" data-aos="zoom-in" class="project-block <?php echo ($wordpress ? 'wordpress ' : '') . ($html ? 'html ' : '') . ($css ? 'css ' : '') . ($javascript ? 'javascript ' : '') . ($php ? 'php ' : '') . ($bootstrap ? 'bootstrap ' : ''); ?>">
                <div class="project-img">
                    <img class="margin-bottom" src="<?php echo esc_url(get_field('desktop')); ?>">      
                </div>
                <div class="project-content">
                    <h3 class="text-align margin-bottom"><?php echo get_field('projet') ?></h3>
                    <p class="margin-bottom"><?php echo get_field('apercu') ?></p>
                    <div class="languages-list margin-bottom">
                    <?php
                        $langages = array('wordpress', 'html', 'css', 'javascript', 'php', 'bootstrap');
                        foreach ($langages as $langage) {
                            $langage_url = get_field($langage);
                            if ($langage_url) {
                                echo '<img src="' . esc_url($langage_url) . '" alt="' . esc_attr($langage) . '" title="' . esc_attr($langage) . '">';
                            }
                        }
                        ?>
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
    <?php get_template_part('/templates-part/social-icon'); ?>
</div>

<?php endwhile; endif ?> 

<?php get_footer(); ?>