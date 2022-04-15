<?php 

$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "cashko";

$connection = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if(!$connection) {
      die('Error in Establishing Database'  .mysqli_connect_error());
}