<?php

//include the connection file
include('connection.php');


//create an instance of Connection class
$connection = new Connection ();

//call the createDatabase methods to create database "chap4Db"
$connection->createDatabase('phph');


$query0 = "CREATE TABLE Cities (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
cityName VARCHAR(30) NOT NULL)";
$query10 = "CREATE TABLE filiere (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    filiere VARCHAR(30) NOT NULL)";

$query = "
CREATE TABLE Clients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE,
password VARCHAR(80),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
idCity INT(6) UNSIGNED NOT NULL,
FOREIGN KEY (idCity) REFERENCES Cities(id)
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
idfiliere INT(6) UNSIGNED NOT NULL,
FOREIGN KEY (idfiliere) REFERENCES filiere(id)
)
";

//call the selectDatabase method to select the chap4Db
$connection->selectDatabase('phph');

//call the createTable method to create table with the $query
$connection->createTable($query0);
$connection->createTable($query10);
$connection->createTable($query);


?>