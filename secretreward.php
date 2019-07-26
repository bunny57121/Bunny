<?php
include "sess.php";
include "conn.php";
$userid=$_SESSION['userid'];
$sql = "UPDATE users SET `status` = 'secret' WHERE id = $userid";
$conn->exec($sql);
$_SESSION['secret'] = 'true';
header("Location:index.php");
die;
?>