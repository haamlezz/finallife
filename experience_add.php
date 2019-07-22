<?php
//require 'header.php';
?>
<div class="modal fade" id="experienceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>ເພີ່ມປະສົບການ</h5>
                <hr>
            </div>
            <form action="experience_add_process.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="start" id="" class="form-control">
                            <option value="0">ປີເລີ່ມວຽກ</option>
                            <?php
                            for ($i = date('Y'); $i >= 1970; $i--) {
                                echo '
                                <option value="' . $i . '">' . $i . '</option>
                            ';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="end" id="" class="form-control">
                            <option value="0">ປີອອກວຽກ</option>
                            <option value="1">ກຳລັງເຮັດວຽກນີ້</option>
                            <?php
                            for ($i = date('Y'); $i >= 1970; $i--) {
                                echo '
                                <option value="' . $i . '">' . $i . '</option>
                            ';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="experience_name" id="" placeholder="ຕໍາແໜ່ງ">
                    </div>

                    <div class="form-group">
                        <input type="text" name="place" placeholder="ຊື່ອົງກອນ" class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="ຂໍ້ມູນອື່ນໆ" id="" rows="6"></textarea>
                    </div>


                </div>
                <!--modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">ປິດ</button>
                    <button type="submit" class="btn btn-lg btn-success">ບັນທຶກ</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
//require 'footer.php';
?>