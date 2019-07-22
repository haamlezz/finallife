<?php
include 'src/Database.php';

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PW = '';
$DB_NAME = 'myweb';
$DB_CHARSET = 'utf8';

$db = new Database($DB_HOST, $DB_USER, $DB_PW, $DB_NAME, $DB_CHARSET);

$con = $db->get_conect();
