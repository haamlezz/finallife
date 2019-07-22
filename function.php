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

function redirect($page)
{
    if (is_logged_in() == FALSE) {
        header('Location: ' . $page);
    }
}

function get_educations($user_id)
{
    global $con;
    $sql = "SELECT * FROM educations WHERE user_id = $user_id ORDER BY year_end ASC";
    $rs = $con->query($sql);
    echo $con->error;
    $str = '';
    $str .= '<ul>';
    while ($row = $rs->fetch_array()) {
        $str .= '
        <li>
        ' . $row['year_end'] . ' - ' . $row['level'] . '
        ' . $row['faculty'] . ' - ' . $row['education_name'] . '
        </li>';
    }
    $str .= '</ul>';
    return $str;
}

function get_exps($user_id)
{
    global $con;
    $sql = "SELECT * FROM experiences WHERE user_id = $user_id ORDER BY start ASC";
    $rs = $con->query($sql);
    echo $con->error;
    $str = '';
    $str .= '<ul>';
    while ($row = $rs->fetch_array()) {
        $str .= '
            <li>
                ' . $row['start'] . ' - ' . $row['end'] . '
                ' . $row['experience_name'] . '
            </li>
        ';
    }
    $str .= '</ul>';

    return $str;
}

function check_owner($user_id)
{
    if ($_SESSION['user_id'] == $user_id) {
        return TRUE;
    }
    return FALSE;
}


function get_gender($gender)
{
    switch ($gender) {
        case 1:
            $str = 'ເພດຊາຍ';
            break;

        case 2:
            $str = 'ເພດຍິງ';
            break;
    }

    return $str;
}

function check_gender($gender, $dbgender)
{
    if ($gender == $dbgender) {
        echo 'selected';
    }
}


function error_msg($msg, $error_no)
{
    if ($error_no == 1) {
        echo '<div class="alert alert-danger">';
    } else {
        echo '<div class="alert alert-success">';
    }
    echo $msg;
    echo '</div>';
    unset($_SESSION['error']);
}

function check_selected_option($data, $selected)
{
    if ($data == $selected) {
        return ' selected ';
    }
}
