<?php

function get_hash($string)
{
    return password_hash($string, PASSWORD_DEFAULT);
}

function is_logged_in()
{
    if (isset($_SESSION['login'])) {
        if ($_SESSION['login']) {
            return TRUE;
        }
    }
    return FALSE;
}