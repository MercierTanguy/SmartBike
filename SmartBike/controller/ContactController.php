<?php

include_once 'model/ContactModel.php';

class ContactController {
    private $model;

    public function __construct() {
        $this->model = new ContactModel();
    }

    public function afficherFormulaire() {
        include 'view/header.php';
        include 'view/contact.php';
        include 'view/footer.php';
    }

    public function traiterFormulaire($nom, $prenom, $email, $message) {
        
        $result = $this->model->sauvegarderMessage($nom, $prenom, $email, $message);

        if ($result) {
            
            header('Location: index.php?page=contact');
        } else {
            echo "Erreur lors de l'envoi du message. Veuillez réessayer.";
        }
    }
}
?>
