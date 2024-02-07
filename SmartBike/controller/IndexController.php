<?php


require_once "model/IndexModel.php";

class IndexController {
    private $model;

    public function __construct(){
        $this->model = new IndexModel();
    }

    public function index() {
        
        $dernierVelo = $this->model->getDernierVelo();

        include 'view/header.php';
        include 'view/accueil.php';
        include 'view/footer.php';
    }
}
?>
