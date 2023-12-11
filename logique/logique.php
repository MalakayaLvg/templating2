<?php

$dbHost = "localhost";
$dbName = "animaux";
$username = "animaux";
$password = "Nourriture01!";

$pdo = new PDO(
    "mysql:host=$dbHost;dbname=$dbName",$username,$password,
    [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC

    ]

);

function render($templateName,$data)
{
    ob_start();
    extract($data);

    require_once "template/$templateName.html.php";

    $content = ob_get_clean();
    if(!isset($pageTitle)){$pageTitle="Acceuil Poissons";}
    require_once "template/base.html.php";


}
