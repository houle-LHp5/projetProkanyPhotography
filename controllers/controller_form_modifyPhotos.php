<?php

require_once '../model/dataBase.php';
require_once '../model/Photos.php';

$errors = [];

$objetPhotos = new Photos;
if (isset($_POST['photoToModify'])) {
    $photoDetails = $objetPhotos->getPhotosDetails($_POST['photoToModify']);
    $_SESSION['photoDetails'] = $photoDetails;
}

require_once '../view/form_modifyPhotos.php';

if (isset($_POST['updatePhotoButton'])) {

    if (array_key_exists('updateCat', $_POST) && $_FILES['updatePhoto'] != 4) {
        // controle de l'image
        $fileMime = mime_content_type($_FILES["updatePhoto"]["tmp_name"]); // On extrait le mime de l'image à l'aide d'une fonction.
        $fileType = explode('/', $fileMime); // on créé un array pour obtenit le type et l'extension

        $target_dir = "../assets/img/gallery/"; // chemin du répertoire où seront stocké les images
        $newFileName = uniqid(true) . '.' . $fileType[1]; // Mise en place d'un nom unique lors de l'enregistrement dans la base de données.
        $target_file = $target_dir . $newFileName; // le chemin + nom du fichier qui nous servira lors de l'upload.


        // Verification s'il s'agit bien d'une image 
        if ($fileType[0] != 'image') {
            $errors['updatePhoto'] = 'Votre fichier n\'est pas une image';
        }

        // Verification taille de l'image
        $limit = 5000000; // on definit une limit en bits, 1Mo = 1000000 Bits.
        if ($_FILES["updatePhoto"]["size"] > $limit) {
            $errors['updatePhoto'] = 'Désolé, votre fichier doit faire moins de 5 Mo.';
        }

        // Je verifie s'il n'y a pas d'erreurs dans mon tableau d'erreur afin de lancer ma requete
        if (empty($errors)) {
            $photoDetails = [

                'name_image' => htmlspecialchars($newFileName),
                'id' => htmlspecialchars($_POST['updateCat']), 
                'id_photos' => $_SESSION['photoDetails']['id_photos']

            ];

            $objetPhoto = new Photos;
            if ($objetPhoto->updatePhotos($photoDetails)) {
                if (move_uploaded_file($_FILES["updatePhoto"]["tmp_name"], $target_file)) {
                    $messages['upload'] = 'le fichier a bien été uploadé';
                    header('Location: ../view/view_gestionGaleriePhoto.php');
                } else {
                    $messages['upload'] = 'Désolé, nous n\'avons pas pu uploadé votre fichier.';
                }
            } else {
                echo 'Etape 2';
            }
        }
    }
}
