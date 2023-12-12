<?php
require_once "debugMode.php";
require_once "logique/logique.php";

if(isset($_POST['name']) && isset($_POST['weight']) && isset($_POST['length'])){
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $length = $_POST['length'];

    $query = $pdo->prepare("INSERT INTO poissons SET name = :name, weight= :weight, length= :length");
    $query->execute([
        "name"=>$name,
        "weight"=>$weight,
        "length"=>$length
    ]);

    header("Location: index.php");
}

render("poisson/create",["pageTitle"=>"createPoisson"]);
