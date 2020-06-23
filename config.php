<?php

//general configuration
$websitetitle = "Hubby | Home Cooks for everyone";
$baseurl = "https://alkalomeclat.com/hubby/index.php";

//appearance & color settings
$primarycolor = "#9503f1";
$primarycolordarker = "#7e00ce";
$bodybg = "#cbcbcb";

//database connection
$host = "localhost";
$dbuser = "alkalome_habibie";
$dbpassword = "+mY-Eef^Ox_0";
$databasename = "alkalome_testdb";
$connection = mysqli_connect($host, $dbuser, $dbpassword, $databasename);
$connection->set_charset("utf8");

//database tables
$tableusers = "hubbyusers";
$tableproducts = "hubbyproducts";

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


?>