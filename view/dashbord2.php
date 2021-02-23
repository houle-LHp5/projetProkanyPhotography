<?php 

if(isset($_FILES["fileExercice"])){
  $pathInfoFile = pathinfo($_FILES["fileExercice"]["name"]);
  var_dump($pathInfoFile);
  $filesExtension = $pathInfoFile["extension"];
  if($filesExtension == "pdf"){
      $extentionValidation = "Vous avez envoyé un fichier PDF.";
  } else {
      $extentionValidation = "Veuillez envoyer un fichier PDF.";
  }
}
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
    <link rel="stylesheet" href="../assets/css/style.css">

    </script>
</head>

<body>
    <div class="container-fluid">
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
                            <i class="fab fa-instagram"></i>Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../view/portrait.php">
                            <i class="fab fa-instagram"></i>Portrait</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../view/decorationInterieur.php">
                            <i class="fab fa-instagram"></i>Décoration Intérieur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../view/contact.php">
                            <i class="fab fa-instagram"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- fin de la navbar -->


        <!-- tableau de gestion des images des bloc photo de contact -->
        <table class="table table-dark mt-5">
            <thead>
                <h2 class="h3">Tableau de gestion des photos</h2>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Texte alternative</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>image.png</td>
                    <td>photo mannequin de oury</td>
                    <td>Portrait</td>
                    <td><button type="button" class="btn btn-warning">Modifier</button></td>
                    <td><button type="button" class="btn btn-danger">Supprimer</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
                        <form enctype="multipart/form-data" action="articles.php" method="post">
                            <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
                            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                            <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
                            Envoyez ce fichier : <input name="userfile" type="file" />
                            <input type="submit" value="Envoyer le fichier" id="fileToUpload" />
                        </form>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <!-- tableau de gestion des articles de la page d'acceuil -->
        <table class="table table-dark">
            <thead>
                <h2 class="h3">Tableau de gestion des articles</h2>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Texte</th>
                    <th scope="col">Accroche</th>
                    <th scope="col">Photo 1</th>
                    <th scope="col">Photo 2</th>
                    <th scope="col">Photo 3</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Suppression</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>2020-07-15</td>
                    <td>Le shooting de Paris</td>
                    <td>Le texte de mon article</td>
                    <td>Paris la ville des lumière</td>
                    <td>l'Arc de Trionphe.png</td>
                    <td>sousLaTourEffel.png</td>
                    <td>Le métro parisien</td>
                    <td><button type="button" class="btn btn-warning">Modifier</button></td>
                    <td><button type="button" class="btn btn-danger">Supprimer</button></td>
                </tr>
            </tbody>
        </table>

        <!-- tableau de gestion du formulaire de contact -->
        <table class="table table-dark">
            <thead>
                <h2 class="h3">Tableau de gestion du formulaire de contact</h2>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Adresse Mail</th>
                    <th scope="col">Numéro de Télèphone</th>
                    <th scope="col">Choix du select</th>
                    <th scope="col">Message</th>
                    <th scope="col">suppression</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>TOURE</td>
                    <td>Houléimattou</td>
                    <td>houle.toure@gmail.com</td>
                    <td>0627334506</td>
                    <td>Shooting photo</td>
                    <td>Bonjour, je souhaiterais prendre un rendez-vous </br> pour une shooting photo.</td>
                    <td><button type="button" class="btn btn-danger">Supprimer</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <nav aria-label="navigation">
        <ul class="pager">
            <li><a href="tableBord.php" class="bg-dark text-white" title="Précédent">Précédent</a></li>
        </ul>
    </nav>

    <!-- footer de la page des  arcticles -->
    <footer id="allFooter" class="text-dark text-center text-lg-start">
        <div class="container-fluid p-4">
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
                            <a href="https://www.facebook.com/toure.aisettou"><img
                                    src="../assets/autres/iconesReseauSociaux/Web 1280 – 12.png"
                                    class="rounded-circle"></a>
                        </div>
                        <div class="ml-3">
                            <a href="https://www.instagram.com/kanysphotographie/"><img
                                    src="../assets/autres/iconesReseauSociaux/Web 1280 – 11.png"
                                    class="rounded-circle"></a>
                        </div>
                        <div class="ml-3">
                            <a href="#!"><img src="../assets/autres/iconesReseauSociaux/Web 1280 – 13.png"
                                    class="rounded-circle"></a>
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