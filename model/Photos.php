<?php

class Photos extends Database
{
    /**
     * Methode permettant de rajouter une image dans notre base de donnée.
     *
     * @param array $photoDetails contient toutes les informations de la photo
     * @return boolean Permet de savoir si la requête est bien passé
     */
    public function addPhoto(array $photoDetails)
    {
        // Je mets en place des marqueurs nominatifs pour preparer ma requête avec des valeurs recuperées via form
        $query = 'INSERT INTO `photos` (`name_image`, `id`)
        VALUES (:name_image, :id)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addPhotoQuery = $this->dataBase->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addPhotoQuery->bindValue(':name_image', $photoDetails['name_image'], PDO::PARAM_STR);
        $addPhotoQuery->bindValue(':id', $photoDetails['id'], PDO::PARAM_STR);


        // test et execution de la requête pour afficher message erreur
        if ($addPhotoQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllPhotos(){
        $query = 'SELECT `id_photos`, `name_image`, `nameCategorie`
        FROM `photos`
        INNER JOIN `category`
        ON `photos`.`id` = `category`.`id` ORDER BY `id_photos` DESC';

        $allPhotoQuery = $this->dataBase->query($query);
        if($allPhotoQuery){
            return $allPhotoQuery->fetchAll();
        }else{
            return false;
        }
    }

    
    public function getAllPhotosByCat(string $idCat){
        $query = "SELECT `id_photos`, `name_image`, `nameCategorie`
        FROM `photos`
        INNER JOIN `category`
        ON `photos`.`id` = `category`.`id`
        WHERE category.id = $idCat ORDER BY `id_photos` DESC";

        $getAllPhotosByCatQuery = $this->dataBase->query($query);
        if($getAllPhotosByCatQuery){
            return $getAllPhotosByCatQuery->fetchAll();
        }else{
            return false;
        }
    }


    public function updatePhotos(array $photoDetails){
             // requete me permettant de modifier mon article
             $query = 'UPDATE `photos` SET
             `id` = :id,
             `name_image` = :name_image
             WHERE id_photos = :id_photos';
     
             // je prepare requête à l'aide de la methode prepare pour me premunir des injections SQL 
             $updatePhotosQuery = $this->dataBase->prepare($query);
     
             // On bind les values pour renseigner les marqueurs nominatifs
             $updatePhotosQuery->bindValue(':id_photos', $photoDetails['id_photos'], PDO::PARAM_STR);
             $updatePhotosQuery->bindValue(':name_image', $photoDetails['name_image'], PDO::PARAM_STR);
             $updatePhotosQuery->bindValue(':id', $photoDetails['id'], PDO::PARAM_STR);


             if ($updatePhotosQuery->execute()) {
                return true;
            } else {
                return false;
            }
    }

    public function getPhotosDetails(string $id_photos){
        $query = 'SELECT `id_photos`, `name_image`, `nameCategorie`, `photos`.`id`
        FROM `photos`
        INNER JOIN `category`
        ON `photos`.`id` = `category`.`id`
        WHERE `id_photos` = :id_photos';

        $getPhotosDetails = $this->dataBase->prepare($query);

        $getPhotosDetails->bindValue(':id_photos', $id_photos , PDO::PARAM_STR);

        if($getPhotosDetails->execute()){
            var_dump('ok');
            return $getPhotosDetails->fetch();
        }else{
            return false;
        }
    }

       /**
     * methode permettant d'effacer une photo
     *
     * @param string $id_photos
     * @return boolean permettant de savoir si le delete est ok
     */
    public function deletePhotos(string $id_photos)
    {
        // Mise en place de la requête
        $query = 'DELETE FROM `photos` WHERE `id_photos` = :id_photos';

        $deletePhotosQuery = $this->dataBase->prepare($query);

        $deletePhotosQuery->bindValue(':id_photos', $id_photos, PDO::PARAM_STR);

        if ($deletePhotosQuery->execute()) {
            return true;
        } else {
            return false;
        }

    }
}