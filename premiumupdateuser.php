<?php
include "conn.php";
include "sesspremium.php";
//Handle updating user info
if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $status=$_POST['status'];

    $sql= "UPDATE users SET `status`='$status' WHERE id = $id";
    $conn->exec($sql);

}




if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id = $id";
$s=$conn->prepare($sql);
$s->execute();
$user = $s->fetch(PDO::FETCH_ASSOC);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Premium - Update User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Update user</h1>
        <form action="" method="post">
<div class="form-group">
    <label for="status">Edit Status:</label>
    <input type="text" name="status" id="status" value="<?php echo $user['status']; ?>" required>
</div>

<input type="hidden" name="id" value="<?php echo $user['id']; ?>">

<button type="submit" class="btn btn-primary" name="update">Update</button>

        </form>
</body>
</html>