<?php
if (!isset($file)) {
    session_start();
    include 'function.php';
}
restrict_access();

?>

<h1>ຜູ່ໃຊ້ງານ</h1>
<hr>
<form action="user_search.php" method="get">
    <div class="form-inline">
        <input type="text" name="search" id="" class="form-control" placeholder="ຊື່ຜູ່ໃຊ້">
        <input type="submit" value="ຄົ້ນຫາ" class="btn btn-success">
        <a href="index.php?page=users" class="btn btn-link">ລົບລ້າງ</a>
    </div>
</form>
<div class="table-responsive">

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Registered</th>
                <th>ID</th>

            </tr>
        </thead>
        <?php
        if (isset($_GET['search'])) {
            $search = $con->real_escape_string($_GET['search']);
            $sql = "SELECT * FROM users WHERE user_name LIKE '%$search%' ORDER BY id DESC";
        } else {
            $sql = "SELECT * FROM users ORDER BY id DESC";
        }

        @$rs = $con->query($sql);

        while ($row = $rs->fetch_object()) {
            echo '
            <tr>
                <td><a href="index.php?page=user_detail&user_id=' . $row->id . '">'
                . $row->user_name . '<span class="text-info"> ' . get_admin($row->admin) . '</span>' .
                '</span></td>
                <td>' . $row->f_name . ' ' . $row->l_name . '</td>
                <td>' . get_status($row->status) . '</td>
                <td>' . $row->created_at . '</td>
                <td>' . $row->id . '</td>
            </tr>
            ';
        }

        ?>
    </table>

</div>