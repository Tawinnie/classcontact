<?php
require "connectdatabase.php";
if (isset($_POST['Delete'])) {
    $pid = $_POST['id'];
    $Phonename = $_POST['name'];
    $PPhoned = $_POST['Contact'];
    $sql = "DELETE FROM `phonebook` WHERE pid = '$pid'";

    // echo $pid . " " . $PPhoned . " " . $Phonename;
    if (mysqli_query($connect, $sql)) {
        header("Location: Selectdata.php");
        echo "<h3>deleted successfully.
                </h3>";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($connect);
    }
};
