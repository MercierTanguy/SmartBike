<?php

require_once 'bdd.php';

class ProduitsModel {
    private $db;

    public function __construct() {
        $this->db = BDD::Connexion();
    }

    public function getVelos() {
        try {
            $sql = "SELECT * FROM velos";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
}
?>
