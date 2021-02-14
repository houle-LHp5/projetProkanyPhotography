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
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="pageTableBord">
    <header id="navbarAllPage" class="navbar text-white sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand text-white col-md-3 col-lg-2 me-0 px-3" href="pageAccueil">KanyPhotgraphy</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Recherche" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="admin.php">Déconnexion</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 mb-5 mt-5 pl-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ajouter/Supprimer/Modier une photo</h5>
                        <p class="card-text">
                            With supporting text below as a.
                        </p>
                        <a href="articles.php" id="buttonAllPage" type="button" class="btn text-white" data-toggle="modal"
                            data-target="#modalAdd">Ajouter</a>
                    </div>
                </div>
            </div>

            <!-- card modal ajouter -->
            <div class="modal" id="modalAdd" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouter/Modifier/Supprimer</h5>
                            <button type="button" id="buttonAllPage" class="btn-close" data-mdb-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><button type="submit" id="buttonAllPage" class="btn text-white">
                                    <input type="file" name="fileToUpload" id="fileToUpload"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-mdb-dismiss="modal" data-dismiss="modal">
                                Fermer
                            </button>
                            <button type="button" id="buttonAllPage" class="btn text-white">Télècharger</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin modal ajouter -->


            <!-- card correspondant à la modal des articles -->
            <div class="col-sm-6 mt-5 pl-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mes Articles</h5>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                        </p>
                        <button data-toggle="modal" data-target="#modal" id="buttonAllPage" class=" btn text-white">Mes
                            articles</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- fin de card -->
        <!-- modal -->
        <div class="modal" id="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mes articles</h5>
                        <button type="button" id="buttonAllPage" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Je saisi ici mon articles</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="buttonAllPage" class="btn btn-dark" data-mdb-dismiss="modal" data-dismiss="modal">
                            Fermer
                        </button>
                        <button type="button" id="buttonAllPage" class="btn text-white">Modifier mes articles</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin modal -->


        <div class="row">
            <div class="col-sm-6 pl-5 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Supprimer une image</h5>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                        </p>
                        <button type="button" id="buttonAllPage" class="btn text-white" data-toggle="modal"
                            data-target="#myModal">Supprimer</button>
                    </div>
                </div>
            </div>

            <!-- modal suppression -->
            <div class="modal" id="myModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Suppresion</h5>
                            <button type="button" id="buttonAllPage" class="btn-close" data-mdb-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Ici mon image à supprimer</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="buttonAllPage" class="btn btn-dark" data-mdb-dismiss="modal" data-dismiss="modal">
                                Fermer
                            </button>
                            <button type="button" id="buttonAllPage" class="btn text-white">Confirmer la suppression</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- fin modal suppression -->
                <div class="col-sm-6 pl-5 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulaire de contact</h5>
                            <p class="card-text">
                                With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="formulaire_contact.php" type="imput" id="buttonAllPage" class="btn text-white">Consultez</a>
                        </div>
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