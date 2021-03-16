<?php
session_start();
require_once '../model/dataBase.php';

session_destroy();
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
            <h1 class="mt-3">Vous êtes bien déconnecté</h1>
            <form action="../view/view_admin.php" method="POST" class="mt-5 ml-5" novalidate>
                        <div class="text-center ml-5">
                            <img class="mb-4 align-center" src="../assets/autres/videoEtPhotoFondEcran/imageAdmin.png" alt="">
                        </div>
                    </form>
                </div>
        </main>
    </div>
</body>

</html>

<script type="text/javascript">
setTimeout('Redirect()',3000);
function Redirect()
{
    location.href = '../view/view_admin.php';
}
</script>
