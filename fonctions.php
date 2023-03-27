<?php
    require "config.php";

    function connect()
    {
        try{
            $connect = new PDO("mysql:host=".HOTE.";dbname=".BDD, UTILISATEUR, MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        }
        catch(PDOException $e){
            echo "problème de connexion à la BDD </br>" . $e -> getMessage();
        }

        return $connect;
    }

    function ajout($nom, $prix, $image, $bdd)
    {
        try{
            $sql = "INSERT INTO `produit` (`id`, `nom`, `prix`, `photo`) VALUES
            (40, LOWER('$nom'), '$prix', '$image');";

            $resultat = $bdd -> exec($sql);
        }
        catch(Exception $e){
            echo "Probleme d'ajout </br>". $e -> getMessage();
        }
    }

    function modifier($colonne, $id, $valeur, $bdd)
    {
        $sql = "UPDATE produit
                SET $colonne = '$valeur'
                WHERE id = $id";
        
        $resultat = $bdd -> exec($sql);
    }