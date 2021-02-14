<!doctype html>
<html lang="fr">

<head>
    <title>KanysPhotoGraphie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bodyPageContact">
    <div class="container">
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top" id="navbarAllPage">
            <a class="navbar-brand text-white" href="index.php">KANY'S</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pageAccueil.php">
                            <i class="fab fa-instagram"></i>Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="portrait.php">
                            <i class="fab fa-instagram"></i>Portrait</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="decorationInterieur.php">
                            <i class="fab fa-instagram"></i>Décoration Intérieur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.php">
                            <i class="fab fa-instagram"></i>Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="admin.php">
                            <i class="fab fa-instagram"></i>Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="tableBord.php">
                            <i class="fab fa-instagram"></i>Tableau de Bord</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- fin de la navbars-->


        <!-- title -->
        <div id="textColorPageAccueil" class="text-center">
            <h1 class="cardTitle mt-5">Contact</h1>
        </div>
        <!-- fin du title -->

        <!-- formulaire de contact -->
        <div id="cardFormContact" class="container-fluid">
            <div id="textCard" class="row card mt-3 mb-3 text-white">
                <form id="formContactPage" class="ml-5 mt-4 mr-5">
                    <div class="row mb-4">
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label" for="flastname">Prénom</label>
                                <input type="text" id="lastname" class="form-control" name="lastname" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label" for="firstname">Nom</label>
                                <input type="text" id="firstname" class="form-control" name="firstname" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="adressMail">E-mail</label>
                                <input type="email" id="adressMail" class="form-control" name="adressMail" />
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline">
                                <label class="form-label" for="phoneNnumber">Télèphone</label>
                                <input type="number" id="phoneNnumber" class="form-control" name="phoneNnumber" />
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-outline mr-5">
                            <label for="select">Selectionner la raison de votre demande</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Ouvrez ce menu de sélection</option>
                                <option value="1">Shooting photo</option>
                                <option value="2">Décoration Intérieure</option>
                                <option value="3">Renseignement</option>
                                <option value="3">Autres</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-outline">
                            <label class="form-label" for="textAreaExample">Message</label>
                            <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                            <button type="submit" id="buttonAllPage"
                                class="text-center btn justify-content-center">Envoyer</button>
                        </div>
                    </div>
                    <div id="imagePageContact" class="text-center">
                        <img src="assets/img/img2/photoDuSite/imagePageContact.png" alt="">
                    </div>
            </div>
            </form>
        </div>
    </div>


    <!-- <div>
        <img src="assets/img/img2/photoDuSite/Web 1280 – 6.png" alt="image de la card contact">
    </div> -->

    <!-- footer -->
    <footer id="allFooter" class="text-white text-center text-lg-start">
        <div class="container-fluid p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fab fa-facebook"></i>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Mes réseaux Sociaux</h5>
                    <div class="row text-center ml-5">
                        <div class="ml-5">
                            <a href="https://www.facebook.com/toure.aisettou"><img
                                    src="assets/autres/iconesReseauSociaux/Web 1280 – 12.png"
                                    class="rounded-circle"></a>
                        </div>
                        <div class="ml-3">
                            <a href="https://www.instagram.com/kanysphotographie/"><img
                                    src="assets/autres/iconesReseauSociaux/Web 1280 – 11.png"
                                    class="rounded-circle"></a>
                        </div>
                        <div class="ml-3">
                            <a href="#!"><img src="assets/autres/iconesReseauSociaux/Web 1280 – 13.png"
                                    class="rounded-circle"></a>
                        </div>
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3">
            © 2021 Copyright: KanyPhotography
            <a class="text-white" href="https://mdbootstrap.com/"></a>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
    <script src="script.js"></script>
</body>

</html>