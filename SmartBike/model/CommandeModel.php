<?php

require_once 'bdd.php';

class CommandeModel {
    private $db;

    public function __construct() {
        $this->db = BDD::Connexion();
    }

    public function sauvegarderCommande($id, $nom, $prenom, $email, $message) {
        try {
            
            $sql = "INSERT INTO commander(id, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$id, $nom, $prenom, $email, $message]);
            return true; 
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
}
?>
