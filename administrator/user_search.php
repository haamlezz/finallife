<?php
if (!isset($file)) {
    session_start();
    include 'function.php';
    include '../dbconfig.php';
}
restrict_access();

$search = $con->real_escape_string($_GET['search']);

header('Location: index.php?page=users&search=' . $search);
