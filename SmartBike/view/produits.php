<section>
    <h2>Nos vélos</h2>

    <?php foreach ($velos as $velo): ?>
        <div>
            <h3><?php echo $velo['nom']; ?></h3>
            <p>Prix : <?php echo $velo['prix']; ?> €</p>
            <a href="route.php?page=commander">Commander</a>
        </div>

    <?php endforeach; ?>

</section>
