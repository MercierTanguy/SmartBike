<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>



<section>
    <h2>Contactez-nous</h2>
    
    <form action="route.php?page=contact" method="post">
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
