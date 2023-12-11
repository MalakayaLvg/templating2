<?php
require_once "logique/logique.php";
require_once "dataBase/poissonsManuel.php";

$query = $pdo->query("SELECT * FROM poissons");
$poissons = $query->fetchAll();


render("poisson/index",["poissons"=>$poissons]);