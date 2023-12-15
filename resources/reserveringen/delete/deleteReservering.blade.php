<!doctype html>
<html>

<head>
    <title>Delete reservering</title>
</head>
<body>
<?php require_once "header.blade.php" ?>

<h1>Delete reservering</h1>

<div id="form" >
    <form action="deleteReservering2.blade.php" method="post">

        <input type="text" name="reser_id">
        <input type="submit"><br/><br/>
    </form>

</div>
<a href="index.php">Terug naar het hoofdmenu</a>
</body>
