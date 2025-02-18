<?php

/* exponent.php */
global $configure;
require_once("configure.php"); // include `configure`
require_once("mysql_database.php"); // include `database`
$db_class = $configure["database"] . "_database"; // $configure based on configure file
$db = new $db_class(); // create database instance by name
