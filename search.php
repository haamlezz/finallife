<?php
require 'header.php';

echo '
    <div class="row">
        <div class="col-md-6 center text-center">
            <h5>ລະບົບຊອກຫາແຮງງານ</h5>
            <form action="search.php" method="get">
                <div class="form-group">
                    <input type="text" name="search" id="" placeholder="ຊອກຫາພະນັກງານ (ຕົວຢ່າງ: ໄອທີ, ກໍ່ສ້າງ)" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="ຄົ້ນຫາ" class="btn btn-success">
                </div>

            </form>
        </div>

    </div>
';

if ($_GET) {

    $search = $con->real_escape_string($_GET['search']);


    $sql = "SELECT 
                educations.education_name, 
                users.*
            FROM educations
            JOIN users ON educations.user_id = users.id
            WHERE 
                educations.education_name LIKE '%$search%'
            AND
                users.status = 0
            GROUP BY educations.user_id
            ";


    echo '<h1 class="text-center">ຜົນການຄົ້ນຫາ</h1>';

    echo '<div class="shadow">';
    echo '<div class="container">';
    echo '<div class="list-group">';
    $rs = $con->query($sql);
    echo $con->error;

    if ($rs->num_rows == 0) {
        echo '<div class="list-group-item">ບໍ່ເຫັນຫຍັງ</div>';
    } else {
        while ($row = $rs->fetch_array()) {
            echo '<div class="list-group-item">';
            echo '
            <div class="row">
                <div class="col-md-2">
                    <a href="profile.php?user_id=' . $row['id'] . '">
                        <img style="width:100%" src="images/' . $row['photo'] . '" class="rounded-circle img-fluid img-thumbnail"/>
                    </a>
                </div>
                <div class="col-md-8">
                    <a href="profile.php?user_id=' . $row['id'] . '" class="text-success"><h3>' . $row['f_name'] . ' ' . $row['l_name'] . '</h3></a>
                    <div class="row">
                        <div class="col">
                            <p>ປະຫວັດການສຶກສາ</p>
                            ' . get_educations($row['id']) . '
                        </div>
                        <div class="col">
                            <p>ປະສົບການ</p>
                            ' . get_exps($row['id']) . '
                        </div>
                    </div>
                </div>
            </div>
            ';
            echo '</div>';
        }
    }

    echo '</div></div></div>';
}
require 'footer.php';
