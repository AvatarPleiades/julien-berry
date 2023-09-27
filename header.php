<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <?php wp_head(); ?> 
    </head>
    <body <?php body_class(); ?> >
        <?php wp_body_open(); ?> 
        
        <header>
            <div class="julien_berry_logo">
                <a href="https://portfolio.julien-berry.fr/">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/logo-berry.png';?>" alt="Logo de Julien Berry"></a>
            </div>
            <nav>
            <ul>
                <li><a class="fill menu-link" href="#accueil">Accueil</a></li>
                <li><a class="fill menu-link" href="#apropos">À propos</a></li>
                <li><a class="fill menu-link" href="#portfolio">Portfolio</a></li>
                <li><a class="fill menu-link" href="#contact">Contact</a></li>
            </ul>
                <div class="container-burger-icons">
                    <i class="fab fa-linkedin-in burger-icon"></i>
                    <a href="https://github.com/AvatarPleiades" title="GitHub de Julien Berry" alt="GitHub de Julien Berry"><i class="fab fa-github burger-icon"></i></a>
                    <i class="fab fa-twitter burger-icon"></i>
                    <a href="mailto:berry.julien57@gmail.com" title="Envoyez-moi un e-mail"><i class="far fa-envelope burger-icon"></i></a>
                </div>
            </nav>
            <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            </div>
        </div>
        </header>
        <main>