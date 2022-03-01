<?php

require_once("./included/DB.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Records</title>

    <link rel="stylesheet" href="./record.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <div class="table">

    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Patient ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Surname Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>County</th>
        </tr>

        <?php
        $ConnectingDB;

        $sql = "SELECT * FROM p_record";
        $stmt = $ConnectingDB->query($sql);

        while ($DataRows = $stmt->fetch()) {
            $Id = $DataRows["id"];
            $patient = $DataRows["patient"];
            $first_name = $DataRows["first_name"];
            $middle_name = $DataRows["middle_name"];
            $surname = $DataRows["surname"];
            $dob = $DataRows["dob"];
            $gender = $DataRows["gender"];
            $county = $DataRows["county"];
        ?>

            <tr>
                <td><?php echo $Id ?></td>
                <td><?php echo $patient ?></td>
                <td><?php echo $first_name ?></td>
                <td><?php echo $middle_name ?></td>
                <td><?php echo $surname ?></td>
                <td><?php echo $dob ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $county ?></td>
            </tr>

        <?php } ?>


    </table>


</body>

</html>