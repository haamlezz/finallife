<?php require 'header.php'; ?>
<?php
if (is_logged_in()) :
    $sql = "SELECT * FROM users WHERE id = " . $_SESSION['user_id'];
    $rs = $con->query($sql);
    $row = $rs->fetch_object();
    if (check_owner($row->id)) :
        //echo $row->date_of_birth;
        $new_d = explode('-', $row->date_of_birth);
        ?>
        <div class="col-md-8 offset-md-2 shadow">
            <h3>ແກ້ໄຂຂໍ້ມູນສ່ວນໂຕ</h3>
            <hr>
            <form action="about_update_process.php" method="post">
                <input type="hidden" value="<?php echo $row->id ?>" name="user_id">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 text-right">ຊື່</div>
                        <div class="col-md-9">
                            <input value="<?php echo $row->f_name; ?>" type="text" name="f_name" id="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 text-right">ນາມສະກຸນ</div>
                        <div class="col-md-9">
                            <input value="<?php echo $row->l_name; ?>" type="text" name="l_name" id="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 text-right">ເພດ</div>
                        <div class="col-md-9">
                            <select name="gender" id="" class="form-control">
                                <option <?php check_gender(1, $row->gender); ?> value="1">ຊາຍ</option>
                                <option <?php check_gender(2, $row->gender); ?> value="2">ຍິງ</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 text-right">ເບີໂທ</div>
                        <div class="col-md-9">
                            <input type="text" value="<?php echo $row->tel; ?>" name="tel" id="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 text-right">ອີເມວ</div>
                        <div class="col-md-9">
                            <input type="text" value="<?php echo $row->email; ?>" name="email" id="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 text-right">ວັນເດືອນປີເກີດ</div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="day" id="">
                                        <option value="0">ເລືອກວັນທີ</option>
                                        <?php
                                        for ($i = 1; $i <= 31; $i++) {
                                            echo '
                                                <option ' . check_selected_option($new_d[2], $i) . ' value="' . $i . '">' . $i . '</option>
                                            ';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control" name="month" id="">
                                        <option value="0">ເລືອກເດືອນ</option>
                                        <?php
                                        for ($i = 1; $i <= 12; $i++) {
                                            echo '
                                                <option ' . check_selected_option($new_d[1], $i) . ' value="' . $i . '">' . $i . '</option>
                                            ';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control" name="year" id="">
                                        <option value="0">ເລືອກປີ</option>
                                        <?php
                                        for ($i = date('Y'); $i >= date('Y') - 60; $i--) {
                                            echo '
                                                <option ' . check_selected_option($new_d[0], $i) . ' value="' . $i . '">' . $i . '</option>
                                            ';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 text-right">ທີ່ຢູ່</div>
                        <div class="col-md-9">
                            <textarea name="address" class="form-control" id="" cols="30" rows="10"><?php echo $row->address ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 text-right">ຂໍ້ມູນອື່ນໆ</div>
                        <div class="col-md-9">
                            <textarea name="about" class="form-control" id="" cols="30" rows="10"><?php echo $row->about ?></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group text-center">
                    <input type="submit" value="ບັນທຶກ" class="btn btn-success">
                </div>

            </form>
        </div>
    <?php
    endif;
endif;
?>
<?php require 'footer.php'; ?>