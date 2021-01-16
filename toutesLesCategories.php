<!doctype html>
<html lang="fr">

<head>
    <title>KanysPhotoGraphie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    </script>
</head>

<body>
    <div class="containeur-fluid">
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top" id="navbarPageAllCategorie">
            <a class="navbar-brand text-white" href="index.php">KANY'S</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="toutesLesCategories.php">
                            <i class="fab fa-instagram"></i>Toutes les catégories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="portrait.php">
                            <i class="fab fa-instagram"></i>Portrait</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="decorationInterieur.php">
                            <i class="fab fa-instagram"></i>décoration Intérieur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.php">
                            <i class="fab fa-instagram"></i>Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="aPropos.php">
                            <i class="fab fa-instagram"></i>A propos</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- fin de la navbar-->

        <!-- premier image de la page touteLesCategories.html -->
        <div class="blockPhotoPageAllCategories">
            <div class="row">
                <!-- <div class="col-md-12 mb-3"> -->
                <div class="bg-image hover-zoom">
                    <img src="assets/img/biggyEtOUmou2.png" id="firstImgAllCategories" class="img-fluid z-depth-1"
                        alt="Responsive image">
                </div>
            </div>
        </div>
        <div>
            <h1>Toutes les catégories</h1>
        </div>
        <!-- paragraphe  -->
        <div class="content">
            <p>Lorem Ipsum est simplement un texte factice de l'industrie de l'impression et de la composition.
                Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500,
                quand un imprimeur inconnu a pris une galère de caractères et l'a brouillée pour en faire un livre de
                spécimens.
                Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique,
                demeurant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles
                Letraset contenant des passages du Lorem Ipsum,
                et plus récemment avec un logiciel de publication assistée par ordinateur comme Aldus PageMaker
                comprenant des versions de Lorem Ipsum.
                Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique,
                demeurant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles
                Letraset contenant des passages du Lorem Ipsum,
                et plus récemment avec un logiciel de publication assistée par ordinateur comme Aldus PageMaker
                comprenant des versions de Lorem Ipsum.
            </p>

            <p>Lorem Ipsum est simplement un texte factice de l'industrie de l'impression et de la composition.
                Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500,
                quand un imprimeur inconnu a pris une galère de caractères et l'a brouillée pour en faire un livre de
                spécimens.
                Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique,
                demeurant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles
                Letraset contenant des passages du Lorem Ipsum,
                et plus récemment avec un logiciel de publication assistée par ordinateur comme Aldus PageMaker
                comprenant des versions de Lorem Ipsum.
                Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique,
                demeurant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles
                Letraset contenant des passages du Lorem Ipsum,
                et plus récemment avec un logiciel de publication assistée par ordinateur comme Aldus PageMaker
                comprenant des versions de Lorem Ipsum.
            </p>
            <!-- fin de paragraphe -->
        </div>
        <!-- caroussel page Toutes les categories -->
        <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
            <ol class="carousel-indicators">
                <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0" class="active"></li>
                <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1"></li>
                <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/hawaSawane1.png" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="assets/img/maraEtBinta.png" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="assets/img/kabaEtBarole.png" class="d-block w-100" alt="..." />
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précedent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </a>
        </div>
        <!-- fin du caroussel -->
        <!--premier bloc 5 image -->
        <div class="row" class="imgSurvolAllCategories">
            <div class="col-lg-4 col-md-12 mb-3 hover-zoom">
                <img src="assets/img/imagePageDecoInterieur/meubleTVetTv.png" class="img-fluid z-depth-1"
                    alt="Responsive image">
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <img src="assets/img/lesFillesMannequin.png" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <img src="assets/img/soeurVoileVoiture2.png" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
        </div>
        <div class="row" class="imgSurvolAllCategories">
            <div class="col-md-6 mb-3">
                <img src="assets/img/photoDecoInterior/salonBlancNoir.jpg" class="img-fluid z-depth-1"
                    alt="Responsive image">
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/photoDecoInterior/litBlancChambre.jpg" class="img-fluid z-depth-1"
                    alt="Responsive image">
            </div>
        </div>
        <!-- deuxieme bloc 5 image -->
        <div class="row" class="imgSurvolAllCategories">
            <div class="col-lg-4 col-md-12 mb-3">
                <img src="assets/img/biggyEtOumou.png" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <img src="assets/img/photoDecoInterior/cuisine.jpg" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <img src="assets/img/lesFillesPlage.png" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
        </div>
        <div class="row" class="imgSurvolAllCategories">
            <div class="col-md-6 mb-3">
                <img src="assets/img/mara.png" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/groupeDesGarcon.png" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
        </div>
        <!--troisiéme bloc 5 image -->
        <div class="row" class="imgSurvolAllCategories">
            <div class="col-lg-4 col-md-12 mb-3">
                <img src="assets/img/hawaSawane2.png" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <img src="assets/img/imagePageDecoInterieur/newCanapeDeStoo.png" class="img-fluid z-depth-1"
                    alt="Responsive image">
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <img src="assets/img/ourkty4.png" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
        </div>
        <div class="row" class="imgSurvolAllCategories">
            <div class="col-md-6 mb-3">
                <img src="assets/img/imagePageDecoInterieur/salon3.png" class="img-fluid z-depth-1"
                    alt="Responsive image">
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/ourkty10.png" class="img-fluid z-depth-1" alt="Responsive image">
            </div>
            <!-- dernier bloc image page allCategggories -->
            <div class="row" class="imgSurvolAllCategories">
                <div class="col-lg-4 col-md-12 mb-3 hover-zoom">
                    <img src="assets/img/silakré.png" class="img-fluid z-depth-1" alt="Responsive image">
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <img src="assets/img/lasderEtIsmael.png" class="img-fluid z-depth-1" alt="Responsive image">
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <img src="assets/img/toubab.png" class="img-fluid z-depth-1" alt="Responsive image">
                </div>
            </div>
            <div class="row" class="imgSurvolAllCategories">
                <div class="col-md-6 mb-3">
                    <img src="assets/img/lesFillesPlage.png" class="img-fluid z-depth-1" alt="Responsive image">
                </div>
                <div class="col-md-6 mb-3">
                    <img src="assets/img/imagePageDecoInterieur/deco1.png" class="img-fluid z-depth-1"
                        alt="Responsive image">
                </div>
                <!-- fin de bloc -->
            </div>
            <div class="float-right">
                <a href="#" class="btn bg-dark text-white" id="buttonHautDePage">↑</a>
            </div>
        </div>
    </div>
    </div>
    <div class="footerPageTouteCategories">
        <footer class="footerPageTouteLesCategories">
            <div class="iconeReseauSociaux">
                <!-- Facebook -->
                <a class="btn" style="background-color: #3b5998" href="https://www.facebook.com/toure.aisettou"
                    role="button"><i class="fab fa-facebook-f">Facebook</i></a>
                <!-- Instagram -->
                <a class="btn" style="background-color: #ac2bac"
                    href="https://www.instagram.com/kanysphotographie/?hl=fr" role="button"><i
                        class="fab fa-instagram">Instagram</i></a>
                <p class="paragraphFooter">© Copyright KanysPhotoGraphie 2020</p>
            </div>

        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
    <script src="script.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>