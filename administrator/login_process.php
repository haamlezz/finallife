<?php
sleep(3);
session_start();
include '../dbconfig.php';
include 'function.php';

if ($_POST) {
    //echo 'post<br>';
    //recaptcha
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcK1a0UAAAAAJv-y7n448YiTyZMuV3hZsaUvsRh';
    $recaptcha_response = $_POST['recaptcha_response'];

    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    if ($recaptcha->score >= 0.5) {
        //echo 'score 0.5<br>';
        if (is_logged_in() == FALSE) {
            //echo 'start<br>';
            $username = $con->real_escape_string($_POST['username']);
            $password = $con->real_escape_string($_POST['password']);

            if ($username == "" || $password == "") {
                echo 'empty<br>';
                $_SESSION['error'] = ['no' => 1, 'msg' => 'ຜິດພາດ'];
                header('Location:login.php');
            }

            $sql = "SELECT * FROM users WHERE user_name = '$username' ";
            $rs = $con->query($sql);
            //echo 'query<br>';
            if ($rs->num_rows == 1) {
                //echo 'num1<br>';
                $row = $rs->fetch_array();
                if ($row['admin'] == 1) {
                    //echo 'role=1<br>';
                    if (password_verify($password, $row['password'])) {
                        echo 'password verified<br>';
                        $_SESSION['admin'] = TRUE;
                        $_SESSION['login'] = TRUE;
                        $_SESSION['user_name'] = $row['user_name'];
                        $_SESSION['user_full_name'] = $row['f_name'] . ' ' . $row['l_name'];
                        $_SESSION['user_id'] = $row['id'];


                        //$sql = ""

                        header('Location:index.php');
                        exit;
                    }
                } else {
                    //echo 'role not 1<br>';
                    $_SESSION['error']    =  ['no' => 1, 'msg' => 'ທ່ານບໍ່ມີສິດເຂົ້າເຖິງຂໍ້ມູນ'];
                    header('Location:login.php');
                }
            } else {
                //echo 'no user<br>';
                $_SESSION['error'] = ['no' => 1, 'msg' => 'ຜິດພາດ'];
                header('Location:login.php');
            }
        }
    }
} else {
    header('Location:login.php');
}
