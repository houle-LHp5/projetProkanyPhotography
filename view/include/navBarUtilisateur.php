
<!-- navBar coté utilisateur -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top" id="navbarAllPage">
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
                <a class="nav-link text-white" href="../view/articles.php">
                    <i class="fab fa-instagram"></i>Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="../view/contact.php">
                    <i class="fab fa-instagram"></i>Contact</a>
            </li>

            <!-- condition  si l'administrateur et connecter, afficher le bouton de déconnexion -->
            <?php 
            if (!empty($_SESSION['user'])){ ?> 
                
                <li class="nav-item text-nowrap">
                <a class="btn btn-sm nav-link text-dark bg-light mr-2" type="button" href="../view/deconnexionDasbord.php"><b
                        class="term">Déconnexion</b></a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="btn btn-sm nav-link text-dark bg-light" type="button" href="../view/view_acceuilDashboard.php"><b
                        class="term">Tableau de bord</b></a>
            </li>
        <?php } else{ ?>
<!-- sinon rien afficher -->
       <?php }  ?>
        </ul>
    </div>
</nav>
<!-- fin de la navbar-->