<?php
include "sess.php"


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <?php
    if ($_SESSION['admin'] == "true") { ?>
    <a href="admin.php">Admin</a>
   <?php } ?>
</body>
</html>