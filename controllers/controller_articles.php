<?php

require_once '../model/dataBase.php';
require_once '../model/modalArticles.php';
                                                         
// Creation d'un tableau contenant nos articles avec comme info : id, nom, date, contenu et image
//$articlesObj = new Articles;
//$allArticlesArray = $articlesObj->getAllArticles();

$articlesObj = new Articles();

// Regex Perso
$regexTitle = '/^[a-zA-Zéèê\- \'\.\?\!]+$/';

// mise en place d'une variable permettant de savoir si nous avons inscrit le patient dans la base
$addArticlesInBase = false;


// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

if (isset($_POST['btnAddArticle'])) {

    // check input lastname
    if (isset($_POST['titleArticles'])) {

        if (!preg_match($regexTitle, $_POST['titleArticles'])) {
            $errors['titleArticles'] = 'Veuillez respecter le format ex. La guerre des Titans';
        }

        if (empty($_POST['titleArticles'])) {
            $errors['titleArticles'] = 'Veuillez renseigner ce champ';
        }
    }

        // check input text-
        if (isset($_POST['textArticles'])) {

            if (!preg_match($regexTitle, $_POST['textArticles'])) {
                $errors['textArticles'] = 'Veuillez respecter le format ex. La guerre des Titans';
            }
    
            if (empty($_POST['textArticles'])) {
                $errors['textArticles'] = 'Veuillez renseigner ce champ';
            }

        }
    
    // Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
    if (empty($errors)) {

        // Création d'un tableau contenant toutes les infos du formulaire
        $articlesDetails = [
            'titleArticles' => htmlspecialchars($_POST['titleArticles']),
            'dateArticles' => htmlspecialchars($_POST['dateArticles']),
            'textArticles' => htmlspecialchars($_POST['textArticles']),
            'imageArticle' => htmlspecialchars($_FILES['imageArticle']['name'])
        ];

        if ($articlesObj->addArticles($articlesDetails)) {
            $addArticlesInBase = true;
            $messages['addArticles'] = 'Article enregistré';
        } else {
            $messages['addArticle'] = 'Erreur d\'envoi lors de l\'enregistrement';
        }
    }
}


$allArticlesArray = $articlesObj->listArticles();

