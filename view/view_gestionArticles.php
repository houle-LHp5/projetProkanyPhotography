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
                                <form method="POST" action="view_gestionArticles.php" class="needs-validation" enctype="multipart/form-data">
                                    <div>
                                        <div class="w-50">
                                            <label for="nameArticles" class="form-label">Titre de l'aricle</label>
                                            <span class="error"><?= $errors['titleArticles'] ?? '' ?></span>
                                            <input type="text" class="form-control" name="titleArticles" placeholder=""
                                                value="<?= isset($_POST['titleArticles']) ? htmlspecialchars($_POST['titleArticles']) : '' ?>" required>
                                        </div>
                                        <div class="w-50">
                                            <label for="dateArticles" class="form-label">Date</label>
                                            <input type="date" class="form-control" placeholder="23-02-2021"
                                                name="dateArticles" value="<?= isset($_POST['dateArticles']) ? htmlspecialchars($_POST['dateArticles']) : '' ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-floating mt-4 w-50">
                                        <label for="floatingTextarea">Contenu de l'article</label>
                                        <textarea class="form-control" placeholder="" id="floatingTextarea"
                                            name="textArticles" value="<?= isset($_POST['textArticles']) ? htmlspecialchars($_POST['textArticles']) : '' ?>"></textarea>
                                    </div>

                                    <div class="">
                                        <p class="mt-4">Télècharger une image</p>
                                            <input type="file" name="imageArticle">
                                            <button id="allFooter" type="submit" name="btnAddArticle"
                                                class="btn text-white">Envoyer</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                </table>

                <?php
         // Mise en place d'une condition pour ne plus afficher le formulaire quand l'article a bien été enregistré
         if (!$addArticlesInBase) { ?>
            <!-- si le patient n'est pas enregistré nous indiquons l'utilisateur via un message -->
            <p class="h5 text-center text-danger"><?= $messages['addArticles'] ?? '' ?></p>

            <!-- si l'article a bien été enregistré nous indiquons l'utilisateur via un message -->
            <p class="h5 text-center text-info"><?= $messages['addArticles'] ?? '' ?></p>
            <div class="text-center mt-4">
               <a type="button" href="../view/view_gestionArticles.php" class="btn btn-sm btn-outline-primary">Liste des articles</a>
            </div>

         <?php
         } ?>


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
                <?php foreach($allArticlesArray as $articles){?>

                
                <tr>
                    <td><?= $articles['id_articles'] ?></td>
                    <td><?= $articles['titleArticles'] ?></td>
                    <td><?= $articles['dateArticles'] ?></td>
                    <td><?= $articles['textArticles'] ?></td>
                    <td><?= $articles['imageArticle'] ?></td>
                    <td><button type="button" class="btn btn-light">Modif.</button></td>
                    <td><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                </tr>
                <?php } ?>
          
            </tbody>
        </table>
         <!-- Mise en place d'une ternaire pour permettre d'afficher un message si jamais le tableau est vide -->
         <?= count($allArticlesArray) == 0 ? '<p class="h6 text-center">Vous n\'avez pas d\'article d\'enregistrés<p>' : '' ?>

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