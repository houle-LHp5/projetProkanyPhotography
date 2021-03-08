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
        ON `photos`.`id` = `category`.`id`';

        $allPhotoQuery = $this->dataBase->query($query);
        if($allPhotoQuery){
            return $allPhotoQuery->fetchAll();
        }else{
            return false;
        }
    }
}