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
                <caption id="textColorPageAccueil" class="h3 mt-5">Tableau de gestion des articles</caption>
                <table class="table tableDashboard">
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <form method="POST" action="dashbord2.php" class="needs-validation" novalidate>
                                    <div>
                                        <div>
                                            <label for="nameArticles" class="form-label">Titre de l'aricle</label>
                                            <input type="text" class="form-control" name="articles" placeholder=""
                                                value="" required>
                                        </div>
                                        <div>
                                            <label for="dateArticles" class="form-label">Date</label>
                                            <input type="date" class="form-control" placeholder="23-02-2021"
                                                name="dateArticles" required>
                                        </div>
                                    </div>

                                    <div class="form-floating mt-4">
                                        <label for="floatingTextarea">Contenu de l'article</label>
                                        <textarea class="form-control" placeholder="" id="floatingTextarea"
                                            name="textArticles"></textarea>
                                    </div>

                                    <div class="">
                                        <p class="mt-4">Télècharger une image</p>
                                        <form enctype="multipart/form-data" action="dashbord2.php" method="post">
                                            <input type="file" name="MAX_FILE_SIZE" value="50000" />
                                            <input type="submit" value="Envoyer le fichier" id="fileToUpload" />
                                            <button id="allFooter" type="submit" name="btnAddArticle"
                                                value="<?= $articles['id_articles'] ?>"
                                                class="btn text-white">Envoyer</button>
                                        </form>
                                    </div>
                                </form>
                            </td>
                        </tr>

                        

                        <hr>

                    </tbody>
                </table>

                <!-- tableau avec la liste des photo -->
                <table>
                <tr>
                            <th scope="col">id</th>
                            <th scope="col-2">Titre de l'article</th>
                            <th scope="col">Date</th>
                            <th scope="col">Contenu</th>
                            <th scope="col">Image</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Suppression</th>
                        </tr>
                        <?php foreach ($articlesDetails as $articles){ ?>
                        <tr>
                            <td><?= $articles['id_articles']?></td>
                            <td><?= $articles['titleArticles']?></td>
                            <td><?= $articles['dateArtciles']?></td>
                            <td><?= $articles['textArtciles']?></td>
                            <td><?= $articles['imageArticle']?></td>
                            <td><button type="button" class="btn btn-warning">Modifier</button></td>
                            <td><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                        </tr>
                        <?php } ?>
                </table>
            </div>


            <footer id="allFooter" class="text-white text-center text-lg-start">
                <div class="containerFooters p-4">
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
                            <h5>Mes réseaux Sociaux</h5>
                            <div class="row text-center ml-5">
                                <div class="ml-5">
                                    <a href="https://www.facebook.com/toure.aisettou"><i class="bi bi-facebook"></i></a>
                                </div>
                                <div class="ml-3">
                                    <a href="https://www.instagram.com/kanysphotographie/"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                                <div class="ml-3">
                                    <a href="#!"><i class="bi bi-envelope"></i></a>
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