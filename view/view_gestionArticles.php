<?php 
require_once '../controllers/controller_articles.php';
?>


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    </script>
</head>

<body>
    <!--Navbar -->
    <nav id="navbarAllPage" class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand text-white" href="../index.php">KANY'S</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/pageAccueil.php">
                        <i class="fab fa-instagram"></i>Aller sur le site</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link text-white" href="../view/view_admin.php">Admin</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link text-white" href="../view/view_acceuilDashboard.php">Tableau de bord</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link text-white" href="../view/view_gestionGaleriePhoto.php">Gestion des galleries
                        photos</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link text-white" href="../view/view_gestionArticles.php">Gestion des articles</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link text-white" href="../view/view_listContact.php">Gestion des contacts </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- fin de la navbar -->

    <div class="container">
        <!-- tableau de gestion des galeries -->
        <div class="mt-5">
            <!-- table des articles -->
            <div class="table-responsive">
                <table class="table tableArticle">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <form method="POST" action="../view/view_gestionArticles.php" class="needs-validation" novalidate>
                                    <div>
                                        <div class="w-50">
                                            <label for="nameArticles" class="form-label">Titre de l'aricle</label>
                                            <input type="text" class="form-control" name="articles" placeholder=""
                                                value="" required>
                                        </div>
                                        <div class="w-50">
                                            <label for="dateArticles" class="form-label">Date</label>
                                            <input type="date" class="form-control" placeholder="23-02-2021"
                                                name="dateArticles" required>
                                        </div>
                                    </div>

                                    <div class="form-floating mt-4 w-50">
                                        <label for="floatingTextarea">Contenu de l'article</label>
                                        <textarea class="form-control" placeholder="" id="floatingTextarea"
                                            name="textArticles"></textarea>
                                    </div>

                                    <div class="">
                                        <p class="mt-4">Télècharger une image</p>
                                        <form enctype="multipart/form-data" action="../view/view_gestionArticles.php" method="post">
                                            <input type="file" name="MAX_FILE_SIZE" value="50000" />
                                            <input type="submit" value="Envoyer le fichier" id="fileToUpload" />
                                            <button id="allFooter" type="submit" name="btnAddArticle" value=""
                                                class="btn text-white">Envoyer</button>
                                        </form>
                                    </div>
                                </form>
                            </td>
                        </tr>
                </table>


                <!-- Tableau qui liste les articles afficher -->
                <table>
            <h1 class="text-dark">Liste des articles</h1>
            <tbody>
                <tr>
                    <th>id</th>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Contenu</th>
                    <th>Image</th>
                    <th>Modifier</th>
                    <th>Sup.</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>MasterClass</td>
                    <td>30-08-2020</td>
                    <td>Ici le texte de l'article</td>
                    <td>Portrait</td>
                    <td><button type="button" class="btn btn-light">Modif.</button></td>
                    <td><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>NSNV</td>
                    <td>12-01-2021</td>
                    <td>Ici le texte de l'article</td>
                    <td>groupeNsnv.png</td>
                    <td><button type="button" class="btn btn-light">Modif.</button></td>
                    <td><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Shooting PARIS</td>
                    <td>15-07-2020</td>
                    <td>Ici le texte de l'article</td>
                    <td>filleVoiture.jpeg</td>
                    <td><button type="button" class="btn btn-light">Modif.</button></td>
                    <td><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                </tr>
            </tbody>
        </table>
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
        </script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="script.js"></script>

</body>

</html>