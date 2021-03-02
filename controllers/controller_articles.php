<?php

require_once '../model/dataBase.php';
require_once '../model/Articles.php';

// Creation d'un tableau contenant nos patients avec comme info : id, nom, prénom
$articlesObj = new Articles;
$allArticlesArray = $articlesObj->getAllArticles();


// Regex Perso
$regexName = '/^[a-zA-Zéèê\-]+$/';
$regexNumber = '/^0[0-9]{9}$/';

// mise en place d'une variable permettant de savoir si nous avons inscrit le patient dans la base
$addArticlesInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

if (isset($_POST['btnAddArticle'])) {

    // check input lastname
    if (isset($_POST['titleArticles'])) {

        if (!preg_match($regexName, $_POST['titleArticles'])) {
            $errors['titleArticles'] = 'Veuillez respecter le format ex. La guerre des Titans';
        }

        if (empty($_POST['titleArticles'])) {
            $errors['titleArticles'] = 'Veuillez renseigner ce champ';
        }
    }

        // check input text-
        if (isset($_POST['textArticles'])) {

            if (!preg_match($regexName, $_POST['textArticles'])) {
                $errors['textArticles'] = 'Veuillez respecter le format ex. La guerre des Titans';
            }
    
            if (empty($_POST['textArticles'])) {
                $errors['textArticles'] = 'Veuillez renseigner ce champ';
            }

        }
    


    // Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
    if (empty($errors)) {
        $articlesObj = new Articles;

        // Création d'un tableau contenant toutes les infos du formulaire
        $articlesDetails = [
            'titleArticles' => htmlspecialchars($_POST['titleArticles']),
            'dateArtciles' => htmlspecialchars($_POST['dateArtciles']),
            'textArticles' => htmlspecialchars($_POST['textArticles']),
            'imageArticle' => htmlspecialchars($_POST['imageArticle']),
        ];

        if ($articlesObj->addArticles($articlesDetails)) {
            $addArticlesInBase = true;
            $messages['addPatient'] = 'Patient enregistré';
        } else {
            $messages['addPatient'] = 'Erreur de connexion lors de l\'enregistrement';
        }
    }
}
