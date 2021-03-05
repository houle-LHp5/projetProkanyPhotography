<?php 

require_once '../model/dataBase.php';
require_once '../model/Photos.php';

$test = new Photos;
var_dump($test->getAllPhotos());


$regexName = '/^[a-zA-Zéèê\-]+$/';

// mise en place d'une variable permettant de savoir si nous avons inscrit le patient dans la base
$addPhotoInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

if (isset($_POST['addPatientBtn'])) {

    // check input lastname
    if (isset($_POST['name_image'])) {

        if (!preg_match($regexName, $_POST['name_image'])) {
            $errors['name_image'] = 'Veuillez respecter le format ex. DOE';
        }

        if (empty($_POST['name_image'])) {
            $errors['name_image'] = 'Veuillez renseigner ce champ';
        }
    }



    // Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
    if (empty($errors)) {
        $patientsObj = new Photos;

        // Création d'un tableau contenant toutes les infos du formulaire
        $photoDetails = [
            'name_image' => htmlspecialchars($_POST['name_image']),
            'id' => htmlspecialchars($_POST['id'])
        ];


        if ($photoObj->addPhoto($photoDetails)) {
            $addPhotoInBase = true;
            $messages['addPatient'] = 'Image enregistré';
        } else {
            $messages['addPatient'] = 'Erreur lors de l\'envoi';
        }
    }
}
