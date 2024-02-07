<?php

class BDD
{
    public static function Connexion()
    {
        try {
            $bdd=new PDO("pgsql:host=localhost;port=5432;dbname=SmartBike;user=postgres;password=root");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connexion bdd fonctionnelle, ";
            return $bdd;

        } catch (Exception $e) {
            echo ("$e");
        }
    }

   
    
}
