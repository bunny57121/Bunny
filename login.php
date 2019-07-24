<?php
include 'conn.php';

//check if user has submitted the form
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="SELECT * FROM users WHERE username = '$username'";
    $s = $conn->prepare($sql);
    $s->execute();
    $user=$s->fetch(PDO::FETCH_ASSOC);
    if ($user['username']==$username) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['loggedin'] = 'true';
            if ($user['type']=="admin") {
                $_SESSION['admin'] = 'true';
            }
            header('Location: home.php');
            die;
        } else{
            echo'<h1>Password is incorrect</h1>';
        }
        $password= password_hash($password, PASSWORD_DEFAULT);
        //Insert into database
        $sql = "INSERT INTO users (username, email, `password`) VALUES ('$username', '$email', '$password')";
        $conn->exec($sql);

        header('Location: login.php');
        die;

    } else {
        echo "<h1>Passwords do not match</h1>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<h1>Login</h1>
<form action="" method="post">
<div class="form-group">
    <label for="username">Enter username</label>
    <input type="text" name="username" id="username" required>
</div>
<div class="form-group">
    <label for="password">Enter password</label>
    <input type="password" name="password" id="password" required>
</div>
<button type="submit" class="btn btn-primary" name="login">Login</button>

</form>



















    </div>
</body>
</html>