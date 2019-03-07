<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <title>Marie-Ange REMY - développeuse web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Marie-Ange REMY - développeuse web et web mobile" />
    <meta property="og:type" content="article" />
    <link rel="icon" href="https://marieanger.promo-27.codeur.online/site-perso/images/mug.ico" />
    <meta name=”twitter:card” content=”summary” />
<meta name=”twitter:site” content=”https://marieanger.promo-27.codeur.online/site-perso” />
<meta name=”twitter:title” content=”Marie-Ange REMY - développeuse web” />
<meta name=”twitter:description” content=”Bienvenue sur le site de Marie-Ange REMY - développeuse web et web mobile.” />
<meta name=”twitter:image” content=”https://marieanger.promo-27.codeur.online/site-perso/images/2018-12-18-IMG_5632.jpg” />
    <meta property="og:url" content="https://marieanger.promo-27.codeur.online/site-perso/" />
    <meta property="og:image" content="https://marieanger.promo-27.codeur.online/site-perso/images/2018-12-18-IMG_5632.jpg" />
    <meta name="description" content="Bienvenue sur le site de Marie-Ange REMY - développeuse web et web mobile">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One|Sedgwick+Ave" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body data-spy="scroll" data-target="#navbar-example2" data-offset="100" class="d-flex flex-column ">
    <header id="home">
        <div class="container-fluid" id="navbar">
            <div class="container">
                <nav id="navbar-example2" class="navbar navbar-light navbar-expand-lg row">
                    <div class="col-12">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Accueil<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">À propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#hardskills">Hard skills</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#timeline">soft skills</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#projects">Projets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contactme">Contact</a>
                                </li>
                                <li><a href="https://www.linkedin.com/in/marie-ange-remy-576044135/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="flex-container" id="header2">
            <h1>Marie-Ange REMY</h1><br>
            <h2>Développeur web junior</h2>
            <button><a href="#projects">découvrez mes projets</a></button>
        </div>

    </header>
    <section id="about" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7">
                    <h3>À propos</h3>
                    <p>33 ans, globe-trotter, écolo et connectée.</p>
                    <p>Reconvertie du secteur de l'assurance, je suis tombée dans la marmite du code quand j'étais <span>plus si</span> petite.</p>
                    <p>Amatrice de lecture, photographie séries et cinéma, j'aime créer et aller au bout des choses.</p>
                    <p><em>"Internet est un outil puissant pour qui sait s'en servir."</em></p>
                    <button><a href="#contactme">contactez-moi</a></button>

                </div>
                <div class="col-md-5">
                    <img src="images/2018-12-18-IMG_5632.jpg" class="img" height="480" alt="photo développeuse" id="moi">
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid" id="hardskills">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Compétences techniques</h3>
                </div>
                <div class="col-8 offset-2">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/computer.svg" height="250" alt="dessin noir et blanc ordinateur">
                                <div class="carousel-caption d-md-block">
                                    <h4>intégration html & css</h4>
                                    <p>Codage manuel respectueux des standards du web</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/javascript.svg" height="250" alt="dessin noir et blanc ordinateur">
                                <div class="carousel-caption d-md-block">
                                    <h4>Apporter du dynamisme</h4>
                                    <p>Grâce à JavaScript, Ajax ou encore jQuery</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/home.svg" height="250" alt="dessin noir et blanc ordinateur">
                                <div class="carousel-caption d-md-block">
                                    <h4>utilisation d'un CMS</h4>
                                    <p>Mise en place, modification, gestion de WordPress</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/responsive.svg" height="250" alt="dessin noir et blanc ordinateur">
                                <div class="carousel-caption d-md-block">
                                    <h4>conception multiplateforme</h4>
                                    <p>pour le responsive</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/coding.svg" height="250" alt="dessin noir et blanc ordinateur">
                                <div class="carousel-caption d-md-block">
                                    <h4>référencement naturel SEO</h4>
                                    <p>pour l'accessibilité et l'ergonomie des pages web</p>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="timeline" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Compétences transversales</h3>
                </div>
                <div class="col-12">
                    <ul id="list">
                        <li class="timeline-box">
                            <div class="timeline-box_line"></div>
                            <div class="timeline-box_content">
                                <h4>2007</h4>
                                <h4><span>Anglais</span> - licence LEA</h4>
                                <p>Grâce à mon diplôme en langues et mes nombreux voyages, j'ai appris la tolérance et lutte tous les jours contre les préjugés et l'étroitesse d'esprit. </p>
                            </div>
                        </li>
                        <li class="timeline-box">
                            <div class="timeline-box_line"></div>
                            <div class="timeline-box_content">
                                <h4>2007-2009</h4>
                                <h4><span>Travail en équipe</span> - manager en restauration</h4>
                                <p>J'apprécie le travail collaboratif, je suis capable d'échanger mes idées et de prendre des initiatives. En véritable moteur, je sais motiver les autres et pense "groupe" plutôt que "moi".</p>
                            </div>
                        </li>
                        <li class="timeline-box">
                            <div class="timeline-box_line"></div>
                            <div class="timeline-box_content">
                                <h4>2009-2014</h4>
                                <h4><span>Optimisme</span> - départ à l'étranger</h4>
                                <p>Persévérante, je ne regarde pas le passé mais l'avenir. Ma capacité à trouver des solutions et ma curiosité intellectuelle ont été très appréciées en Belgique.</p>
                            </div>
                        </li>
                        <li class="timeline-box">
                            <div class="timeline-box_line"></div>
                            <div class="timeline-box_content">
                                <h4>2015-2018</h4>
                                <h4><span>Communication</span> - commerciale en mutualité</h4>
                                <p>Je suis capable d'écouter, communiquer et apporter des solutions. Je sais transmettre un message, une information clairs et accessibles à tous. </p>
                            </div>
                        </li>
                        <li class="timeline-box">
                            <div class="timeline-box_line"></div>
                            <div class="timeline-box_content">
                                <h4>2019</h4>
                                <h4><span>Créativité</span> - reconversion professionnelle</h4>
                                <p>D'une nature curieuse, je prouve aujourd'hui que je suis capable d'imaginer des solutions nouvelles, de développer des idées innovantes, de m'adapter au changement.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>mes projets</h3>
                </div>
                <div class="col-12 projet" id="restaurant">
                    <div class="bloc">
                        <h2>Intégration de maquette - Restaurant Lambda</h2>
                        <p>Projet d'accueil, site présentant un restaurant. Réalisé à partir d'une maquette sur Photoshop en collaboration avec Adrien Boilley.</p>
                        <div class="row">
                            <div class="col-6">
                                <ul>Technologies utilisées:
                                    <li>Photoshop</li>
                                    <li>HTML5 & CSS3</li>
                                    <li>Bootstrap</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <a href="https://marieanger.promo-27.codeur.online/restaurant_lambda/" target="_blank"> <button>voir le site en ligne</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 projet" id="mugul">
                    <div class="bloc">
                        <h2>Application JavaScript - le Grand Mugul</h2>
                        <p>Projet d'initiation à JavaScript, la consigne étant de révisiter le jeu du plus ou moins. Thème graphique libre, doit être responsive. Réalisé avec la collaboration de Ghislain Billard et Lucas Boissier.</p>
                        <div class="row">
                            <div class="col-6">
                                <ul>Technologies utilisées:
                                    <li>Photoshop</li>
                                    <li>HTML5 & CSS3</li>
                                    <li>JavaScript</li>
                                    <li>Bootstrap</li>
                                    <li>Sass</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <a href="https://marieanger.promo-27.codeur.online/le_grand_mugul/" target="_blank"> <button>voir le site en ligne</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 projet" id="blueasy">
                    <div class="bloc">
                        <h2>Intégration de maquette - Blueasy</h2>
                        <p>Projet de clôture du module HTML, portfolio présentant un photographe. Réalisé à partir d'une maquette sur Photoshop de manière individuelle.</p>
                        <div class="row">
                            <div class="col-6">
                                <ul>Technologies utilisées:
                                    <li>Photoshop</li>
                                    <li>HTML5 & CSS3</li>
                                    <li>Bootstrap</li>
                                    <li>JavaScript</li>
                                    <li>Sass</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <a href="https://marieanger.promo-27.codeur.online/blueasy/" target="_blank"><button>voir le site en ligne</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 projet" id="western">
                    <div class="bloc">
                        <h2>Application JavaScript - Western Invaders</h2>
                        <p>Projet de confirmation JavaScript. La consigne étant de revisiter le jeu Space Invaders. Thème graphique libre, pas de contrainte d'adaptabilité. Réalisé avec la collaboration de Coralie Leclerc et Aurélien Caillaud.</p>
                        <div class="row">
                            <div class="col-6">
                                <ul>Technologies utilisées:
                                    <li>Photoshop</li>
                                    <li>HTML5 & CSS3</li>
                                    <li>JavaScript</li>
                                    <li>Sass</li>
                                    <li>Git</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <a href="https://marieanger.promo-27.codeur.online/western_invaders/" target="_blank"><button>voir le site en ligne</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 projet" id="cinevore">
                    <div class="bloc">
                        <h2>Annuaire cinéma - cinéVore</h2>
                        <p>Projet d'introduction à PHP et aux bases de données. Annuaire cinéma avec espace membre, découverte du modèle MVC. Thème graphique libre, responsive. Réalisé en collaboration avec Adrien Boilley et Sandra Soavolory.</p>
                        <div class="row">
                            <div class="col-6">
                                <ul>Technologies utilisées:
                                    <li>Photoshop</li>
                                    <li>HTML5 & Bootstrap</li>
                                    <li>CSS3 & Sass</li>
                                    <li>JavaScript</li>
                                    <li>Git</li>
                                    <li>PHP7 & Twig & MySQL</li>
                                </ul>

                            </div>
                            <div class="col-6">
                                <a href="https://marieanger.promo-27.codeur.online/projet_cine/" target="_blank"><button>voir le site en ligne</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 projet" id="cafeinline">
                    <div class="bloc">
                        <h2>WordPress - Caféinline Blog Promo</h2>
                        <p>Projet d'initiation à WordPress présentant notre promotion. Création d'un thème from scrath et thème enfant. Réalisé à partir d'une maquette sur Photoshop et avec la collaboration de Ghislain Billard et Christian Anis.</p>
                        <div class="row">
                            <div class="col-6">
                                <ul>Technologies utilisées:
                                    <li>Photoshop</li>
                                    <li>WordPress</li>
                                    <li>HTML5 & Bootstrap</li>
                                    <li>CSS3 & Sass</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <a href="https://marieanger.promo-27.codeur.online/cafeinline/" target="_blank"><button>voir le site en ligne</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contactme" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h3>contactez-moi</h3>
                    <form id="contact" method="post" action="traitement.php">
                        <fieldset>
                            <legend>Vos coordonnées</legend>
                            <label for="nom">Nom :</label><input type="text" id="nom" name="nom" />
                            <label for="email">Email :</label><input type="text" id="email" name="email" />
                        </fieldset>
                        <fieldset>
                            <legend>Votre message</legend>
                            <label for="objet">Objet :</label><input type="text" id="objet" name="objet" />
                            <label for="message">Message :</label><textarea id="message" name="message" cols="30" rows="8"></textarea>
                        </fieldset>
                        <div id="errorMsg"></div>
                        <div id="oksuccess"></div>
                        <button type="submit" name="envoi" id="btn">Envoyer</button>
                    </form>
                </div>
                <div id="map" class="col-xs-12 col-md-6"></div>

            </div>
        </div>
    </section>
    <footer class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <p><span>Marie-Ange REMY </span>© 2019 </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <p> Toute reproduction interdite</p>
                </div>
                <div class="col-xs-12 col-md-4"><a href="mentions.html" target="_blank">Mentions légales</a></div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
    <script src="main.js"></script>
</body>

</html>