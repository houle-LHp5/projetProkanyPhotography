<?php 
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    </script>
</head>

<body>
    <div class="containeur">
        <!--Navbar -->
        <?php 
include './include/navBarUtilisateur.php';
?>
        <!-- fin de la navbar-->

        <main class="mb-1">
            <div id="textColorPageAccueil" class="mt-5">
                <div class="container">
                    <!-- bloc de presentation  -->
                    <section class="row ">
                        <div class="col mb-2 mt-5 text-center">
                            <img src="../assets/img/img2/PHOTOredimrnsionner/femmeN.png" alt="" class="imgApropos float-left">
                        </div>
                        <div id="textColorPageAccueil" class="col mt-5 mr-5">
                            <h1 class="h3 m-4 mt-2">A propos de moi!</h1>
                            <p class="text-justify">Je suis une jeune entrepreneuse qui a créé son entreprise en juin
                                2019. Passionné par la photographie en général. j'offre mes prestations à travers la
                                région normande. Mes réalisations sont divers cars je peux être appelé pour des services
                                de mariage des shoots ing de naissance, baptême, anniversaire...
                                Vous trouverez sur mon site quelques-unes dès mes réalisations une galerie spéciale
                                shoot ing et une galerie spéciale décoration Intéreure. Je suis également passionné par
                                la décoration intérieure actuellement en formation de décoratrice intérieure, je me suis
                                lancé dans le business de décoratrice intérieure chez les personnes.
                            </p>
                        </div>
                    </section>
                    <!-- fin de bloc présentation -->

                    <!-- bloc des articles page d'accueil -->
                    <section class="article mb-2 mt-2 ">
                        <div id="colorTextAllPage" class="text-center text-white">
                            <h2 class="h3 mt-3 pt-4 pb-3 mb-3">Dernières réalisations</h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center mr-4">
                                <title>MasterClass</title>
                                <img src="../assets/img/img2/photoDuSite/masterClass.png"
                                    alt="oury entrain de maquiller sa mannequin">
                                <p class="colorTextArticles text-center text-white mt-2 mb-5">
                                    Master class de brook 'devis, qui s'est déroulé</br>
                                    en extérieur, j'ai réalisé la totalité des photos</br>
                                    Ce master classé était ma première prestation.</Br>
                                    Comment bien faire ces sille avec les différends...
                                </p>
                            </div>
                            <div class="text-center mr-4">
                                <title>NSNV</title>
                                <img src="../assets/img/img2/photoDuSite/nsnsMara.png" alt="mara">
                                <p class="colorTextArticles text-center text-white mt-2 mb-5">
                                    Le shooting avec les mannequins de mla Marque NSNV</br>
                                    c'etait à la foret de mangeons. NSNV étant</br>
                                    la marque de vêtement de mon frére</br>
                                    je m'occupe de la partie photographie lors des shooting...</br>
                                </p>

                            </div>
                            <div class="row mt-3">
                                <div class="text-center mr-5">
                                    <title>Shooting à PARIS</title>
                                    <img class="img-responsive"
                                        src="../assets/img/img2/photoDuSite/soeurMannequinStoo.png" alt="les filles">
                                    <p class="colorTextArticles text-center text-white mt-2 mb-5">
                                        Séance photos en plein air sur la plage du Havre</br>
                                        les filles ont était maquillé par Brook Devis</br>
                                        Une journée ensoleillée, j'ai pu faire de belle
                                        photo</br>
                                        en extérieure....
                                    </p>
                                </div>
                                <div class="text-center ml-1 mr-5">
                                    <title>Décoration Intérieure</title>
                                    <img class="img-responsive"
                                        src="../assets/img/imagePageDecoInterieur/décoRedimensionner/déco2.png"
                                        alt="table a manger" style="width: 22rem;" style="height: 13rem;">
                                    <p class="colorText text-center text-white mt-2 mb-5">
                                        Ma plus belle satisfaction c'est de voir le regard </br>
                                        émerveillé des clients à la réception du chantier" </br>
                                        Pour la petite histoire, je dois avouer que je suis attirée </br>
                                        par la décoration depuis toujours...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pb-3">
                            <a type="submit" href="articles.php" id="buttonAllPage"
                                class="btn text-center text-white">Lire plus</a>
                        </div>
                    </section>
                    <!-- fin bloc des articles de la page d'accueil -->



                    <!-- a propos de moi 2éme partie -->
                    <section class="row">
                        <div id="textColorPageAccueil" class="col mt-5 mr-5">
                            <p class="pt-3 text-justify">Vous pouvez découvrir su mon site une rubrique dédier à la
                                photographie,
                                avec les réalisations que j'ai pu faire depuis mon commencement. Il y a également une
                                rubrique dédiee
                                à la décoration intérieure (Maison, appartement ...). Je propose mes services pour la
                                décotation Intérieure de vos maisons ,
                                que vous soyez en cours de construction ou que vous ayez juste envie de changer vôtre
                                intérieur, je suis là pour donner du renouveau
                                à votre intérieur.
                            </p>
                        </div>
                        <div class="col mb-2 mt-3">
                            <img class="float-right" src="../assets/img/img2/Nouveau dossier/femmeRegardHaut.png" style="height: 20rem;" alt="photo personnage">
                        </div>
                    </section>

                    <!-- contact -->
                    <section class="container-fluid containerFooters text-white">
                        <div class="text-center mt-2">
                            <p class="pt-4">
                                Vous pouvez me contacter via le formulaire de contact ci-joint</br>
                                ou par les réseaux
                                sociaux (Facebook, Instagram) N'hésitez pas pour vos réservations à me laisser vos
                                coordonnées en remplir le formulaire..
                            </p>
                        </div>
                        <div class="col mb-2 mt-3 pb-3 text-center">
                            <a type="submit" href="contact.php" id="buttonAllPage" class="btn text-white">Contact</a>
                        </div>
                    </section>

                    <!-- galerie image page d'accueil -->
                    <section class="row align-center ml-2 mb-2 mt-3 img-responsive center-block">
                        <div class="zoom colonne">
                            <img src="../assets/img/imagePageDecoInterieur/décoRedimensionner/déco1.png"
                                class="ml-2 mt-2 mr-1 " style="width: 22rem;" style="height: 16rem;"
                                alt="image décoration salon meuble tv et tv">
                        </div>
                        <div class="zoom colonne">
                            <img src="../assets/img/imagePageDecoInterieur/décoRedimensionner/déco2.png"
                                class="ml-2 mt-2 mr-1 zoom colonne" style="width: 22rem;" style="height: 16rem;"
                                alt="image table à manger déco salon">
                        </div>
                        <div class="zoom colonne">
                            <img src="../assets/img/imagePageDecoInterieur/décoRedimensionner/déco3.png"
                                class="ml-2 mt-2 mr-1 zoom colonne" style="width: 22rem;" style="height: 16rem;"
                                alt="image canapé de salon">
                        </div>
                        <div class="zoom colonne">
                            <img src="../assets/img/imagePageDecoInterieur/salon1.png"
                                class="ml-2 mt-3 mr-1 zoom colonne" style="width: 22rem;" style="height: 16rem;"
                                alt="image salon meuble tv">
                        </div>
                        <div class="zoom colonne">
                            <img src="../assets/img/imagePageDecoInterieur/salon2.png"
                                class="ml-2 mt-3 mr-1 zoom colonne" style="width: 22rem;" style="height: 16rem;"
                                alt="image canapé de salon">
                        </div>
                        <div class="zoom colonne">
                            <img src="../assets/img/imagePageDecoInterieur/salon3.png"
                                class="ml-2 mt-3 mr-1 zoom colonne" style="width: 22rem;" style="height: 16rem;"
                                alt="image décoration salon meuble tv et tv">
                        </div>
                    </section>
                </div>
            </div>

            <!--include du footer -->
            <?php 
        include './include/footer.php';
        ?>
            <!-- fin de l'include du footer -->
        </main>

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