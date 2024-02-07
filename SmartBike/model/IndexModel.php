<?php

require_once 'bdd.php';

class IndexModel {
    private $db;

    public function __construct() {
        $this->db = BDD::Connexion();
    }

    public function getDernierVelo() {
        try {
            
            $sql = "SELECT * FROM velos ORDER BY id DESC LIMIT 1";
            $stmt = $this->db->query($sql);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
}
?>
