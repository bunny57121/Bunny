<?php
session_start();

if (isset($_SESSION['loggedin'])) {


if ($_SESSION['loggedin'] != "true") {
    header("Location: login.php");
    die;
}
}