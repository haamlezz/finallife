<?php
if (!isset($file)) {
    session_start();
    include 'function.php';
}
restrict_access();
?>

<h1>ໜ້າຫຼັກ</h1>
<hr />
<div class="row">
    <div class="col border alert alert-primary">
        <h3>ຜູ່ໃຊ້ໃໝ່ໃນເດືອນນີ້</h3>
        <?php
        $month = date('m');
        $sql = "SELECT id AS count_row FROM users WHERE DATE_FORMAT(created_at, '%m') = $month";
        $rs = $con->query($sql);
        echo '<p>' . $rs->num_rows . ' ຄົນ</p>';
        ?>

    </div>
    <div class="col border alert alert-warning">
        <h3>ຜູ່ໃຊ້ງານທັງໝົດ</h3>
        <?php
        $sql = "SELECT id AS count_row FROM users";
        $rs = $con->query($sql);
        echo '<p>' . $rs->num_rows . ' ຄົນ</p>';
        ?>
    </div>
</div>

<div class="row">
    <div class="col border text-info">
        <h4>ຕໍ່າກວ່າ ປ.ຕີ</h4>
        <?php
        $sql = "SELECT user_id FROM educations WHERE level != 'ປະລິນຍາຕີ' OR level != 'ປະລິນຍາໂທ' OR level != 'ປະລິນຍາເອກ' GROUP BY user_id ";
        $rs = $con->query($sql);
        echo $con->error;
        echo '<p>' . $rs->num_rows . ' ຄົນ</p>';
        ?>
    </div>
    <div class="col border text-primary">
        <h4>ຈົບ ປ.ຕີ</h4>
        <?php
        $sql = "SELECT user_id FROM educations WHERE level = 'ປະລິນຍາຕີ' GROUP BY user_id ";
        $rs = $con->query($sql);
        echo $con->error;
        echo '<p>' . $rs->num_rows . ' ຄົນ</p>';
        ?>
    </div>
    <div class="col border text-success">
        <h4>ຈົບ ປ.ໂທ</h4>
        <?php
        $sql = "SELECT user_id FROM educations WHERE level = 'ປະລິນຍາໂທ' GROUP BY user_id ";
        $rs = $con->query($sql);
        echo $con->error;
        echo '<p>' . $rs->num_rows . ' ຄົນ</p>';
        ?>
    </div>
    <div class="col border text-danger">
        <h4>ຈົບ ປ.ເອກ</h4>
        <?php
        $sql = "SELECT user_id FROM educations WHERE level = 'ປະລິນຍາເອກ' GROUP BY user_id ";
        $rs = $con->query($sql);
        echo $con->error;
        echo '<p>' . $rs->num_rows . ' ຄົນ</p>';
        ?>
    </div>
</div>