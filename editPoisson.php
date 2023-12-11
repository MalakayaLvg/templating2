<?php
require_once "logique/logique.php";
require_once "debugMode.php";

if(isset($_POST['name']) && isset($_POST['weight']) && isset($_POST['length']) && isset($_POST['id'])){
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $length = $_POST['length'];
    $id = $_POST['id'];

    $query = $pdo->prepare("UPDATE poissons SET name= :name, weight= :weight, length= :length WHERE id= :id");
    $query->execute([
        "name"=>$name,
        "weight"=>$weight,
        "length"=>$length,
        "id"=>$id
    ]);

    header("Location: index.php");

}

$id = $_GET['id'];

$query = $pdo->prepare("SELECT * FROM poissons WHERE id= :id");
$query->execute([
    "id"=>$id
]);
$poisson = $query->fetch();

render("poisson/edit",["pageTitle"=>"Edit","poisson"=>$poisson]);

