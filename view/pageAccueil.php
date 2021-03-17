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
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
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
                            <img src="../assets/img/img2/photoDuSite/portraitNb.png" alt="" class="imgApropos">
                        </div>
                        <div id="textColorPageAccueil" class="col mt-5 mr-5">
                            <h1 class="m-4 mt-2">A propos de moi!</h1>
                            <p class="text-justify">Je suis une jeune entrepreneuse qui à crée son entreprise en
                                juin
                                2019.
                                Passionné par la photographie en général.
                                j'offre mes prestation à travers la région normande.
                                Mes réalisation sont divers car je peu être appeler pour des services de mariage
                                des shooting de naissance, baptême, anniversaire....
                                Vous trouverez sur mon site quelque unes des mes réalisation
                                une galerie spéciale shooting et une galerie spéciale décoration Intéreure.
                                Je suis également passionné par la décoration intérieure
                                Actuellement en formation de décoratrice intérieure, je me suis lancé
                                dans le buisness de décoratrice intérieure chez les personnes.</p>
                        </div>
                    </section>
                    <!-- fin de bloc présentation -->

                    <!-- bloc des articles -->
                    <section class="article mb-2 mt-2 ">
                        <div id="colorTextAllPage" class="text-center text-white">
                            <h2 class="h2 mt-3 pt-4 pb-3 mb-3">Dernières réalisations</h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center mr-4">
                                <title>MasterClass</title>
                                <img src="../assets/img/img2/photoDuSite/masterClass.png" alt="">
                                <p class="text-center text-white mt-2 mb-5">
                                    MasterClass de brook'devis, qui c'est déroulé</br>
                                    en éxtérieur, j'ai réaliser la totalité des photos</br>
                                    Cette master classe était ma premier préstation.</br>
                                    Comment bien faire ces silles avec les différents...</br>
                                </p>
                            </div>
                            <div class="text-center mr-4">
                                <title>NSNV</title>
                                <img src="../assets/img/img2/photoDuSite/nsnsMara.png" alt="">
                                <p class="text-center text-white mt-2 mb-5">
                                    Le shooting avec les mannequins de mla Marque NSNV</br>
                                    c'etait à la foret de mangeons. NSNV étant</br>
                                    la marque de vêtement de mon frére</br>
                                    je m'occupe de la partie photographie lors des shooting...</br>
                                </p>

                            </div>
                            <div class="row mt-3">
                                <div class="text-center mr-5">
                                    <title>Shooting à PARIS</title>
                                    <img src="../assets/img/img2/photoDuSite/soeurMannequinStoo.png" alt="">
                                    <p class="text-center text-white mt-2 mb-5">
                                        Séance photos en pleine air sur la plage du Havre</br>
                                        les filles ont était maquillé par Brook Devis</br>
                                        Une journée ensoleillé, j'ai pu faire de belle photo</br>
                                        en extérieure...
                                    </p>
                                </div>
                                <div class="text-center ml-1 mr-5">
                                    <title>Décoration Intérieure</title>
                                    <img src="../assets/img/imagePageDecoInterieur/décoRedimensionner/déco2.png" alt=""
                                        style="width: 22rem;" style="height: 13rem;">
                                    <p class="text-center text-white mt-2 mb-5">
                                        Séance photos en pleine air sur la plage du Havre</br>
                                        les filles ont était maquillé par Brook Devis</br>
                                        Une journée ensoleillé, j'ai pu faire de belle photo</br>
                                        en extérieure...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pb-3">
                            <a type="submit" href="articles.php" id="buttonAllPage"
                                class="btn text-center text-white">Lire plus</a>
                        </div>
                    </section>
                    <!-- fin block des articles -->



                    <!-- a propos de moi 2éme partie -->
                    <section class="row">
                        <div id="textColorPageAccueil" class=" text-justify col mt-5 mr-5">
                            <p class="pt-3">Vous pouvez découvrir su mon site une rubrique dédier à la
                                photographie,
                                avec les réalisations que j'ai pu faire depuis mon commencement. Il y a également une
                                rubrique dédier
                                à la décoration intérieure (Maison, appartement ...). Je propose mes services pour la
                                décotation Intérieure de vos maison ,
                                que vous soyez en cours de construction ou que vous avez juste envie de changer votre
                                intérieur, je suis la pour donner du renouveau
                                à votre intérieur.
                            </p>
                        </div>
                        <div class="col mb-2 mt-3 ">
                            <img src="../assets/img/img2/PHOTOredimrnsionner/Web 1280 – 1.png" alt="">
                        </div>
                    </section>

                    <!-- contact -->
                    <section class="container-fluid containerFooters text-white">
                        <div class="text-center mt-2">
                            <p class="pt-4">
                                Vous pouvez me contacter via le formulaire de conatcte ci-joint</br>
                                ou par les réseau sociaux (Facebook, Instagram)
                                N'hésitez pas pour vos reservation à me laisser vos coordonnées en remplir le formulaire
                                .
                            </p>
                        </div>
                        <div class="col mb-2 mt-3 pb-3 text-center">
                            <a type="submit" href="contact.php" id="buttonAllPage" class="btn text-white">Contact</a>
                        </div>
                    </section>

                    <!-- galerie image page d'accueil -->
                    <section class="row align-center ml-2 mb-2 mt-3">
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



            <!-- boutton préceédent et suivant -->
            <!-- <nav aria-label="navigation">
                    <div class="pager">
                        <p><a href="../index.php" class=" float-left" title="Précédent"><i class="material-icons">keyboard_arrow_left</i>Précédent</a>
                        <p><a href="portrait.php" class="float-right" title="Suivant">Suivant<i class="material-icons">keyboard_arrow_right</i></a>
                        </p>
                    </div>
                </nav>
                </div> -->

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