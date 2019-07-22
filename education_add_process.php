<?php
//print_r($_POST);
include 'dbconfig.php';
session_start();
extract($_POST);

//echo "$year, $faculty, $level, $institute, $country\n";

$sql = "INSERT INTO 
        educations (user_id, education_name, year_end, faculty, level, institute, country)
        VALUES(
            " . $_SESSION['user_id'] . ",
            '$education_name',
            $year,
            '$faculty',
            '$level',
            '$institute',
            '$country'
        )
        ";
//echo $sql;

if ($con->query($sql)) {
    header('Location:profile.php');
} else {
    echo $con->error;
}

