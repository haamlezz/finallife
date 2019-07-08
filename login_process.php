<?php
session_start();
include 'dbconfig.php';
include 'function.php';

if ($_POST) {
    if (is_logged_in() == FALSE) {
        $username = $con->real_escape_string($_POST['username']);
        $password = $con->real_escape_string($_POST['password']);

        $sql = "SELECT * FROM users WHERE user_name = '$username' ";

        $rs = $con->query($sql);

        if ($rs->num_rows == 1) {
            $row = $rs->fetch_array();

            if (password_verify($password, $row['password'])) {
                $_SESSION['login'] = TRUE;
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['user_full_name'] = $row['f_name'] . ' ' . $row['l_name'];
                $_SESSION['user_id'] = $row['id'];

                header('Location:profile.php');
            } else {
                header('Location:login.php?error=1');
            }
        }
    }
} else {
    header('Location:login.php');
}