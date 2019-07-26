<?php
include "conn.php";
include "sess.php";
header ("refresh:30; url=redirect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>???</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <p><h3>Question two: What type of cheese is not mentioned in the cheese shop?</h3></p>
<div class="row">
    <div class="col"><a href="./punishment.php">Cheddar</a></div>
<div class="col"><a href="./secret3.php">Stinking Bishop</a></div>
<div class="col"><a href="./redirect.php">Venezualen Beaver cheese</a></div>
</div>
    </div>


</body>
</html>