<?php 

require_once 'model/dataBase.php';
require_once 'model/model_form.php';


$regexName = '/^[a-zA-Zéèê\-]+$/';
$regexNumber = '/^0[0-9]{9}$/';
$regexDate = '/^(([0]{1}[1-9]{1})|([1-2]{1}[0-9]{1})|([3]{1}[0-1]{1}))$/';

if (isset($_POST['addVisitorBtn'])) {

    // check input lastname
    if (isset($_POST['lastname'])) {

        if (!preg_match($regexName, $_POST['lastname'])) {
            $errors['lastname'] = 'Veuillez respecter le format ex. DOE';
        }

        if (empty($_POST['lastname'])) {
            $errors['lastname'] = 'Veuillez renseigner ce champ';
        }
    }

    if (isset($_POST['firstname'])) {

        if (!preg_match($regexName, $_POST['firstname'])) {
            $errors['firstname'] = 'Veuillez respecter le format ex. DOE';
        }

        if (empty($_POST['firstname'])) {
            $errors['firstname'] = 'Veuillez renseigner ce champ';
        }
    }

    if (isset($_POST['phone'])) {

        if (!preg_match($regexName, $_POST['phone'])) {
            $errors['phone'] = 'Veuillez respecter le format ex. 0607';
        }

        if (empty($_POST['phone'])) {
            $errors['phone'] = 'Veuillez renseigner ce champ';
        }
    }

          // check input mail
    if (isset($_POST['email'])) {

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Veuillez respecter le format ex. mail@mail.fr';
        }

        if (empty($_POST['email'])) {
            $errors['email'] = 'Veuillez renseigner ce champ';
        }
    }



    if (isset($_POST['message'])) {

        if (!preg_match($regexName, $_POST['message'])) {
            $errors['message'] = 'Veuillez respecter le format ex. 0607';
        }

        if (empty($_POST['message'])) {
            $errors['message'] = 'Veuillez renseigner ce champ';
        }
    }


    var_dump($errors);

    // Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
    if (empty($errors)) {
        $formsObj = new Forms;

        // Création d'un tableau contenant toutes les infos du formulaire
        $visitorsFetails = [
            'lastname_contact' => htmlspecialchars($_POST['lastname_contact']),
            'firstname_contact' => htmlspecialchars($_POST['firstname_contact']),
            'mail_contact' => htmlspecialchars($_POST['mail_contact']),
            'text_contact' => htmlspecialchars($_POST['text_contact']),
            'message' => htmlspecialchars($_POST['message']),
        ];

         if ($formsObj->visitorsForm($visitorsFetails)) {
             $messages['visitorsForm'] = 'Visiteur enregistré';
        } else {
             $messages['visitorsForm'] = 'Erreur de connexion lors de l\'enregistrement';
        }
    }
}


?>