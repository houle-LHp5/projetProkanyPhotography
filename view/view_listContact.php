<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:../view/view_admin.php");
}
?>
<!doctype html>
<html lang="fr">

<head>
    <title>KanysPhotoGraphie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

    </script>
</head>

<body>
    <!--Navbar -->
    <?php 
include './include/navBar.php';
?>
    <!-- fin de la navbar -->

    <!-- tableau de gestion du formulaire de contact -->
    <div class="table-responsive mt-5">
        <div class="mt-5">
            <table>
                <tbody>
                    <h1 class="h4 text-center">Gestion des contacts</h1>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Message</th>
                        <th>Sup.</th>
                    </tr>
                    <tr>
                        <td>Carolina </td>
                        <td>Biggleswade</td>
                        <td>65 rue des rêves</td>
                        <td>Ici mon message</td>
                        <td><button type="button" data-toggle="modal" data-target="#supContact"
                                class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                    </tr>
                    <div class="modal" id="supContact" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Supprimer</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Etês vous sur de vouloir supprimer le contact?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <tr>
                        <td>Harry </td>
                        <td>Sparrowhead</td>
                        <td>89 rue des enfants</td>
                        <td>Ici mon message</td>
                        <td><button type="button" data-toggle="modal" data-target="#supContactTwo" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                    </tr>
                    <div class="modal" id="supContactTwo" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Supprimer</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Etês vous sur de vouloir supprimer le contact?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <tr>
                        <td>Marjorie </td>
                        <td>Doors</td>
                        <td>76 rue de la femme</td>
                        <td>Ici mon message</td>
                        <td><button type="button" data-toggle="modal" data-target="#supContactThree" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                    </tr>
                    <div class="modal" id="supContactThree" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Supprimer</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Etês vous sur de vouloir supprimer le contact?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <tr>
                        <td>Earnest </td>
                        <td>Piggington-Smithe</td>
                        <td>98 avenue des malices</td>
                        <td>Ici mon message</td>
                        <td><button type="button" data-toggle="modal" data-target="#supContactFour" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                    </tr>
                    <div class="modal" id="supContactFour" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Supprimer</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Etês vous sur de vouloir supprimer le contact?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <tr>
                        <td>Earnest </td>
                        <td>Piggington-Smithe</td>
                        <td>98 avenue de l'alchimie</td>
                        <td>Ici mon message</td>
                        <td><button type="button"  data-toggle="modal" data-target="#supContactFive" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                    </tr>
                    <div class="modal" id="supContactFive" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Supprimer</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Etês vous sur de vouloir supprimer le contact?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

</body>

</html>