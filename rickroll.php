<?php
include "conn.php";
include "sess.php";
$id=$_SESSION['id'];
$sql="UPDATE users SET `status` = 'active' WHERE id = $id";
$conn->exec($sql);
header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
die;
?>