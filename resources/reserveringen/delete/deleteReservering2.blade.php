<!doctype html>
<html>

<head>
    <title>delete reservering</title>
</head>
<body>
<?php require_once "header.blade.php" ?>

<h1>delete reservering</h1>

<?php


require "Reservering.php";
$reser_id = $_POST["reser_id"];
$dell_art = new Reservering();




$dell_art->Delete($reser_id);




?>


