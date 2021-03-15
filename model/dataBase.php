<?php

class DataBase
{
    protected $dataBase;

    private $username = 'kanyphotography';
    private $password = 'kanys2019';
    private $dbName = 'kanyphotography';

    public function __construct()
    {
        // Nous effectuons un try and catch pour obtenir un message d'erreur explicite en cas de non connexion
        try {
            // Nous effectuons une instance PDO pour nous connecter à la base de données
            $this->dataBase = new PDO('mysql:host=localhost;dbname=kanyphotography;charset=utf8', 'kanyphotography', '270287Kouta.');
            // Nous allons activer le mode erreur de PDO
            $this->dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage()); 
        }
    }
}