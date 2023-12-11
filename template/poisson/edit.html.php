<form action="" method="post">

    <input type="text" placeholder="name" name="name" value="<?= $poisson['name'] ?>">
    <input type="text" placeholder="weight" name="weight" value="<?= $poisson['weight'] ?>">
    <input type="text" placeholder="length" name="length" value="<?= $poisson['length'] ?>">
    <button type="submit" name="id" value="<?= $poisson['id'] ?>" class="btn btn-warning">EDIT</button>

</form>
