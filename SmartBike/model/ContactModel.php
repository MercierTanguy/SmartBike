<?php

require_once 'bdd.php';

class ContactModel {
    private $db;

    public function __construct() {
        $this->db = BDD::Connexion();
    }

    public function sauvegarderMessage($nom, $prenom, $email, $message) {
        try {
            $sql = "INSERT INTO contact (nom, prenom, email, message) VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$nom, $prenom, $email, $message]);
            return true; 
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return false; 
        }
    }
}
?>
