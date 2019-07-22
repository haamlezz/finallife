<?php
include 'dbconfig.php';
session_start();

extract($_POST);

$sql = "INSERT INTO experiences
        (user_id, experience_name, start, end, place, description)
        VALUES(
            " . $_SESSION['user_id'] . ",
            '$experience_name',
            $start,
            $end,
            '$place',
            '$description'
        )
";

if ($con->query($sql)) {
    echo 'OK';
} else {
    echo $con->error;
}
