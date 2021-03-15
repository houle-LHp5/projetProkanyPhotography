<?php 
session_start();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
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
            <div class="col-md-5 col-lg-4 order-md-last mb-4 ml-5">
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
                            <div class="errors">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="firstname" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Marie" name="firstname"
                                value="" required>
                            <div class="errors">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="phone" class="form-label">Télèphone</label>
                                <input type="text" class="form-control" id="phone" placeholder="1234 Main St"
                                    name="phone" value="" required>
                                <div class="errors">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com"
                                    name="message" value="" required>
                                <div class="error">
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
            </div>
        </div>
        </form>
        </div>
        </div>
    </main>

    <!-- <nav aria-label="navigation">
        <div class="pager">
            <p><a href="articles.php" id="allFooter" type="button" class="text-white float-left"
                    title="Précédent">Précédent</a></p>
        </div>
    </nav> -->

    <div class="container">
    <footer id="allFooter" class="text-white text-center text-lg-start">
        <div class="containerFooters p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-center">
                    <h5 class="text-uppercase">Citation</h5>
                    <p>
                    "Ce que j'aime avec la photographie, c'est qu'elle capture un moment disparu à jamais,
                        impossible à reproduire" <br/>
                        KARL LAGARFELD
                    </p>
                </div>
                <div class="col-lg-3 mb-4 mb-md-0">
                    <h5>Mes réseaux Sociaux</h5>
                    <div class="row text-center ml-5">
                        <div class="ml-5 mb-1">
                            <a href="https://www.facebook.com/toure.aisettou">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </a>
                        </div>
                        <div class="ml-3 mb-1">
                            <a href="https://www.instagram.com/kanysphotographie/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </a>
                        </div>
                        <div class="ml-3">
                            <a href="mailto:aisetoutoure@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                                </svg></a>
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
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="form-validation.js"></script>
</body>

</html>