<!doctype html>
<html lang="fr">

<head>
    <title>KanysPhotoGraphie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body id="pageTableBord">
<nav id="navbarAllPage" class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand text-white" href="../index.php">KANY'S</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_admin.php">Admin</a>
            </li>
        <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_acceuilDashboard.php">Tableau de bord</a>
            </li>
        <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_gestionGaleriePhoto.php">Gestion des galleries photos</a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_gestionArticles.php">Gestion des articles</a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_listContact.php">Gestion des contacts </a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/error404.php">error 404</a>
            </li>
        </ul>
</nav>

    <div class="container">
        <div class="">
            <div class="row row justify-content-center">
                <div class="col-sm-3 mb-3 mt-5 pl-5">
                    <div class="card text-center">
                        <img src="../assets/autres/videoEtPhotoFondEcran/slr-camera-3752493_1920.jpg" alt="">
                        <h5 class="card-title mt-3">Gestion des galeries photo</h5>
                        <p class="card-text">
                        </p>
                        <a href="../view/view_gestionGaleriePhoto.php" id="buttonAllPage" type="button" class="btn text-white">Consultez</a>
                    </div>
                </div>

                <div class="col-sm-3 pl-5 mt-5 mb-2">
                    <div class="card text-center">
                        <img src="../assets/autres/videoEtPhotoFondEcran/Web 1280 – 1.png" alt="">

                        <h5 class="card-title mt-3">Supprimer une image</h5>
                        <p class="card-text">
                        </p>
                        <button type="button" id="buttonAllPage" class="btn text-white">Supprimer</button>
                    </div>
                </div>

            </div>
            <!-- fin de card -->
            <div class="row row justify-content-center">
                <div class="col-sm-3 mt-3 pl-5">
                    <div class="card text-center">
                        <img src="../assets/autres/videoEtPhotoFondEcran/bag-1565402_1920.jpg" alt="">
                        <h5 class="card-title mt-3">Gestion des articles</h5>
                        <p class="card-text">
                        </p>
                        <a id="buttonAllPage" href="../view/view_gestionArticles.php" class=" btn text-white">Consultez</a>
                    </div>
                </div>

                <div class="col-sm-3 pl-5 mt-3 mb-3">
                    <div class="card text-center">
                        <img src="../assets/autres/videoEtPhotoFondEcran/contact-5235117_1920.jpg" alt="">

                        <h5 class="card-title mt-3">Gestion des contact</h5>
                        <p class="card-text">
                        </p>
                        <a href="../view/view_listContact.php" type="imput" id="buttonAllPage"
                            class="btn text-white">Consultez</a>
                        <imput type="button" value="Retour" class="text-white" onclick="history.go(-1)">
                    </div>
                </div>
            </div>
        </div>
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
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>