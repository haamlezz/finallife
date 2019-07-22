<?php

echo '<h5> ລະດັບການສຶກສາ </h5>';


if (isset($_GET['user_id'])) {
    $user_id = $con->real_escape_string($_GET['user_id']);
    $sql = "SELECT * FROM educations WHERE user_id = " . $user_id . " ORDER BY year_end ASC ";
} else {
    $sql = "SELECT * FROM educations WHERE user_id = " . $_SESSION['user_id'] . " ORDER BY year_end ASC ";
    echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  ເພີ່ມປະຫວັດ
</button>';
    echo '<hr/>';
    require 'education_add.php';
}
$rs = $con->query($sql);

if ($rs->num_rows == 0) {
    echo 'ຍັງບໍ່ມີປະຫວັດການສຶກສາ';
} else {


    echo '<ul class="list-group">';
    while ($row = $rs->fetch_object()) {
        echo '
        
            <li class="list-group-item">
                <span class="text-default">' . $row->year_end . '</span><br>
                <b style="font-size:16pt;">' . $row->education_name . '  (' . $row->country . ')</b>  </br>
                ' . $row->level . ', ' . $row->faculty . ' ' . $row->institute . '            
            </li>
        
        ';
    }
    echo '</ul>';
}
