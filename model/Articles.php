<?php

class Articles extends Database
{

    public function listArticles() {
        $query = "SELECT * FROM `articlesactuality`;";
        $listArticlesQuery = $this->dataBase->prepare($query);
        $listArticlesQuery->execute();
        $results = $listArticlesQuery->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($results)) {
            return $results;
        } else {
            return false;
        }
    }

    /**
     * Methode permettant de rajouter un patient dans notre base de donnée.
     *
     * @param array $artlcesDetails contient toutes les informations du patient
     * @return boolean Permet de savoir si la requête est bien passé
     */
    public function addArticles(array $articlesDetails)
    {
        // Je mets en place des marqueurs nominatifs pour preparer ma requête avec des valeurs recuperées via form
        $query = 'INSERT INTO `articlesactuality` (`titleArticles`, `dateArticles`, `textArticles`, `imageArticle`)
        VALUES (:titleArticles, :dateArticles, :textArticles, :imageArticle)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addArticlesQuery = $this->dataBase->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addArticlesQuery->bindValue(':titleArticles', $articlesDetails['titleArticles'], PDO::PARAM_STR);
        $addArticlesQuery->bindValue(':dateArticles', $articlesDetails['dateArticles'], PDO::PARAM_STR);
        $addArticlesQuery->bindValue(':textArticles', $articlesDetails['textArticles'], PDO::PARAM_STR);
        $addArticlesQuery->bindValue(':imageArticle', $articlesDetails['imageArticle'], PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($addArticlesQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }


     /**
     * Methode permettant de mettre à jour un patient
     * 
     * @param array contenant les infos du patient
     * @return boolean permettant de savoir si la requête s'est bien déroulée
     */
    public function updateArticle(array $articlesDetails)
    {
        // requete me permettant de modifier mon user
        $query = 'UPDATE `articlesactuality` SET
        `titleArticles` = :titleArticles,
        `dateArticles` = :dateArticles,
        `textArticles` = :textArticles,
        `imageArticle` = :imageArticle
        WHERE id = :id';

        // je prepare requête à l'aide de la methode prepare pour me premunir des injections SQL 
        $updateArticleQuery = $this->dataBase->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $updateArticleQuery->bindValue(':titleArticles', $articlesDetails['titleArticles'], PDO::PARAM_STR);
        $updateArticleQuery->bindValue(':dateArticles', $articlesDetails['dateArticles'], PDO::PARAM_STR);
        $updateArticleQuery->bindValue(':textArticles', $articlesDetails['textArticles'], PDO::PARAM_STR);
        $updateArticleQuery->bindValue(':imageArticle', $articlesDetails['imageArticle'], PDO::PARAM_STR);
        $updateArticleQuery->bindValue(':id', $articlesDetails['id'], PDO::PARAM_STR);

        if ($updateArticleQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

}