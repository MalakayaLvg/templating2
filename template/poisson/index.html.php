<?php foreach ($poissons as $poisson) : ?>

<div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title"><?= $poisson['name'] ?> </h4>
            <h5 class="card-text">Weight: <?= $poisson['weight'] ?></h5>
            <h5 class="card-text">Length: <?= $poisson['length'] ?></h5>
            <div>
                <a href="showPoisson.php?id=<?= $poisson['id'] ?>" class="btn btn-primary">Show more</a>
                <a href="editPoisson.php?id=<?= $poisson['id'] ?>" class="btn btn-warning">Edit</a>
                <a href="deletePoisson.php?id=<?= $poisson['id'] ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>