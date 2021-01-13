<!doctype html>
<html lang="fr">

<head>
    <title>KanysPhotoGraphie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    </script>
</head>

<body id="bodyPageContact">
    <thead>
        <div class="containeur-fluid">
            <!--Navbar -->
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top" id="navbarPageContact">
                <a class="navbar-brand text-white" href="index.php">KANY'S</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="toutesLesCategories.php">
                                <i class="fab fa-instagram"></i>Toutes les catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="portrait.php">
                                <i class="fab fa-instagram"></i>Portrait</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="decorationInterieur.php">
                                <i class="fab fa-instagram"></i>décoration Intérieur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php">
                                <i class="fab fa-instagram"></i>Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="aPropos.php">
                                <i class="fab fa-instagram"></i>A propos</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </thead>
    <!-- fin de la navbar-->
    <tbody>
        <div id="formPageContact">
            <h1>formulaire de Contact</h1>
            <!-- formulaire de contacts -->
            <form id="formContactPageContact">
                <!-- Nom -->
                <div class="row'">
                <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="nomPrenom">Prénom</label>
                    <input type="text" id="nomPrenom" class="form-control" name="nomPrenom" />
                </div>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="nomPrenom">Nom</label>
                    <input type="text" id="nomPrenom" class="form-control" name="nomPrenom" />
                </div>
                </div>

                <!-- Email -->
                <div class="row">
                <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="adressMail">Adresse E-mail</label>
                    <input type="email" id="adressMail" class="form-control" name="adressMail" />
                </div>
                </div>

                <!-- numéro de télèphone -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="phoneNumber">Télèphone</label>
                    <input type="text" id="phoneNumber" class="form-control" name="phoneNumber" />
                </div>
                </div>

                <!-- Message -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="blockMessage">Message</label>
                    <textarea class="form-control" id="blockMessage" rows="4" name="blockMessage"></textarea>
                </div>

                <!-- bouton de  contact -->
                <button type="submit" class="btn btn-brown btn-block mb-4" class="buttonContact" name="envoyer">Envoyer</button>
            </form>
            <!-- fin du formulaire de contact -->

        </div>
    </tbody>

    <footer class="footerPageContact">
        <div class="iconeReseauSociauxPageContact">
            <!-- Facebook -->
            <a class="btn" style="background-color: #3b5998" href="https://www.facebook.com/toure.aisettou"
                role="button"><i class="fab fa-facebook-f">Facebook</i></a>

            <!-- Instagram -->
            <a class="btn" style="background-color: #ac2bac" href="https://www.instagram.com/kanysphotographie/?hl=fr"
                role="button"><i class="fab fa-instagram">Instagram</i></a>
        </div>
        <p class="paragraphFooterPageContact">© Copyright KanysPhotoGraphie 2020</p>
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
    <script src="script.js"></script>
</body>

</html>