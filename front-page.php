<?php get_header(); ?>

<div class="container">
        <div id="accueil" class="hero-content">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h1>Julien Berry</h1>
                        <p>Développeur WordPress</p>
                        <img  class="photo-julien" src="<?php echo get_theme_file_uri() . '/assets/images/photojulien.png'; ?>" alt="Photo de Julien">
                        <p> Me contacter <i class="fas fa-chevron-right fa-little-icon"></i></p>
                    </div>
                    <div class="flip-card-back">
                        <h1>Contact</h1>
                        <p>Mes différents réseaux</p>
                        <div class="icon-group">
                            <div class="tooltip">
                                <span class="tooltiptext">LinkedIn de Julien Berry</span>
                            <i class="fab fa-linkedin-in fa-icon"></i>
                            </div>
                            <div class="tooltip">
                                <span class="tooltiptext">GitHub de Julien Berry</span>
                            <a href="https://github.com/AvatarPleiades" alt="GitHub de Julien Berry"><i class="fab fa-github fa-icon"></i></a>
                            </div>
                        </div>
                        <div class="icon-group">
                            <div class="tooltip">
                                <span class="tooltiptext">X de Julien Berry</span>
                            <i class="fab fa-twitter fa-icon"></i>
                            </div>
                            <div class="tooltip">
                                <span class="tooltiptext">Mail de Julien Berry</span>
                            <a href="mailto:berry.julien57@gmail.com" title="Envoyez-moi un e-mail"><i class="far fa-envelope fa-icon"></i></a>
                            </div>
                        </div>
                        <div>
                            <button class="contact-me">
                                <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                </span>
                                <a href="#contact"><span class="button-text">Me contacter</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/hero.png'; ?>" alt="Hero du site">
        </div>
        <div class="earth-element-container">
            <img onclick="EarthtypeWriter()" class="element-icon earth-element" src="<?php echo get_theme_file_uri() . '/assets/images/earth-element.png'; ?>" alt="Element terre">
            <div id="demo" class="earth-demo-text"></div>
        </div>
        <div class="water-element-container">
            <img onclick="WatertypeWriter()" class="element-icon water-element" src="<?php echo get_theme_file_uri() . '/assets/images/water-element.png'; ?>" alt="Element eau">
            <div id="demo-water" class="water-demo-text"></div>
        </div>
    </div>
    <div id="apropos" class="container-about-me">
        <h1 class="first-title fancy">À propos</h1>
        <div class="about-group">
            <div data-aos="flip-left" data-aos-offset="200" data-aos-duration="750" data-aos-easing="ease-in-sine" class="about-me">
                <h2 class="second-title">Je me présente</h2>
            <p>Je m'appelle Julien Berry.</p>
            <p>Je suis né à Metz en 1992. Depuis je ne cesse d'alimenter ma curiosité en expérimentant le maximum tous les domaines possibles.</p>
            <p class="margin-bottom">D'un naturel ouvert, et dans l'accueil de nouvelles expériences, j'ai pu évoluer dans divers milieux professionnels et m'épanouir dans une vie personnelle très diversifiée.</p>
            <p>J'ai pu lors de mon adolescence avoir une première expérience avec le développement Web en suivant les cours du "Site du Zéro", qui deviendra par la suite <a href="https://openclassrooms.com/fr/" title="Le site d'OpenClassrooms" alt="Site d'OpenClassrooms"><i class="fas fa-link link-deco"></i> OpenClassrooms</a> où je me formerais à nouveau dans ce domaine.</p>
            <p>Celle-ci couplée à la découverte de Photoshop, je fais mes premiers sites vitrines en HTML, CSS et PHP.</p>
            <p>Suite à l'obtention de mon BAC STI Génie Électronique en 2012, je décide de commencer à travailler pour être indépendant.</p>
            <p class="margin-bottom">C'est ainsi que je vis mon premier contact avec le monde professionnel, passant de manutentionnaire/livreur à Guichetier pour répondre aux besoins des entreprises.</p>
            <p>Suite à cela, je décide avec un ami de prendre quelques mois pour parcourir la France à pied avec une charrette à la rencontre de projets et d'entreprises écologiques/alternatives/éthiques.</p>
            <p>Dans le but des les interviewer et ainsi comprendre leur démarche et les partager au plus grand nombre à travers notre page l'Éveil Nomade sur <a href="https://www.facebook.com/eveilnomade" title="Page Facebook de l'Éveil Nomade" alt="Facebook de l'Éveil Nomade"><i class="fas fa-link link-deco"></i> Facebook</a>.</p>
            <p>Au passage, nous ramasserons au moins 1 sac de déchets par jour au bord des routes.</p>
            <div class="slider-container">
                <div class="img-comp-container">
                    <div class="img-comp-img">
                        <img src="<?php echo get_theme_file_uri() . '/assets/images/charette-eveilnomade.jpg'; ?>" title="Sur une route le long de la Garonne" alt="Photo de la charrette l'éveil nomade" width="300" height="200">
                    </div>
                    <div class="img-comp-img img-comp-overlay">
                        <img src="<?php echo get_theme_file_uri() . '/assets/images/journal-eveilnomade.jpg'; ?>" title="Notre passage dans le journal" alt="Photo de l'éveil nomade dans le journal" width="300" height="200">
                    </div>
                </div>
                <div class="img-comp-container">
                    <div class="img-comp-img">
                        <img src="<?php echo get_theme_file_uri() . '/assets/images/epicerie-eveilnomade.jpg'; ?>" title="Découverte du Marché Locale à Montpellier" alt="Photo de l'éveil nomade dans une épicerie" width="300" height="200">
                    </div>
                    <div class="img-comp-img img-comp-overlay">
                        <img src="<?php echo get_theme_file_uri() . '/assets/images/pont-eveilnomade.jpg'; ?>" title="La traverse d'un pont avec notre charrette faîte mains" alt="Photo de l'éveil nomade sur un pont" width="300" height="200">
                    </div>
                </div>
            </div><br>
            <p>Cette aventure renforça mon lien avec la nature et ma foi en l'humanité.</p>
            <p>Suite à cela je décide de travailler au Luxembourg dans les magasins cactus pour pouvoir par la suite faire la côte Ouest du Canada et des États-Unis en van.</p>
            <p>De retour en France, je trouve une place dans une entreprise de maraîchage bio, puis en tant que vendeur dans leur magasin à Kanfen.</p>
            <p>Début 2022, je décide d'aller vivre dans le Sud pour faire de nouvelles expériences, malheureusement je vais avoir un souci physique qui me scotchera au lit pendant quelque temps et remettant en question le fait de pouvoir continuer à travailler dans les métiers physiques.</p>
            <p>C'est ainsi qu'en mars 2023, je décide de commencer la formation "Développeur WordPress" proposée par <a href="https://openclassrooms.com/fr/" title="Le site d'OpenClassrooms" alt="Site d'OpenClassrooms"><i class="fas fa-link link-deco"></i> OpenClassrooms</a>. Et me voici !</p>
            </div>
            <div data-aos="flip-right" data-aos-offset="200" data-aos-duration="750" data-aos-easing="ease-in-sine" class="my-carreer">
                <h2 class="second-title">Mon parcours Pro</h2>
                <div class="timeline">
                    <div class="container-timeline left">
                        <div class="content">
                        <h3> Sept. 2021 - Jan. 2022</h3>
                        <p>Magasin BIO L'Arpent Vert - Vendeur<br>
                        <ul>
                        <li>Ouverture, fermeture et vente au magasin</li>
                        <li>Suivi des stocks et commandes</li>
                        <li>Réception des producteurs et de leurs livraisons</li>
                        </p>
                        </div>
                    </div>
                    <div class="container-timeline right">
                        <div class="content">
                            <h3>Juin 2021 - Jan. 2022</h3>
                            <p>GAEC L'Arpent Vert - Maraîcher<br>
                            <ul>
                            <li>Plantation, récolte, entretien</li>
                            <li>Préparation de commandes</li>
                            </p>
                        </div>
                    </div>
                    <div class="container-timeline left">
                        <div class="content">
                        <h3>Nov. 2019 - Fév. 2020</h3>
                            <p>Picard - Employé Polyvalent<br>
                            <ul>
                            <li>Vente en caisse</li>
                            <li>Mise en Rayon et suivi des stocks</li>
                            </p>
                        </div>
                    </div>
                    <div class="container-timeline right">
                        <div class="content">
                        <h3>Juin 2019 - Nov. 2019</h3>
                            <p>GAEC L'Arpent Vert - Maraîcher<br>
                            <ul>
                            <li>Plantation, récolte, entretien</li>
                            <li>Préparation de commandes</li>
                            </p>
                        </div>
                    </div>
                    <div class="container-timeline left">
                        <div class="content">
                            <h3>Fév. 2018 - Nov. 2018</h3>
                            <p>Field § Concept - Employé de rayon<br>
                            <ul>
                            <li>Mise en Rayon dans les supermarchés Cactus Luxembourg</li>
                            <li>Suivi des stocks et commandes</li>
                            </p>
                        </div>
                    </div>
                    <div class="container-timeline right">
                        <div class="content">
                            <h3>Sept. 2013 - Août 2016</h3>
                            <p>La Poste - Guichetier, Livreur<br>
                            <ul>
                            <li>Déchargement et tri des colis à la réception</li>
                            <li>Mise en place des dépôts facteurs</li>
                            <li>Collecte des différents bureaux «La Poste» du secteur</li>
                            <li>Gestion de guichet auprès des professionnels</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="flip-up" data-aos-duration="750" data-aos-offset="200" data-aos-easing="ease-in-sine" class="container-school-languages">
        <div class="school">
            <h2 class="second-title">Mes formations</h2>
            <p>
                <strong>2008-2012</strong><br> Bac STI Génie Électronique La Briquerie à Thionville<br>
                <strong>2013-2014</strong><br> Validation première année de Licence d'anglais
            </p>
        </div>
        <div class="languages">
            <h2 class="second-title">Mes langues</h2>
            <p>
            <img class="flag-icon" src="<?php echo get_theme_file_uri() . '/assets/images/france-icon.png'; ?>" title="Parle couramment Français" alt="Drapeau Français"> Langue maternelle<br>
            <img class="flag-icon" src="<?php echo get_theme_file_uri() . '/assets/images/united-icon.png'; ?>" title="Parle un Anglais scolaire"alt="Drapeau du Royaume-Uni"> Scolaire<br>
            <img class="flag-icon" src="<?php echo get_theme_file_uri() . '/assets/images/german-icon.png'; ?>" title="Parle un Allemand scolaire"alt="Drapeau Allemand"> Scolaire
            </p>
        </div>
    </div>
    <div class="container-fire">
        <div class="fire-hero">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/fire-hero.png'; ?>" alt="Hero élément du feu">
        </div>
        <div class="fire-element-container">
            <img onclick="FiretypeWriter()" class="element-icon fire-element" src="<?php echo get_theme_file_uri() . '/assets/images/fire-element.png'; ?>" alt="Element feu">
            <div id="demo-fire" class="fire-demo-text"></div>
        </div>
    </div>
    <div id="portfolio" class="container-portfolio">
        <h1 class="first-title fancy">Mon Portfolio</h1>
        <div data-aos="zoom-in-up" data-aos-duration="750" data-aos-offset="200" data-aos-easing="ease-in-sine" class="container-projects">
            <h2 class="second-title">Les Projets OpenClassrooms</h2>
            <p>Retrouvez dans ce slider tous les projets réalisés lors de la formation de Développeur WordPress chez OpenClassrooms.</p>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/julien-berry-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/emoving-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/mota-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/medit-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/koukaki-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/printit-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/chic-dressing-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/planty-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/the-artbox-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/simpl-vintage-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/booki-view.png'); ?>">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_theme_file_uri('/assets/images/projets/riding-cities-view.png'); ?>">
                </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div>
                <button class="all-projects type margin-bottom">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-project">Tous les projets</span>
                </button>
            </div>
        </div>    
    </div>
    <div id="contact" class="container-contact">
        <h1 class="first-title fancy">Me contacter</h1>
        <div class="container-form-info">
            <div data-aos="flip-left"  data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="form-side">
                <h2 class="second-title">Contactez-moi</h2>
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="a1b0538" title="Me contacter"]'); ?>
                </div>
            </div>
            <div data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="info-side">
                <h2 class="second-title">Mes informations</h2>
                <p>
                    <strong>Adresse:</strong> rue du pré au lièvre 57310 GUÉNANGE<br>
                    <strong>E-mail:</strong> <a href="mailto:berry.julien57@gmail.com" title="Envoyez-moi un e-mail"><i class="fas fa-envelope"></i> berry.julien57@gmail.com</a><br>
                    <strong>Téléphone:</strong> 06.25.78.47.54<br><br>
                </p>
                <img class="info-picture" title="Canon Beach - Oregon, USA" src="<?php echo get_theme_file_uri('/assets/images/julien-canada.jpg'); ?>">
            </div>
        </div>
    </div>
    <div data-aos="flip-down" class="container-icons">
        <i class="fab fa-linkedin-in bottom-icon"></i>
        <a href="https://github.com/AvatarPleiades" title="GitHub de Julien Berry" alt="GitHub de Julien Berry"><i class="fab fa-github bottom-icon"></i></a>
        <i class="fab fa-twitter bottom-icon"></i>
        <a href="mailto:berry.julien57@gmail.com" title="Envoyez-moi un e-mail"><i class="far fa-envelope bottom-icon"></i></a>
    </div>
</div>

<?php get_footer(); ?>