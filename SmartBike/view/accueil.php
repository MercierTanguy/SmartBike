
<section>
    <h2>Bienvenue sur Smartbike</h2>

    <?php if ($dernierVelo): ?>
        <div>
            <h3>Dernier vélo ajouté</h3>
            <p>Nom du vélo : <?php echo $dernierVelo['nom']; ?></p>
            <p>prix: <?php echo $dernierVelo['prix']; ?></p>
        </div>
    <?php else: ?>
        <p>Aucun vélo disponible pour le moment.</p>
    <?php endif; ?>


</section>

