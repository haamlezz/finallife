<?php
require 'header.php';
if ($_POST) {

    $search = $con->real_escape_string($_POST['search']);
    $type = $con->real_escape_string($_POST['type']);

    $sql = "SELECT * FROM $type
            JOIN users ON $type.user_id = users.id
            WHERE "
}
require 'footer.php';