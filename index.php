<?php require 'header.php'; ?>
<div class="box">
    <div class="row">
        <div class="col-md-6 center text-center">
            <h1>ລະບົບຊອກຫາແຮງງານ</h1>
            <form action="search.php" method="post">
                <div class="form-group">
                    <input type="text" name="search" id="" placeholder="ຊອກຫາພະນັກງານ (ຕົວຢ່າງ: ໄອທີ, ກໍ່ສ້າງ)"
                        class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="">
                        <input type="radio" name="type" id="" value="educations" class="form-control"> ສາຂາຮຽນ
                    </label>
                    <label for="">
                        <input type="radio" name="type" id="" value="experiences" class="form-control"> ປະສົບການ
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" value="ຄົ້ນຫາ" class="btn btn-success btn-lg">
                </div>

            </form>
        </div>

    </div>
</div>



<?php require 'footer.php'; ?>