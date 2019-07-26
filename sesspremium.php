<?php
session_start();


if ($_SESSION['loggedin'] != "true" || $_SESSION['premium']!= "true") {
    header("Location: login.php");
    die;
}