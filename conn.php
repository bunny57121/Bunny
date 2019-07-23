<?php

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