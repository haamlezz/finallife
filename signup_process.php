<?php
include 'header.php';

if ($_POST) {

    $gender = $con->real_escape_string($_POST['gender']);
    $f_name = $con->real_escape_string($_POST['f_name']);
    $l_name = $con->real_escape_string($_POST['l_name']);
    $username = $con->real_escape_string($_POST['username']);
    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    //recaptcha
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcK1a0UAAAAAJv-y7n448YiTyZMuV3hZsaUvsRh';
    $recaptcha_response = $_POST['recaptcha_response'];

    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    if (@$recaptcha->score >= 0.5) {

        $sql = "INSERT INTO users(
            gender, 
            f_name, 
            l_name, 
            user_name, 
            email, 
            password ) 
            VALUES(
                $gender,
                '$f_name',
                '$l_name',
                '$username',
                '$email',
                '$password') ";

        if ($con->query($sql)) {
            echo '<p class="alert alert-success">ສະມັກສະມາຊິກສົມບູນ</p>';
            echo '<p><a href="login.php">ເຂົ້າສູ່ລະບົບ</a></p>';
        } else {
            echo $con->error;
            echo '<p class="alert alert-danger">ມີຂໍ້ຜິດພາດ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ</p>';
        }
    } else {
        echo 'You are a bot';
    }
} else {
    header('Location: index.php');
}

include 'footer.php';
