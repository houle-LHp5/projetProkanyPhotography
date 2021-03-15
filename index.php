<?php 
session_start();
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="cover.css" rel="stylesheet">
</head>
<body class="overflow-hidden">
    <thead>
            <!--Navbar -->
             <nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top">
                <a class="navbar-brand text-white" href="index.php">KANY'S</a>
            </nav> 
    </thead>
    <!--/.Navbar -->

    <!-- vidéo et message de la page d'accueil -->
    <div id="videoDiv">
        <video id="video1" controls class="min-vh-100 min-vw-100" autoplay="" muted="" playsinline="" loop="" poster="assets/videoEtPhotoFondEcran/camera-2125549_1920.jpg">
            <source src="assets/autres/videoEtPhotoFondEcran/appareilPhotoEntier.mp4" type="video/mp4">
        </video>
        <div id="videoMessage" class="styling">
            <h1 id="titlePageAccueil">KanyPhotography</h1>
            <h2>Bienvenue sur mon site</h2>
            <p id="enterBtn" class="videoClick">
                <a type="submit" id="buttonAllPage" class="btn btn-lg" href="view/pageAccueil.php">Cliquer ici</a>
            </p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    </div>
</body>
</html>