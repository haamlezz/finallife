<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PW = '';
$DB_NAME = 'myweb';
$con =  new mysqli($DB_HOST, $DB_USER, $DB_PW, $DB_NAME) or die('Error Connection');
$con->set_charset('utf8');