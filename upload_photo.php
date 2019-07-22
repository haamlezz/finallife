<?php
session_start();
$target_dir = "images/";

$target_file = $target_dir . basename($_FILES["profile"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$image_name = $_SESSION['user_id'] . $_SESSION['user_name'] . rand(1111111, 9999999);
$image_file = $image_name . '.' . $imageFileType;
echo $image_file;

// Check if image file is a actual image or fake image
if (isset($_POST)) {

    // Check file size
    if ($_FILES["profile"]["size"] > 500000) {
        $_SESSION['error'] = "ຟາຍຮູບໃຫຍ່ເກີນໄປ";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $_SESSION['error'] = "ຟາຍຮູບບໍ່ຖືກ";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $_SESSION['error'] = "ບໍ່ສາມາດອັບໂຫຼດໄດ້";
        // if everything is ok, try to upload file
    } else {

        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_dir . $image_file)) {
            $_SESSION['error'] = "ຟາຍອັບໂຫຼດສົມບູນ";

            include 'dbconfig.php';
            $sql = "UPDATE users SET photo = '$image_file' WHERE id = " . $_SESSION['user_id'];
            $con->query($sql);
        } else {
            $_SESSION['error'] = "ເກີດຂໍ້ຜິດພາດ";
        }
    }

    header('Location: profile.php?error=1');
}
