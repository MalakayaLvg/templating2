<?php
require_once "logique/logique.php";

$query = $pdo->query("SELECT * FROM mammiferes");
$mammiferes = $query->fetchAll();

render("mammiferes/index",["pageTitle"=>"Mammifères","mammiferes"=>$mammiferes]);
