<?php
sleep(3);
session_start();
include 'dbconfig.php';
include 'function.php';

if ($_POST) {

    //recaptcha
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcK1a0UAAAAAJv-y7n448YiTyZMuV3hZsaUvsRh';
    $recaptcha_response = $_POST['recaptcha_response'];

    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    if ($recaptcha->score >= 0.5) {
        if (is_logged_in() == FALSE) {
            $username = $con->real_escape_string($_POST['username']);
            $password = $con->real_escape_string($_POST['password']);

            if ($username == "" || $password == "") {
                header('Location:login.php?error=1');
            }

            $sql = "SELECT * FROM users WHERE user_name = '$username' ";

            $rs = $con->query($sql);

            if ($rs->num_rows == 1) {
                $row = $rs->fetch_array();

                if (password_verify($password, $row['password'])) {
                    $_SESSION['login'] = TRUE;
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['user_full_name'] = $row['f_name'] . ' ' . $row['l_name'];
                    $_SESSION['user_id'] = $row['id'];

                    if ($row['role'] == 1) {
                        $_SESSION['admin'] = TRUE;
                    }

                    header('Location:profile.php');
                } else {
                    header('Location:login.php?error=1');
                }
            }
        }
    } else {
        echo 'You are a bot';
    }
} else {
    header('Location:login.php');
}
