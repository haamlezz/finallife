<?php
session_start();
include '../dbconfig.php';
include 'function.php';

restrict_access();


if ($_POST) {
    $status = $con->real_escape_string($_POST['status']);
    $user_id = $con->real_escape_string($_POST['user_id']);
    $day = $con->real_escape_string($_POST['day']);
    $year = $con->real_escape_string($_POST['year']);
    $month = $con->real_escape_string($_POST['month']);
    $gender = $con->real_escape_string($_POST['gender']);
    $f_name = $con->real_escape_string($_POST['f_name']);
    $l_name = $con->real_escape_string($_POST['l_name']);
    $tel = $con->real_escape_string($_POST['tel']);
    $address = $con->real_escape_string($_POST['address']);
    $email = $con->real_escape_string($_POST['email']);
    $about = $con->real_escape_string($_POST['about']);


    $date_of_birth = $year . '-' . $month . '-' . $day;

    $sql = "UPDATE users SET 
                gender = $gender,
                f_name = '$f_name',
                l_name = '$l_name',
                tel = '$tel',
                address = '$address',
                email = '$email',
                date_of_birth = '$date_of_birth',
                about = '$about',
                status = $status

                WHERE id = $user_id
        ";

    //echo $sql;

    if ($con->query($sql)) {
        $_SESSION['error'] = ['msg' => 'ແກ້ໄຂຂໍ້ມູນສົມບູນ', 'no' => 0];
    } else {
        $_SESSION['error'] = ['msg' => 'ມີຂໍ້ຜິດພາດ', 'no' => 1];;
    }

    header('Location: index.php?page=user_detail&user_id=' . $user_id);
}
