<?php 

require_once '../model/dataBase.php';
require_once '../model/Photos.php';

$photoObj = new Photos;
$photosPortraitArray = $photoObj->getAllPhotosByCat(1);

