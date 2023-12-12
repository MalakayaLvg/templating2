<?php
require_once "logique/logique.php";

$id = $_GET['id'];

$query = $pdo->prepare("SELECT * FROM mammiferes WHERE id= :id");
$query->execute([
    "id"=>$id
]);

$mammifere = $query->fetch();

render("mammiferes/show",["pageTitle"=>$mammifere['name'],"mammifere"=>$mammifere]);