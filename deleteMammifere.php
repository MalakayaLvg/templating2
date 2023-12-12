<?php
require_once "logique/logique.php";
require_once "debugMode.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = $pdo->prepare("DELETE FROM mammiferes WHERE id= :id");
    $query->execute([
        "id"=>$id
    ]);

    header("Location: mammiferes.php");
}
