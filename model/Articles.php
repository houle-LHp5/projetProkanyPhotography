<?php

class Articles extends Database
{
    /**
     * Methode permettant de rajouter un patient dans notre base de donnée.
     *
     * @param array $artlcesDetails contient toutes les informations du patient
     * @return boolean Permet de savoir si la requête est bien passé
     */
    public function addArticles(array $articlesDetails)
    {
        // Je mets en place des marqueurs nominatifs pour preparer ma requête avec des valeurs recuperées via form
        $query = 'INSERT INTO `articlesactuality` (`id_articles`, `titleArticles`, `dateArtciles`, `textArticles`, `imageArticle`)
        VALUES (:titleArticles, :dateArtciles, :textArticles, :imageArticle)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addArticlesQuery = $this->dataBase->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addArticlesQuery->bindValue(':id_articles', $articlesDetails['id_articles'], PDO::PARAM_STR);
        $addArticlesQuery->bindValue(':titleArticles', $articlesDetails['titleArticles'], PDO::PARAM_STR);
        $addArticlesQuery->bindValue(':dateArtciles', $articlesDetails['dateArtciles'], PDO::PARAM_STR);
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
     * Méthode permettant d'obtenir la liste de tous les patients
     *
     * @return array
     */
    public function getAllArticles()
    {
        // Nous stockons ici notre requête pour permettre d'obtenir tous nos patients
        $query = 'SELECT `id_articles`, `titleArticles`, `dateArtciles`, `textArticles`, `imageArticle` FROM `articlesactuality` ORDER BY `id_articles` DESC';

        // Nous executons notre requête à l'aide de la méthode query
        $getAllArticlesQuery = $this->dataBase->query($query);

        // j'effectue la methode fetchAll pour obtenir le resultat sous forme de tableau
        return $getAllArticlesQuery->fetchAll();
    }
}