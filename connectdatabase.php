<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "class_contact_mgt";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
