<?php
include "sess.php";
include "conn.php";
$userid=$_SESSION['userid'];
$sql = "UPDATE users SET `status` = 'play' WHERE id = $userid";
$conn->exec($sql);
$_SESSION['play'] = 'true';
header("refresh:5; url=secret.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>And now for something completely different</title>
</head>
<body>
<iframe width="0" height="0" src="https://www.youtube.com/embed/Zk-kQSz-Qv0?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>