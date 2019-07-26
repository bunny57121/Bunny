<?php
header("refresh:30; url=redirect.php");
include "conn.php";
include "sess.php";
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
    <p><h3>You have found the secret site.</h3></p>
    <p><h3>Now You must pass the test.</h3></p>
    <p></p>
    <p></p>
    <p><h3>Question one: What is the killer joke?</h3></p>
<div class="row">
    <div class="col"><a href="./punishment.php">My dog has no nose.
How does he smell?
Awful</a></div>
<div class="col"><a href="./secret2.php">Wenn ist das Nunstück git und Slotermeyer? Ja! Beiherhund das Oder die Flipperwaldt gersput!</a></div>
<div class="col"><a href="./redirect.php">Der ver zwei peanuts, valking down der strasse, und von vas a salted...peanut. </a>
</div>
</div>
    </div>


</body>
</html>