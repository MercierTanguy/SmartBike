<?php

include_once 'model/VeloModel.php';

class ProduitsController {
    private $model;

    public function __construct() {
        $this->model = new ProduitsModel();
    }

    public function afficherVelos() {
        $velos = $this->model->getVelos();

        include 'view/header.php';
        include 'view/produits.php';
        include 'view/footer.php';
    }
}
?>
