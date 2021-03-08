<?php 

require_once '../model/dataBase.php';
require_once '../model/Photos.php';

$photoObj = new Photos;
$photosDecoArray = $photoObj->getAllPhotosByCat(2);

