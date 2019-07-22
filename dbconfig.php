<?php
include 'src/Database.php';
//mysql://bd426fc839871f:020d1a36@us-cdbr-iron-east-02.cleardb.net/heroku_41703dc27506f1e?reconnect=true
$DB_HOST = 'us-cdbr-iron-east-02.cleardb.net';
$DB_USER = 'bd426fc839871f';
$DB_PW = '020d1a36';
$DB_NAME = 'heroku_41703dc27506f1e';
$DB_CHARSET = 'utf8';

$db = new Database($DB_HOST, $DB_USER, $DB_PW, $DB_NAME, $DB_CHARSET);

$con = $db->get_conect();
