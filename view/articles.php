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
    <title>Articles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php 
    include './include/navBarUtilisateur.php';  
    ?>

    <div class="container">
        <div class="justify-content-center mb-1">
            <div class="overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 fw-normal">Mes articles</h1>
                    <p class="lead fw-normal">Retrouver sur cette page les articles dédiés à mes derniéres réalisation
                        ou
                        préstations.</p>
                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>

            <hr class="center">


            <div class="articles justify-content-center mb-5">
                <div class="mb-2">
                    <div class="">
                        <h3 class="text-center pt-3 pb-3">Master Class (Brook'Devis)</h3>

                        <div class="row justify-content-center">
                            <div class="ml-1 mt-2 mb-3">
                                <img class="img-responsive" src="../assets/img/biggyEtSaMannequin.png" alt=""
                                    style="width: 18rem;" style="height: 12rem;">
                                <img class="img-responsive" src="../assets/img/biggyEtSaMannequin3.png" alt=""
                                    style="width: 18rem;" style="height: 12rem;">
                                <img class="img-responsive" src="../assets/img/Mannequin3.png" alt=""
                                    style="width: 18rem;" style="height: 12rem;">
                            </div>
                        </div>
                        <p class="text-justify">
                            Une prestation photo lors d'une Master Class de Brook 'Devis, le thème du jour "comment bien
                            faire ses cilles" avec différents matériaux. Brook 'devis est une spécialiste des soins du
                            visage, du maquillage au dermaplanning elle à crée sa micro entreprise il y a maintenant
                            4ans.
                            Elle c'est fait un nom dans la ville auprès d'un public jeune. La master classe c'est
                            dérouler
                            dans le jardin de la maison de son frère. Un thème tout en blanc, une décoration au top,
                            j'ai pu
                            prendre de belle photo. Une de ses mannequin était présente se jour pour la démonstration.
                        </p>
                        <div class="float-right">
                            <p>
                                Posté le 23 Février 2021 par Aïssétou.
                            </p>
                        </div>
                    </div>

                    <hr>

                <!-- l'article de NSNV -->
                    <div class="">
                        <h3 class="text-center pt-3 pb-3">NSNV (Nul Sacrifice Nulle Victoire)</h3>
                        <div class="row justify-content-center">
                            <div class="ml-1 mt-2 mb-3">
                                <img class="img-responsive" src="../assets/img/mara.png" alt="" style="width: 18rem;"
                                    style="height: 12rem;">
                                <img class="img-responsive" src="../assets/img/toubab.png" alt="" style="width: 18rem;"
                                    style="height: 12rem;">
                                <img class="img-responsive" src="../assets/img/toubab2.png" alt="" style="width: 18rem;"
                                    style="height: 12rem;">
                            </div>
                        </div>
                        <p class="text-justify">
                            Le shooting photo des mannequins de la marque NSNV, une marque de vêtement de mon frère,
                            NSNV
                            est une marque de vêtement de tout type, t-shirt, pull, sweat, bonnet, gant, doudoune…, les
                            photos ont était prise à la forêt de mangeons. Si vous souhaitez visiter sont site NSNV il à
                            toute une collection pour Hommes, Femmes et enfant.
                            <a href="https://nsnv.fr/">NSNV</a>

                        </p>
                        <div class="float-right">
                            <p>
                                Posté le 23 Février 2021 par Aïssétou.
                            </p>
                        </div>
                    </div>

                    <hr>

                    <div class="">
                        <div>
                            <h3 class="text-center pt-3 pb-3">Shooting à PARIS</h3>
                        </div>
                        <div class="row justify-content-center">
                            <div class="ml-1 mt-2 mb-3">
                                <img class="img-responsive" src="../assets/img/MannequinSoeursVoile.png" alt=""
                                    style="width: 18rem;" style="height: 12rem;">
                                <img class="img-responsive" src="../assets/img/soeurVoiture4.png" alt=""
                                    style="width: 18rem;" style="height: 12rem;">
                                <img class="img-responsive" src="../assets/img/ourkty9.png" alt="" style="width: 18rem;"
                                    style="height: 12rem;">
                            </div>
                        </div>
                        <div class="text-justify">
                            <p>shooting photo sur paris, c'était ma grande première. séance photos pour un
                                groupe d'amies,
                                le soleil était au rendez-vous. la photogaphie pour mois c'est une grande passion, pouvoir figé les bons moment. 
                            </p>
                        </div>

                        <div class="float-right">
                            <p class="mb-5">
                                Posté le 23 Février 2021 par Aïssétou.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- include du footer -->
            <?php 
        include './include/footer.php';
        ?>
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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>