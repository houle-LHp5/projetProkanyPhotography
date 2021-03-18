<nav id="navbarAllPage" class="mb-1 navbar navbar-expand-lg fixed-top">
    <div class="navbar-collapse collapse justify-content-between">
        <a class="navbar-brand text-white" href="../index.php">KANY'S</a>
        <ul class="navbar-nav ml-auto px-3">

            
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/pageAccueil.php"><span
                        style="text-decoration: underline;">Aller sur le site</span></a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_acceuilDashboard.php">Tableau de bord</a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_gestionGaleriePhoto.php">Gestion des galleries
                    photos</a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_gestionArticles.php">Gestion des articles</a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link text-white" href="../view/view_listContact.php">Gestion des contacts</a>
            </li>
            <?php
            if (!empty($_SESSION['user']['id'])){?>
            <li class="nav-item text-nowrap">
                <a class="btn btn-sm nav-link text-white" href="../view/view_listContact.php">Connecté</a>
            </li>
            <?php  } else { ?> 
            <li class="nav-item text-nowrap">
                <a class="btn btn-sm nav-link text-dark bg-light" type="button" href="../view/deconnexionDasbord.php"><b
                        class="term">Déconnexion</b></a>
            </li>
              <?php } ?>
        </ul>
    </div>
</nav>