<?php
require_once '../controllers/controller_admin.php';
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Admin</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>


<body>
    <div class="container">
        <main class="row justify-content-center align-items-center">
            <div class="card mt-5" style="width: 30rem;" style="height: 40rem;">
            <h1 class="mt-3">Connexion</h1>
            <form action="../view/view_admin.php" method="POST" class="mt-5 ml-5">
                        <div class="text-center ml-5">
                            <img class="mb-4 align-center" src="../assets/autres/videoEtPhotoFondEcran/imageAdmin.png" alt="">
                            <div class="center">
                                <label for="username" class="w-50 mb-2 mt-1">Nom d'utlilisateur</label>
                                <input type="text" id="username" class="imputFormAdmin form-control w-50"
                                    placeholder="mon nom d'utilisateur" required autofocus>
                                <label for="inputPassword" class="w-50 mb-2 mt-1">Mot de passe</label>
                                <input type="password" id="inputPassword" class="imputFormAdmin form-control w-50 ml-5"
                                    placeholder="65334KTRU98" required>
                            </div>
                        </div>
                        <button id="buttonAllPage" class="buttonFormAdmin btn mt-3 mb-3 text-white" type="submit">Connexion </button>
                        <?php 
                        if(isset($_GET['erreur'])){
                            $err = $_GET['erreur'];
                                if($err==1 || $err==2)
                                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        }
                        ?>
                    </form>
                </div>
        </main>
    </div>
</body>

</html>

