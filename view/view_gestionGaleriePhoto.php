<?php

require_once '../controllers/controller_gestionGalleriePhoto.php';

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

    <!-- formulaire de telechargemennt -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1 class="h4 mt-4">Gestion des photos</h1>
            <div class="card mt-3 w-50">
                <h1 class="card-title h4 mt-5 mb-4">Télécharger</h1>
                <div class=" row justify-content-center ml-5 mb-3">
                    <form method="POST" enctype="multipart/form-data" action=""  class="needs-validation formGalerie"
                        novalidate>
                        <div>
                            <div class="mt-5">
                            <p class="text-danger"><?= $errors['catId'] ?? '' ?></p>
                                <select class="text-center" name="catId">
                                    <option selected disabled > -- Veuillez choisir une catégorie --</option>
                                    <option value="1" <?= isset($_POST['catId']) && $_POST['catId'] == 1 ? 'selected' : '' ?>>Portrait</option>
                                    <option value="2" <?= isset($_POST['catId']) && $_POST['catId'] == 2 ? 'selected' : '' ?>>Décoration Intérieure</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="">
                            <p class="mt-4">Selectionner une image</p>
                            <p class="text-danger"><?= $errors['photoToUpload'] ?? '' ?></p>
                                <input type="file" name="photoToUpload" value="50000" />
                            <div class="row justify-content-center">
                            <button type="reset" class="btn w-50 mt-5 bg-light text-dark">Annuler</button>
                            <button id="allFooter" type="submit" class="btn text-white w-50 mt-2" name="addPhotosBtn">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--fin du formulaire de Telechargement -->



    <!-- tableau de gestion du formulaire de Telechargement de photos -->
    <div class="table-responsive">
        <table id="ancre">
            <tbody>
                <tr>
                    <th>id</th>
                    <th>photo</th>
                    <th>Catégorie</th>
                    <th>Modifier</th>
                    <th>Sup.</th>
                </tr>

                <?php foreach ($photosArray as $photos) { ?>
                <tr>
                    <td><?= $photos['id_photos'] ?></td>
                    <td><img class="miniPhoto" src="../assets/img/gallery/<?= $photos['name_image'] ?>" alt=""></td>
                    <td><?= $photos['nameCategorie'] ?></td>
                    <td><a type="button" class="btn btn-light" href="../view/form_modifyPhotos.php">Modif.</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#sup" class="btn btn-danger"><i
                                class="bi bi-trash"></i></button></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
        <!-- MODAL  -->
        <div class="modal" id="sup" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Supprimer</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Etês vous sur de vouloir supprimer la photo?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN MODAL -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

</body>

</html>