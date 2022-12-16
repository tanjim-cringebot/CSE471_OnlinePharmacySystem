<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="pharmacy";

if (!$con= mysqli_connect($dbhost,$dbuser, $dbpass, $dbname))
{
    die("Failed to connect to the database!");

}
