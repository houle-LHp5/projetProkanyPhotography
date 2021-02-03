<!doctype html>
<html lang="fr">

<head>
    <title>KanysPhotoGraphie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bodyPageContact">
    <div class="container">
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top" id="navbarPageContact">
            <a class="navbar-brand text-dark" href="index.php">KANY'S</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="pageAccueil.php">
                            <i class="fab fa-instagram"></i>Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="portrait.php">
                            <i class="fab fa-instagram"></i>Portrait</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="decorationInterieur.php">
                            <i class="fab fa-instagram"></i>Décoration Intérieur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="contact.php">
                            <i class="fab fa-instagram"></i>Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="admin.php">
                            <i class="fab fa-instagram"></i>Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="tableBord.php">
                            <i class="fab fa-instagram"></i>Tableau de Bord</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- fin de la navbars-->
        <div id="cardFormContact" class="container-fluid">
            <div class="card mt-3 bg-dark text-white">
                    <h1 class="card-title mt-3">Contact</h1>
                    <form id="formContactPage" class="ml-5 mr-5">
                        <div class="row mb-4">
                            <div class="col-8">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Prénom</label>
                                    <input type="text" id="form3Example1" class="form-control" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Nom</label>
                                    <input type="text" id="form3Example2" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="adressMail">Adresse E-mail</label>
                            <input type="email" id="adressMail" class="form-control" name="adressMail" />
                        </div>
                        <div class="form-outline">
                        <label class="form-label" for="textAreaExample">Message</label>
                            <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                            <button type="submit" class="text-center btn btn-warning justify-content-center">Envoyer</button>
                        </div>
                    </form>
            </div>
        </div>
 
        <footer>
            <div class="text-center p-3 bg-dark text-white mt-3">
                © 2021 Copyright: KanyPhotography
                <a class="text-white" href="https://mdbootstrap.com/"></a>
            </div>
        </footer>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
    <script src="script.js"></script>
</body>

</html>