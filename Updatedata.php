<?php
$pid = null;
$Phonename = null;
$PPhoned = null;

if (isset($_POST['Update'])) {
    $pid = $_POST['id'];
    $Phonename = $_POST['name'];
    $PPhoned = $_POST['Contact'];

    // echo $pid . " " . $PPhoned . " " . $Phonename;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Updatedata.php" method="post">
        <input type="hidden" name="id" value="<?php echo $pid ?>">
        PhoneName: <input type="text" name="name" value="<?php echo $Phonename ?>"><br>
        PPhoned: <input type="text" name="Contact" value="<?php echo $PPhoned ?>"><br>
        <input type="submit" value="Update" name="Submit">
    </form>
</body>

</html>

<?php
require "connectdatabase.php";
if (isset($_POST['Submit'])) {
    $pid = $_POST['id'];
    $Phonename = $_POST['name'];
    $PPhoned = $_POST['Contact'];
    $sql = "UPDATE `phonebook` SET `pname`='$Phonename',`pphoned`='$PPhoned' WHERE pid = '$pid'";
    if (mysqli_query($conn, $sql)) {
        echo "<h3>successful.
                </h3>";
        header("Location: Selectdata.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($connect);
    }
};

?>