<?php 
session_start();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

    </script>
</head>



<body>
    <!--Navbar -->
    <nav id="navbarAllPage" class="mb-1 navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand text-white" href="../index.php">KANY'S</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/pageAccueil.php">
                    <span style="text-decoration: underline;">Aller sur le site</span></a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link text-white" href="../view/view_acceuilDashboard.php">Tableau de bord</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link text-white" href="../view/view_gestionGaleriePhoto.php">Gestion des galleries
                        photos</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link text-white" href="../view/view_listContact.php">Gestion des contacts </a>
                </li>
                <li class="nav-item text-nowrap pull-right">
                <button class="nav-link text-dark" type="submit"><b class="term" >Déconnexion</b></button>
            </li>
            </ul>
        </div>
    </nav>
    <!-- fin de la navbar -->
    <div class="container">

    <div class="h4 titleGestionArticle mt-5">
    <h1 class="mt-5">Gestion des Articles</h1>
    </div>

        <!-- Tableau qui liste les articles afficher -->
        <table class="mt-5" id="ancreTable">
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

                <?php foreach($allArticlesArray as $articles){?>
                <tr>
                    <td><?= $articles['id_articles'] ?></td>
                    <td><?= $articles['titleArticles'] ?></td>
                    <td><?= $articles['dateArticles'] ?></td>
                    <td><?= $articles['textArticles'] ?></td>
                    <td><?= $articles['imageArticle'] ?></td>
                    <td><a type="button" class="btn btn-light" href="../view/form_articles.php">Modifier</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#supArticle" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                </tr>
                <?php } ?>


                <div class="modal" id="supArticle" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supprimer</h5>
                                <button type="button" class="btn-close" data-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Etês vous sur de vouloir supprimer cet article?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tbody>
        </table>
    </div>
        <!-- Mise en place d'une ternaire pour permettre d'afficher un message si jamais le tableau est vide -->
        <?= count($allArticlesArray) == 0 ? '<p class="h6 text-center">Vous n\'avez pas d\'article d\'enregistrés<p>' : '' ?>
    </div>

    <?php
         // Mise en place d'une condition pour ne plus afficher le formulaire quand l'article a bien été enregistré
         if (!$addArticlesInBase) { ?>
        <!-- si le patient n'est pas enregistré nous indiquons l'utilisateur via un message -->
        <p class="h5 text-center text-danger"><?= $messages['addArticles'] ?? '' ?></p>

        <!-- si l'article a bien été enregistré nous indiquons l'utilisateur via un message -->
        <p class="h5 text-center text-info"><?= $messages['addArticles'] ?? '' ?></p>

        <?php
         } ?>

<!-- card création d'article -->
    <div class="row justify-content-center mt-5">
        <div class="card mt-3 w-50">
        <div class=" mt-5">
                <div class="table-responsive">
                    <h1 class="h4 text-center mt-3 mb-5">Créer un article</h1>
                    <div class="ml-5 formArticles">
                        <form method="POST" action="view_gestionArticles.php" class="needs-validation mb-5"
                            enctype="multipart/form-data">
                            <div>
                                <div class="w-75">
                                    <label for="nameArticles" class="form-label">Titre de l'aricle</label>
                                    <span class="error"><?= $errors['titleArticles'] ?? '' ?></span>
                                    <input type="text" class="form-control" name="titleArticles" placeholder=""
                                        value="<?= isset($_POST['titleArticles']) ? htmlspecialchars($_POST['titleArticles']) : '' ?>"
                                        required>
                                </div>
                                <div class="w-75">
                                    <label for="dateArticles" class="form-label">Date</label>
                                    <input type="date" class="form-control" placeholder="23-02-2021" name="dateArticles"
                                        value="<?= isset($_POST['dateArticles']) ? htmlspecialchars($_POST['dateArticles']) : '' ?>"
                                        required>
                                </div>
                            </div>

                            <div class="mt-4 w-75">
                                <label for="textarea" class="form-label">Contenu de l'article</label>
                                <textarea class="form-control" placeholder="" id="floatingTextarea" name="textArticles"
                                    value="<?= isset($_POST['textArticles']) ? htmlspecialchars($_POST['textArticles']) : '' ?>"></textarea>
                            </div>

                            <div">
                                <p class="mt-4">Télècharger une image</p>
                                <input type="file" name="imageArticle">
                                <button id="allFooter" type="submit" name="btnAddArticle"
                                    class="btn text-white w-75 mt-5">Envoyer</button>
                                    <button type="reset" class="btn text-dark btn-light w-75">annuler</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a class="mb-5" href="javascript:history.back()">Page Précédente</A>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="script.js"></script>

</body>

</html>