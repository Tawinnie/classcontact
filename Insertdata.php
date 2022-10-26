<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <?php


    $connect = mysqli_connect("us-cdbr-east-06.cleardb.net", "be939ffb871918", "87cca276", "heroku_b87a9cd1fc84562");

    // Checking connection
    if ($connect === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 3 values from the form data(input)
    // $PhoneId = $_POST['id'];

    if (isset($_POST['Submit'])) {
        $Phonename = $_POST['name'];
        $PPhoned = $_POST['Contact'];
        $sql = "INSERT INTO `phonebook`(`pname`, `pphoned`) VALUES ('$Phonename','$PPhoned')";
        if (mysqli_query($connect, $sql)) {
            header("Location: Selectdata.php");
            echo "<h3>data inserted successfully.
                    </h3>";
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($connect);
        }

        // mysqli_close($conn);
    }

    if (isset($_POST['Update'])) {
        $Phonename = $_POST['name'];
        $PPhoned = $_POST['Contact'];
        $sql = "UPDATE `phonebook` SET `pname`='[name]',`pphoned`='[Contact]' WHERE 1";
        if (mysqli_query($connect, $sql)) {
            print "<h3>data updated successfully.
                    </h3>";
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($connect);
        }
    }

    if (isset($_POST['Delete'])) {
        $Phonename = $_POST['name'];
        $PPhoned = $_POST['Contact'];
        $sql = "DELETE FROM `phonebook` WHERE 0";
        if (mysqli_query($connect, $sql)) {
            echo "<h3>data deleted successfully.
                    </h3>";
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($connect);
        }
    }

    // Close connection
    mysqli_close($connect);
    ?>

</body>

</html>