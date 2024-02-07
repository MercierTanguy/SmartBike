<?php




$page = (isset($_GET['page'])) ? $_GET['page'] :"";

switch ($page) {
    case 'accueil':
        include_once('controller\IndexController.php');
        $controller = new IndexController();
        $controller->index();
        break;
    case 'produits':
        include_once('controller\ProduitsController.php');
        $controller = new ProduitsController();
        $controller->afficherVelos();
        break;
    case 'commander':
        include_once('controller\CommanderController.php');
        $controller = new CommanderController();
        $controller->afficherFormulaire();
        break;
    case 'contact':
        include_once('controller\ContactController.php');
        $controller = new ContactController();
        $controller->afficherFormulaire();
        break;
    default:
        echo 'error';
}
?>
