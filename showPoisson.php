<?php
require_once "logique/logique.php";

$id = $_GET['id'];

$query = $pdo->prepare("SELECT * FROM poissons WHERE id= :id");

$query->execute([
    "id"=>$id
]);

$poisson = $query->fetch();

render("poisson/show",["pageTitle"=>"ShowMore","poisson"=>$poisson]);

