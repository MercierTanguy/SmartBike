
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['velo'] ?? ''; 
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander</title>
</head>
<body>


<section>
    <h2>Commander un vélo</h2>

    <form action="route.php?page=commander" method="post">
        <label for="velo">Sélectionnez un vélo :</label>
        <select id="velo" name="velo" required>
            <option value="0">Bike5</option>
            <option value="1">BikeOne</option>
            <option value="2">Bike22</option>
            <option value="3">BikeFirst</option>
        </select>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Envoyer</button>
    </form>

</section>


</body>
</html>
