<?php foreach ($mammiferes as $mammifere) : ?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= $mammifere['name'] ?> </h4>
        <h5 class="card-text">Weight: <?= $mammifere['weight'] ?></h5>
        <h5 class="card-text">Length: <?= $mammifere['length'] ?></h5>
        <a href="showMammifere.php?id=<?= $mammifere['id'] ?>" class="btn btn-primary">Show More</a>
        <a href="editMammifere.php?id=<?= $mammifere['id'] ?>" class="btn btn-warning">Edit</a>
        <a href="deleteMammifere.php?id=<?= $mammifere['id'] ?>" class="btn btn-danger">Delete</a>
    </div>
</div>



<?php endforeach; ?>

<a href="createMammifere.php" class="btn btn-primary my-5">+ New</a>
