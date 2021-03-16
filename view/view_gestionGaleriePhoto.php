<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:../view/view_admin.php");
}
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">

    </script>
</head>

<body>


<?php 
include './include/navBar.php';
?>
    <!-- fin de la navbar -->

    <!-- formulaire de telechargemennt -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1 class="h4 mt-4">Gestion des photos</h1>
            <div class="card mt-3 w-50">
                <h1 class="card-title h4 mt-5 mb-4">Télécharger</h1>
                <div class=" row justify-content-center ml-5 mb-3">
                    <form method="POST" enctype="multipart/form-data" action="" class="needs-validation formGalerie"
                        novalidate>
                        <div>
                            <div class="mt-5">
                                <p class="text-danger"><?= $errors['catId'] ?? '' ?></p>
                                <select class="text-center" name="catId">
                                    <option selected disabled> -- Veuillez choisir une catégorie --</option>
                                    <option value="1"
                                        <?= isset($_POST['catId']) && $_POST['catId'] == 1 ? 'selected' : '' ?>>Portrait
                                    </option>
                                    <option value="2"
                                        <?= isset($_POST['catId']) && $_POST['catId'] == 2 ? 'selected' : '' ?>>
                                        Décoration Intérieure</option>
                                </select>

                            </div>
                        </div>

                        <div class="">
                            <p class="mt-4">Selectionner une image</p>
                            <p class="text-danger"><?= $errors['photoToUpload'] ?? '' ?></p>
                            <input type="file" name="photoToUpload" value="50000" />
                            <div class="row justify-content-center">
                                <button id="allFooter" type="submit" class="btn text-white w-50 mt-5"
                                    name="addPhotosBtn">Envoyer</button>
                                    <button type="reset" class="btn w-50 mt-2 bg-light text-dark">Annuler</button>
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
                    <td>
                        <form action="../view/form_modifyPhotos.php" method="POST"><button type="submit"
                                class="btn btn-light" name="photoToModify"
                                value="<?= $photos['id_photos'] ?>">Modif.</button></form>
                    </td>
                    <td><button class="btn btn-danger deletePhotos" type="submit" data-toggle="modal" data-target="#sup" data-del-id="<?= $photos['id_photos'] ?>"  data-del-image="<?= $photos['name_image'] ?>"><i class="bi bi-trash"></i></button></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
        <!-- MODAL  -->
        <div class="modal" id="sup" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="bi bi-trash"> Supprimer cette photo ?</i></h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" class="miniPhoto text-center" src="../assets/img/gallery/<?= $photos['name_image'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                        <form action="" method="POST">
                        <button type="submit" class="btn btn-danger" id="deleteBtn" name="deleteBtn">Supprimer</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN MODAL -->
    </div>
    <div id="scroll_to_top">
        <a href="#top"><img src="../assets/img/gallery/flecheHaut.jpg" alt="Retourner en haut" /></a>
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
    <script src="../assets/js/script.js"></script>

</body>

</html>