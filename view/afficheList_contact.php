<?php 

require_once '../controller_contact.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>formulaire de contact</title>
</head>

<body>
<div class="container-fluid">
    <div class="mt-5 tablePageTableBord ml-5 mt-3 pr-5 pl-5">
        <h2>Liste des personnes</h2>
        <div id="tableDashboard" class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Télèphone</th>
                        <th>Adresse E-mail</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php foreach($allContactArray as $forms){?>

                        <td><?= $forms['lastname'] ?></td>
                        <td><?= $forms['firstname'] ?></td>
                        <td><?= $forms['phone'] ?></td>
                        <td><?= $forms['email'] ?></td>
                        <td><?= $forms['message'] ?></td>
                    </tr>
               <?php } ?>
                </tbody>
            </table>
        </div>
        </main>
    </div>
    </p>
    </div>
    <a href="javascript:history.go(-1)">Retour</a>
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
    <script src="script.js"></script>
</body>

</html>