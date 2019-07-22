<?php
//require 'header.php';
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>ເພີ່ມປະຫວັດການສຶກສາ</h5>
                <hr>
            </div>
            <form action="education_add_process.php" method="post">
                <div class="modal-body">


                    <div class="form-group">
                        <select name="year" id="" class="form-control">
                            <option value="0">ກະລຸນາເລືອກປີ</option>
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
                        <select class="form-control" name="level" id="">
                            <option value="0">ເລືອກລະດັບ</option>
                            <option value="ປະລິນຍາເອກ">ປະລິນຍາເອກ</option>
                            <option value="ປະລິນຍາໂທ">ປະລິນຍາໂທ</option>
                            <option value="ປະລິນຍາຕີ">ປະລິນຍາຕີ</option>
                            <option value="ຊັ້ນສູງ">ຊັ້ນສູງ</option>
                            <option value="ຊັ້ນກາງ">ຊັ້ນກາງ</option>
                            <option value="ຊັ້ນຕົ້ນ">ຊັ້ນຕົ້ນ</option>
                            <option value="ໃບຢັ້ງຢືນ">ໃບຢັ້ງຢືນ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="education_name" placeholder="ພາກວິຊາ" class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="faculty" id="" placeholder="ສາຂາທີ່ຈົບ">
                    </div>

                    <div class="form-group">
                        <input type="text" name="institute" placeholder="ສະຖາບັນ" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="country" placeholder="ປະເທດ" id="" class="form-control">
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