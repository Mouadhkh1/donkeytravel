<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once "header.blade.php" ?>
<div id='form'>
    <form  class="form" action="updateReservering2.blade.php" method="post">
        <label for="reser_id">reserveringid</label>
        <input type="text" name="reser_id" id="reser_id">
        <input type="submit">
    </form>
</div>
</body>
</html>
