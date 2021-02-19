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
    <title>Checkout example · Bootstrap v5.0</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>

</head>
<body class="bg-light">

<thead>
            <div class="containeur-fluid">
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
                                <a class="nav-link text-white" href="../view/contact.php">
                                    <i class="fab fa-instagram"></i>Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- fin de la navbar-->
        </thead>
        <main>
            <div class="py-5 text-center">
                <h2>Formulaire de Contact</h2>
                <p class="lead">Vous trouverez ci dessous un formmulaire de contact pour me joindre, Veuillez indiquer
                    la raison de votre contact précissement dans la partie message d'édier à cela. </p>
            </div>

            <div class="row g-3">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <img src="../assets/autres/videoEtPhotoFondEcran/Web 1280 – 1.png" alt="">
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Vos Coordonnées</h4>
                    <form class="needs-validation ml-3" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="lastname" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="lastname" placeholder="DUPOND" name="lastname" value="" required>
                                <div class="errors"><?= $error['lastname']?? ''?>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="firstname" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Marie" name="firstname" value="" required>
                                <div class="errors"><?= $error['firstname']?? ''?>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="phone" class="form-label">Télèphone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="1234 Main St" name="phone" value="" required>
                                    <div class="errors"><?= $error['phone']?? ''?>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    <div class="error"><?= $errors['email']?? ''?>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12">
                                <label for="address2" class="form-label">Adresse<span
                                        class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="address2" name="address" placeholder="Apartment or suite">
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" name="message" placeholder="Ecrivez votre message ici"
                                    id="floatingTextarea" required></textarea>
                                <label for="floatingTextarea" >Message</label>
                            </div>


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

            <a type="submit" href="articles.php" id="buttonAllPage" class="btn text-white center">Envoyer</a>
            </form>
    </div>
    </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019–2021 Kanyphotography</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="form-validation.js"></script>
</body>

</html>