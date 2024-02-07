<?php

include_once 'model/CommandeModel.php';

class CommanderController {
    private $model;

    public function __construct() {
        $this->model = new CommandeModel();
    }

    public function afficherFormulaire() {
        include 'view/header.php';
        include 'view/commander.php';
        include 'view/footer.php';
    }

    public function traiterFormulaireCommande($id, $nom, $prenom, $email, $message) {
        
        $result = $this->model->sauvegarderCommande($id, $nom, $prenom, $email, $message);

        if ($result) {
            header('Location: index.php?page=confirmation_commande');
        } else {
            echo "Erreur lors de la commande. Veuillez réessayer.";
        }
    }
}
?>
