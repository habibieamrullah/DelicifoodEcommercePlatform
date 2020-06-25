<?php

//general configuration
$websitetitle = "Delicifood | Free PHP Ecommerce Platform";
$baseurl = "http://localhost/ThirteeNov/delicifood/index.php";

//appearance & color settings
$primarycolor = "#13908c";
$primarycolordarker = "#0f7b78";
$bodybg = "#cbcbcb";

//database connection
$host = "localhost";
$dbuser = "xxx";
$dbpassword = "xxx";
$databasename = "xxx";
$connection = mysqli_connect($host, $dbuser, $dbpassword, $databasename);
$connection->set_charset("utf8");

//database tables
$tableusers = "xxx";
$tableproducts = "xxx";

//creating database table for user registration
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS $tableusers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userid VARCHAR(30) NOT NULL,
datereg VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
phone VARCHAR(30) NOT NULL,
address VARCHAR(150) NOT NULL
)");

//creating database table for user products
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS $tableproducts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userid VARCHAR(30) NOT NULL,
productid VARCHAR(30) NOT NULL,
title VARCHAR(50) NOT NULL,
price INT(6),
description VARCHAR(500) NOT NULL,
ext VARCHAR(10) NOT NULL
)");

if(!file_exists("upload"))
	mkdir("upload");

?>