<?php
session_start();
require_once '../model/dataBase.php';
require_once '../model/model_admin.php';

$errors = [];
$message = [];

$adminId = '$2y$10$G2zfKBt/TGJNpOqyV72Q0OrMS/uQX/jrUBmQI786rKtxCMUDzNIBa';
$adminPassword = '$2y$10$k2ttDYUv1i2aVnDWjnbxCOrBG1VBdntf1c71Cq3LfuHyc53QqCj4K';

if (isset($_POST['btnConnectAdmin'])) {

   if (isset($_POST['username'])) {

      if (empty($_POST['username'])) {
         $errors['username'] = 'Veuillez renseigner un identifiant';
      }
   }

   if (isset($_POST['password'])) {

      if (empty($_POST['password'])) {
         $errors['password'] = 'Veuillez renseigner un mot de passe';
      }
   }
   if (empty($errors)) {
      if (!password_verify($_POST['username'], $adminId)) {
         $message['connection'] = 'Identifiant ou mot de passe incorrect';
      }
      if (!password_verify($_POST['password'], $adminPassword)) {
         $message['connection'] = 'Identifiant ou mot de passe incorrect';
      }
      if (empty($message)) {
         $_SESSION['user'] = 'admin';
         header ("location: view_acceuilDashboard.php");
      }
   }
}
