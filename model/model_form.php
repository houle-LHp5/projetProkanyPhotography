<?php
// clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class Froms extends DataBase
{

    public function allVisitors()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $query = 'SELECT `lastname_contact`, `firstname_contact`, `mail_contact` ,`text_contact`,`phone_contact` FROM `contact`';

        // on utilise la méthode query pour executer notre requête
        $queryContactObj = $this->dataBase->query($query);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $result = $queryContactObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $result; // on retourne le tableau
    }


}


class Contact extends DataBase {

    
    public function visitorsForm(array $visitorsFetails){

        //met en place des marqueurs nominatifs pour préparer ma requete avec des valeurs récuperées via form
        $query = 'INSERT INTO `contact` (`lastname_contact`, `firstname_contact`, `mail_contact` ,`text_contact`,`phone_contact`) 
        VALUES (:firstname_contact, :lastname_contact, :mail_contact, :text_contact, :phone_contact)';

        //  Nous preparons notre requete à l'aide de la méthode prepare
        $addVisitorQuery = $this->dataBase->prepare($query);

        //je bind mes valeurs avec l'aide de la méthode bindvalue()
        $addVisitorQuery->bindValue(':firstname_contact',$visitorsFetails['firstname_contact'], PDO::PARAM_STR);
        $addVisitorQuery->bindValue(':lastname_contact',$visitorsFetails['lastname_contact'], PDO::PARAM_STR);
        $addVisitorQuery->bindValue(':mail_contact',$visitorsFetails['mail_contact'], PDO::PARAM_STR);
        $addVisitorQuery->bindValue(':text_contact',$visitorsFetails['text_contact'], PDO::PARAM_STR);
        $addVisitorQuery->bindValue(':phone_contact',$visitorsFetails['phone_contact'], PDO::PARAM_STR);

        // tester et executer la requete pour afficher message erreur
        if($addVisitorQuery->execute()){
            return true;
        } else {
            return false;
        }

    }
}
