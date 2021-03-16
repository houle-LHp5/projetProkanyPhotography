<?php 
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Contact</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">


</head>

<body>
        <div class="container">
            <!--Navbar -->
            <?php 
    include './include/navBarUtilisateur.php';  
    ?>
            <!-- fin de la navbar-->
    <main>
        <div class="py-5 text-center mt-5">
            <h2>Formulaire de Contact</h2>
            <p class="lead">Vous trouverez ci dessous un formmulaire de contact pour me contacter, Veuillez indiquer
                la raison de votre message précissement dans la partie message d'édier en bas du formulaire. </p>
        </div>

        <div class="row g-3">
            <div class="col-md-5 col-lg-4 order-md-last mb-4 ml-5">
                <img src="../assets/autres/videoEtPhotoFondEcran/imageForm.png" alt="">
            </div>
            <div class="col-md-7 col-lg-8 ml-3">
                <h4 class="mb-3">Vos Coordonnées</h4>
                <form class="needs-validation ml-3" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="lastname" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastname" placeholder="DUPOND" name="lastname"
                                value="" required>
                            <div class="errors">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="firstname" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Marie" name="firstname"
                                value="" required>
                            <div class="errors">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="phone" class="form-label">Télèphone</label>
                                <input type="text" class="form-control" id="phone" placeholder="1234 Main St"
                                    name="phone" value="" required>
                                <div class="errors">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com"
                                    name="message" value="" required>
                                <div class="error">
                                </div>
                            </div>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Ecrivez votre message ici"
                                id="floatingTextarea" required></textarea>
                            <label for="floatingTextarea">Message</label>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button type="submit" id="buttonAllPage" class="btn text-white center mb-2"
                            name="addVisitorBtn">Envoyer</button>
                    </div>

                    <hr class="my-4">
            </div>
        </div>
        </form>
        </div>
        </div>
    </main>

    <!-- <nav aria-label="navigation">
        <div class="pager">
            <p><a href="articles.php" id="allFooter" type="button" class="text-white float-left"
                    title="Précédent">Précédent</a></p>
        </div>
    </nav> -->

<!-- include du footer -->
        <?php 
        include './include/footer.php';
        ?>

    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="form-validation.js"></script>
</body>

</html>