<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
$servername = "us-cdbr-east-06.cleardb.net";
$username = "be939ffb871918";
$password = "87cca276";
$databasename = "heroku_b87a9cd1fc84562";

// Create connection
$connect = new mysqli($servername, $username, $password, $databasename);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$sql = "SELECT * FROM phonebook";
$result = $connect->query($sql);
echo json_encode($result);
?>
</body>

</html>
