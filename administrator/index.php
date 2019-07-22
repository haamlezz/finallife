<?php require 'header.php'; ?>
<?php
if (is_admin()) :
    ?>
    <nav class="navbar navbar-light bg-light">
        <ul class="nav">
            <li class="nav-item"><a href="index.php" class="nav-link">ໜ້າຫຼັກ</a></li>
            <li class="nav-item"><a href="index.php?page=users" class="nav-link">ຜູ່ໃຊ້ງານ</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">ອອກຈາກລະບົບ</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="shadow">
            <?php

            if (isset($_GET['page'])) {

                switch ($_GET['page']) {
                    case 'dashboard':
                        require 'dashboard.php';
                        break;
                    case 'users':
                        require 'users.php';
                        break;
                    case 'user_detail':
                        require 'user_detail.php';
                        break;
                    default:
                        require '404.php';
                }
            } else {
                require 'dashboard.php';
            }

            ?>
        </div>
    </div>

<?php
else :
    $_SESSION['error'] = ['msg' => 'ທ່ານບໍ່ມີສິດເຂົ້າໃນພາກສ່ວນຜູ້ດູແລ', 'no' => 1];
    header('Location: login.php');
endif;
?>
<?php require 'footer.php'; ?>