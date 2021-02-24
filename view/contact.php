<?php 
require_once '../controllers/controller-formContact.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Contact</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">


</head>

<body>
    <thead>
        <div class="container">
            <!--Navbar -->
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top" id="navbarAllPage">
                <a class="navbar-brand text-white" href="../index.php">KANY'S</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../view/pageAccueil.php">
                                <i class="fab fa-instagram"></i>Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../view/portrait.php">
                                <i class="fab fa-instagram"></i>Portrait</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../view/decorationInterieur.php">
                                <i class="fab fa-instagram"></i>Décoration Intérieur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../view/articles.php">
                                <i class="fab fa-instagram"></i>Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../view/contact.php">
                                <i class="fab fa-instagram"></i>Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- fin de la navbar-->
    </thead>
    <main>
        <div class="py-5 text-center mt-5">
            <h2>Formulaire de Contact</h2>
            <p class="lead">Vous trouverez ci dessous un formmulaire de contact pour me contacter, Veuillez indiquer
                la raison de votre message précissement dans la partie message d'édier en bas du formulaire. </p>
        </div>

        <div class="row g-3">
            <div class="col-md-5 col-lg-4 order-md-last">
                <img src="../assets/autres/videoEtPhotoFondEcran/imageForm.png" alt="">
            </div>
            <div class="col-md-7 col-lg-8 ml-3">
                <h4 class="mb-3">Vos Coordonnées</h4>
                <form class="needs-validation ml-3" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="lastname" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastname" placeholder="DUPOND" name="lastname"
                                value="" required>
                            <div class="errors"><?= $error['lastname']?? ''?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="firstname" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Marie" name="firstname"
                                value="" required>
                            <div class="errors"><?= $error['firstname']?? ''?>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="phone" class="form-label">Télèphone</label>
                                <input type="text" class="form-control" id="phone" placeholder="1234 Main St"
                                    name="phone" value="" required>
                                <div class="errors"><?= $error['phone']?? ''?>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com"
                                    name="message" value="" required>
                                <div class="error"><?= $errors['email']?? ''?>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Ecrivez votre message ici"
                                id="floatingTextarea" required></textarea>
                            <label for="floatingTextarea">Message</label>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button type="submit" id="buttonAllPage" class="btn text-white center mb-2"
                            name="addVisitorBtn">Envoyer</button>
                    </div>

                    <hr class="my-4">

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Enregistrer les informations
                            saisi</label>
                    </div>

                    <hr class="my-4">

            </div>
        </div>
        </form>
        </div>
        </div>
    </main>

    <nav aria-label="navigation">
        <div class="pager">
            <p><a href="articles.php" class="bg-dark text-white float-left" title="Précédent">Précédent</a></p>
        </div>
    </nav>

    <footer id="allFooter" class="text-white text-center text-lg-start">
        <div class="containerFooters p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-center">
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <div class="col-lg-3 mb-4 mb-md-0">
                    <h5>Mes réseaux Sociaux</h5>
                    <div class="row text-center ml-5">
                        <div class="ml-5 mb-1">
                            <a href="https://www.facebook.com/toure.aisettou"><img
                                    src="../assets/autres/iconesReseauSociaux/Web 1280 – 12.png"
                                    class="rounded-circle"></a>
                        </div>
                        <div class="ml-3 mb-1">
                            <a href="https://www.instagram.com/kanysphotographie/"><img
                                    src="../assets/autres/iconesReseauSociaux/Web 1280 – 11.png"
                                    class="rounded-circle"></a>
                        </div>
                        <div class="ml-3">
                            <a href="mailto:aisetoutoure@gmail.com"><img src="../assets/autres/iconesReseauSociaux/Web 1280 – 13.png"
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
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="form-validation.js"></script>
</body>

</html>