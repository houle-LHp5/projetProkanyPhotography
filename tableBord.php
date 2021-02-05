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
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="pageTableBord">
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">KanyPhotgraphy</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="admin.php">Déconnexion</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 mb-5 mt-5 pl-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ajouter une Photos</h5>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                        </p>
                        <button href="#" class="btn btn-warning">Ajouter</button>
                    </div>
                </div>
            </div>


            <!-- card correspondant à la modal des articles -->
            <div class="col-sm-6 mt-5 pl-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Articles</h5>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                        </p>
                        <button href="#" data-toggle="modal" data-target="#modal" class="btn btn-warning">Mes
                            articles</button>
                    </div>
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
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Je saisi ici mon articles</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark" data-mdb-dismiss="modal" data-dismiss="modal">
                        Fermer
                    </button>
                    <button type="button" class="btn btn-warning">Enregistrer les modifications</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fin modal -->


    <div id="" class="row">
        <div class="col-sm-6 pl-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Supprimer une image</h5>
                    <p class="card-text">
                        With supporting text below as a natural lead-in to additional content.
                    </p>
                    <a href="#" class="btn btn-warning">Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 pl-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Télècharger une image</h5>
                    <p class="card-text">
                        With supporting text below as a natural lead-in to additional content.
                    </p>
                    <button type="submit" class="btn btn-warning">
                    <input type="file" name="fileToUpload" id="fileToUpload">
        
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal telechargement image -->
    <div id="modaltwo" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Télèchargement</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>photo Ici</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-mdb-dismiss="modal">
          Fermer
        </button>
        <button type="button" class="btn btn-warning">Enregistrer</button>
      </div>
    </div>
  </div>
</div>
<!-- fiin de modal telechargement -->



     




    <div class="mt-5 tablePageTableBord ml-5">
        <h2>Liste des personnes</h2>
        <div id="tableDashboard" class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Télèphone</th>
                        <th>Adresse E-mail</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </main>
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