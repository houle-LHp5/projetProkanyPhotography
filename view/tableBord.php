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
    <header id="navbarAllPage" class="navbar text-white sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand text-white col-md-3 col-lg-2 me-0 px-3" href="../index.php">KanyPhotgraphy</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_admin.php">Déconnexion</a>
            </li>
        </ul>
    </header>

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="row">
                <div class="col-sm-3 mb-3 mt-5 pl-5">
                    <div class="card">
                        <img src="../assets/autres/videoEtPhotoFondEcran/slr-camera-3752493_1920.jpg" alt="">
                        <h5 class="card-title mt-3">Ajouter/Modifier une image</h5>
                        <p class="card-text">
                        </p>
                        <a href="dashbord2.php" id="buttonAllPage" type="button" class="btn text-white">Ajouter</a>
                    </div>
                </div>

                <div class="col-sm-3 pl-5 mt-5 mb-2">
                    <div class="card">
                        <img src="../assets/autres/videoEtPhotoFondEcran/Web 1280 – 1.png" alt="">

                        <h5 class="card-title mt-3">Supprimer une image</h5>
                        <p class="card-text">
                        </p>
                        <button type="button" id="buttonAllPage" class="btn text-white" data-toggle="modal"
                            data-target="#myModal">Supprimer</button>
                    </div>
                </div>
                
            </div>
            <!-- fin de card -->
            <div class="row">
                <div class="col-sm-3 mt-3 pl-5">
                    <div class="card">
                        <img src="../assets/autres/videoEtPhotoFondEcran/bag-1565402_1920.jpg" alt="">
                        <h5 class="card-title mt-3">Mes Articles</h5>
                        <p class="card-text">
                        </p>
                        <a id="buttonAllPage" href="dashbord2.php" class=" btn text-white">Mes
                            articles</a>
                    </div>
                </div>

                <div class="col-sm-3 pl-5 mt-3 mb-3">
                    <div class="card">
                        <img src="../assets/autres/videoEtPhotoFondEcran/contact-5235117_1920.jpg" alt="">

                        <h5 class="card-title mt-3">Formulaire de contact</h5>
                        <p class="card-text">
                        </p>
                        <a href="../view/afficheList_contact.php" type="imput" id="buttonAllPage"
                            class="btn text-white">Consultez</a>
                        <imput type="button" value="Retour" class="text-white" onclick="history.go(-1)">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav aria-label="navigation">
  <div class="pager">
    <a href="view_admin.php" class="bg-dark text-white ml-2" title="Précédent">Précédent</a>
</div>
</nav>

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