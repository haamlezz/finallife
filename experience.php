<?php

echo '<h5> ປະສົບການ </h5>';
require 'experience_add.php';


if (isset($_GET['user_id'])) {
    $user_id = $con->real_escape_string($_GET['user_id']);
    $sql = "SELECT * FROM experiences WHERE user_id = " . $user_id . " ORDER BY start ASC ";
} else {
    $sql = "SELECT * FROM experiences WHERE user_id = " . $_SESSION['user_id'] . " ORDER BY start ASC ";
    echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#experienceModal">
  ເພີ່ມປະຫວັດ
</button>';
    echo '<hr/>';
}
$rs = $con->query($sql);
echo $con->error;

if ($rs->num_rows == 0) {
    echo 'ຍັງບໍ່ທັນມີປະສົບການ';
} else {
    echo '<ul class="list-group">';
    while ($row = $rs->fetch_object()) {
        echo '
            <li class="list-group-item">
                <span class="text-default">' . $row->start . ' - ' . ($row->end == 1 ? 'ປະຈຸບັນ' : $row->end) . '</span><br>
                <b style="font-size:16pt;">' . $row->experience_name . '  (' . $row->place . ')</b> <br/>
                ' . $row->description . '
            </li>
        ';
    }
    echo '</ul>';
}
