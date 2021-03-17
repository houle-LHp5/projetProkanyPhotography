<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:../view/view_admin.php");
}
?>
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

    <?php 
include './include/navBar.php';
?>


    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="titleDashboard text-dark mt-5">
                <h1 class="mt-5 py-2 ">Tableau de Bord</h1>
            </div>
            <div class="col-sm-3 mb-3 mt-3 pl-5">
                <div class="card text-center">
                    <img src="../assets/autres/videoEtPhotoFondEcran/slr-camera-3752493_1920.jpg"
                        alt="image d'un appareil photo" class="responsive pb-4">
                    <h5 class="card-title mt-3">Gestion des galeries photo</h5>
                    <p class="card-text">
                    </p>
                    <a href="../view/view_gestionGaleriePhoto.php" id="buttonAllPage" type="button"
                        class="btn text-white">Consultez</a>
                </div>
            </div>


            <div class="col-sm-3 mt-3 pl-5">
                <div class="card text-center">
                    <img src="../assets/autres/videoEtPhotoFondEcran/bag-1565402_1920.jpg" alt="image bloc note"
                        class="responsive">
                    <h5 class="card-title mt-3">Gestion des articles</h5>
                    <p class="card-text">
                    </p>
                    <a id="buttonAllPage" href="../view/view_gestionArticles.php" class=" btn text-white">Consultez</a>
                </div>
            </div>

            <div class="col-sm-3 pl-5 mt-3 mb-3">
                <div class="card text-center">
                    <img src="../assets/autres/videoEtPhotoFondEcran/contact-5235117_1920.jpg"
                        alt="image d'un bloc et un ordinateur" class="responsive">

                    <h5 class="card-title mt-3">Gestion des contact</h5>
                    <p class="card-text">
                    </p>
                    <a href="../view/view_listContact.php" type="imput" id="buttonAllPage"
                        class="btn text-white">Consultez</a>
                    <imput type="button" value="Retour" class="text-white">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</body>