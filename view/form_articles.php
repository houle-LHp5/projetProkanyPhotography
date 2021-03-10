<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="card mt-3 w-50">
                <div class="mt-3">
                    <div class="table-responsive">
                        <h1 class="h4 text-center mt-3 mb-5">Modifier l'article</h1>
                        <div class=" row justify-content-center ml-5 formArticles">
                            <form method="POST" action="view_gestionArticles.php" class="needs-validation mb-5"
                                enctype="multipart/form-data">
                                <div>
                                    <div class="w-75">
                                        <label for="nameArticles" class="form-label">Titre de l'aricle</label>
                                        <span class="error"><?= $errors['titleArticles'] ?? '' ?></span>
                                        <input type="text" class="form-control" name="titleArticles" placeholder=""
                                            value="<?= isset($_POST['titleArticles']) ? htmlspecialchars($_POST['titleArticles']) : '' ?>"
                                            required>
                                    </div>
                                    <div class="w-75">
                                        <label for="dateArticles" class="form-label">Date</label>
                                        <input type="date" class="form-control" placeholder="23-02-2021"
                                            name="dateArticles"
                                            value="<?= isset($_POST['dateArticles']) ? htmlspecialchars($_POST['dateArticles']) : '' ?>"
                                            required>
                                    </div>
                                </div>

                                <div class="mt-4 w-75">
                                    <label for="floatingTextarea">Contenu de l'article</label>
                                    <textarea class="form-control" placeholder="" id="floatingTextarea"
                                        name="textArticles"
                                        value="<?= isset($_POST['textArticles']) ? htmlspecialchars($_POST['textArticles']) : '' ?>"></textarea>
                                </div>

                                <div class="justify-content-center">
                                    <p class="mt-4">Télècharger une image</p>
                                    <input type="file" name="imageArticle">
                                    <button id="allFooter" type="submit" name="btnAddArticle"
                                        class="btn text-white w-75 mt-5">Enregistrer les modifications</button>
                                    <button type="reset" name=""
                                        class="btn text-dark bg-light w-75 mt-3">Annuler</button>
                                        <a id="allFooter" type="submit" name="listeArticles"
                                        class="btn text-white w-75 mt-3" href="../view/view_gestionArticles.php#ancreTable">Afficher la liste des articles</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pager mb-5">
            <p><a href="../view/view_gestionArticles.php" class=" float-left" title="Précédent">Précédent</a>
            </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>