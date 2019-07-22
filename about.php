<?php
if (isset($_GET['user_id'])) {
    $id = $_GET['user_id'];
} else {
    $id = $_SESSION['user_id'];
}

$sql = "SELECT * FROM users WHERE id = $id LIMIT 1";

$rs = $con->query($sql);

$row = $rs->fetch_object();

echo '
    <div class="text-center">
    <figure class="profile-img">
    <img src="images/' . $row->photo . '" class="img-thumbnail img-fluid">
    </figure>   
    ';
if (is_logged_in()) :
    if (check_owner($row->id)) :
        echo '<a href="#" data-toggle="modal" data-target="#upload_modal">ປ່ຽນຮູບ</a>
        <div class="modal fade" id="upload_modal" tabindex="-1" role="dialog" aria-labelledby="upload_modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>ເພີ່ມປະຫວັດການສຶກສາ</h5>
                        <hr>
                    </div>

                    <div class="modal-body">
                        <form action="upload_photo.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" name="profile" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" value="ອັບໂຫຼດຮູບ"/>
                            </div>

                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">ປິດ</button>
                    </div>

                </div>
            </div>
        </div>';
    endif;
endif;
echo '</div>
    <hr/>
';

if (is_logged_in() && check_owner($row->id)) :
    echo '<a href="about_update.php">ແກ້ໄຂຂໍ້ມູນ</a>';
endif;
echo '<h5 class="text-success">' . $row->f_name . ' ' . $row->l_name . '</h5>';
echo '<p>' . get_gender($row->gender) . '</p>';
echo '<h5>ຂໍ້ມູນ:</h5>';
echo '<p>' . $row->about . '</p>';

echo '<h5>ຕິດຕໍ່</h5>';
echo '<p>ໂທ: ' . $row->tel . '</p>';
echo '<p>ອີເມວ: ' . $row->email . '</p>';
echo '<p>ທີ່ຢູ່: ' . $row->address . '</p>';
