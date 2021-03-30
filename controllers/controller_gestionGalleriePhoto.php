<?php

require_once '../model/dataBase.php';
require_once '../model/Photos.php';

$regexName = '/^[a-zA-Zéèê\-]+$/';

// mise en place d'une variable permettant de savoir si nous avons inscrit l'image dans la base
$addPhotoInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

// j'effectue mes controles lors de l'appuie du bouton
if (isset($_POST['addPhotosBtn'])) {


    // controle du choix du select de la part du user
    if (!array_key_exists('catId', $_POST)) {
        $errors['catId'] = 'Veuillez selectionner une catégorie';
    }

    // controle si la personne a choisi un fichier
    if ($_FILES['photoToUpload']['error'] == 4) {
        $errors['photoToUpload'] = 'Veuillez selectionner une photo';
    }

    // controle de l'image
    $fileMime = mime_content_type($_FILES["photoToUpload"]["tmp_name"]); // On extrait le mime de l'image à l'aide d'une fonction.
    $fileType = explode('/', $fileMime); // on créé un array pour obtenit le type et l'extension

    $target_dir = "../assets/img/gallery/"; // chemin du répertoire où seront stocké les images
    $newFileName = uniqid(true) . '.' . $fileType[1]; // Mise en place d'un nom unique lors de l'enregistrement dans la base de données.
    $target_file = $target_dir . $newFileName; // le chemin + nom du fichier qui nous servira lors de l'upload.


    // Verification s'il s'agit bien d'une image 
    if ($fileType[0] != 'image') {
        $errors['photoToUpload'] = 'Votre fichier n\'est pas une image';
    }

    // Verification taille de l'image
    $limit = 5000000; // on definit une limit en bits, 1Mo = 1000000 Bits.
    if ($_FILES["photoToUpload"]["size"] > $limit) {
        $errors['photoToUpload'] = 'Désolé, votre fichier doit faire moins de 5 Mo.';
    }

    // Je verifie s'il n'y a pas d'erreurs dans mon tableau d'erreur afin de lancer ma requete
    if (empty($errors)) {
        $photoDetails = [

            'name_image' => htmlspecialchars($newFileName),
            'id' => htmlspecialchars($_POST['catId'])

        ];

        $objetPhoto = new Photos;
        if ($objetPhoto->addPhoto($photoDetails)) {
            if (move_uploaded_file($_FILES["photoToUpload"]["tmp_name"], $target_file)) {
                $messages['upload'] = 'le fichier a bien été uploadé';
            } else {
                $messages['upload'] = 'Désolé, nous n\'avons pas pu uploadé votre fichier.';
            }
        } else {
            echo 'Etape 2';
        }
    }
}

// nous controllons si nous avons appuyé sur notre bouton delete via la methode POST
$objetSupPhoto = new Photos;

if (isset($_POST['deleteBtn'])) {
    if ($objetSupPhoto->deletePhotos($_POST['deleteBtn'])) {
        $messages['delete'] = 'La photo a bien été supprimé';
    } else {
        $messages['delete'] = 'La photo n\'a pas pu être supprimé';
    }
}
// Je créé un tableau contenant toutes mes photos
$photoObj = new Photos;
$photosArray = $photoObj->getAllPhotos();


