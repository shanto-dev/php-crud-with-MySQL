<?php 

// Procedural
// $connection = mysqli_connect('localhost','phpuser','phpuser');


// Object-Oriented
// $connection = new mysqli('localhost', 'phpuser', 'phpuser');

// (PDO)
$connection = new PDO('mysql:host=localhost;dbname=php_user', 'phpuser', 'phpuser');






// Procedural Query
// mysqli_query($connection, 'CREATE DATABASE hqu');


// Object-Oriented Query 
// This query used in pdo connection, we are use pdo connecti because pdo provice extera features.
// $statement = $connection-> prepare("DROP DATABASE hqu");
$statement = $connection->prepare("INSERT INTO users (name, email, phone) VALUES ('Goutam', 'goutam25@gmail.com','01750369908')");
$statement-> execute();

