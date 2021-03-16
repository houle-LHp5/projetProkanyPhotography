<?php 

class User extends Database
{

public function addUsernamePassword(array $userDetails){

  // Je mets en place des marqueurs nominatifs pour preparer ma requête avec des valeurs recuperées via form
        $query = 'INSERT INTO `user` (`username`, `password`)
        VALUES (:kanyphotography, :kanys1993)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addUserQuery = $this->dataBase->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addUserQuery->bindValue(':username', $userDetails['kanyphotography'], PDO::PARAM_STR);
        $addUserQuery->bindValue(':password', $userDetails['kanys1993'], PDO::PARAM_STR);


        // test et execution de la requête pour afficher message erreur
        if ($addUserQuery->execute()) {
            return true;
        } else {
            return false;
        }
}
}
