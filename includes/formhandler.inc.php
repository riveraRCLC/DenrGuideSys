<?php

$frametitle = $_POST["frametitle"];
$description = $_POST["description"];
$fileid = $_POST["fileid"];

require_once "dbh.inc.php";

$query = "INSERT INTO frame (frametitle,description,fileid) VALUES (?,?,?);";
$stmt = $pdo->prepare($query);


$stmt->execute([$frametitle,$description,$fileid]);

