<?php
include "sess.php";
include "conn.php";
$userid=$_SESSION['userid'];
$sql = "UPDATE users SET `status` = 'premium' WHERE id = $userid";
$conn->exec($sql);
$_SESSION['premium'] = 'true';
header("Location:index.php");
die;
?>