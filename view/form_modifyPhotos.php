<?php 

require_once '../controllers/controller_form_modifyPhotos.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Modification photos</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="h4 mt-3">Modifier la gallerie </h1>

            <div class="card mt-3 w-50">
                <div class="container text-center mt-2">
                <img src="../assets/img/gallery/<?= $_SESSION['photoDetails']['name_image'] ?? '' ?>" alt="" class="previewPhotoModify">
                <p><?= $_SESSION['photoDetails']['nameCategorie'] ?? '' ?></p>
                </div>
                <h1 class="card-title h4 mt-3 mb-1">Modifier l'image</h1>
                <div class=" row justify-content-center ml-4 mb-3">
                    <form method="POST" enctype="multipart/form-data" action="" class="needs-validation formGalerie"
                        novalidate>
                        <div>
                            <div class="mt-5">
                                <select name="updateCat">
                                    <option selected disabled>Veuillez choisir une catégorie</option>
                                    <option value="1">Portrait</option>
                                    <option value="2">Décoration Intérieure</option>
                                </select>
                            </div>
                        </div>

                        <div class="">
                        <!-- <img src="echo cour de l'image" alt=""> -->
                            <p class="mt-4">Changer la photo</p>
                                <input type="file" name="updatePhoto" value="50000" />
                            <div class="row justify-content-center mt-5">
                                <button id="allFooter" type="submit" class="btn text-white w-75 mb-3" name="updatePhotoButton">Enregistrer les
                                    modifications</button>
                                <a class="btn text-dark btn-light w-75" href="../view/view_gestionGaleriePhoto.php">annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>