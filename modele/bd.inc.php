<?php
function connexionPDO() {
    $login = 'dtkykucj_portfolio';
    $mdp = 'lePortfolio45ù';
    $bd = 'dtkykucj_portfolio'; 
    $serveur = 'localhost';
    $port = 3306;

    try {
        $conn = new PDO("mysql:host=$serveur;port=$port;dbname=$bd",$login,$mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print("Erreur de connexion PDO :");
		print($e);
        die();
    }
}