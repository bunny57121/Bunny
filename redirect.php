<?php
include "sess.php";
include "conn.php";
$userid=$_SESSION['userid'];
$sql = "UPDATE users SET `status` = 'active' WHERE id = $userid";
$conn->exec($sql);
$_SESSION['play'] = 'false';
header ("Location: index.php");
die;
?>