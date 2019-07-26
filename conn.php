<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//connection file
$host='localhost';
$username='Jeff';
$pass='123456';
$dbname='jeff';
$dsn="mysql:host=$host;dbname=$dbname";
$options=array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);
$conn= new PDO($dsn, $username, $pass, $options);