<?php
require_once 'header.php';

if (isset($_SESSION['error']) && isset($_GET['error'])) :
    error_msg($_SESSION['error'], $_GET['error']);
    unset($_SESSION['error']);
endif;
?>

<div class="row">
    <div class="col-md-8">
        <div class="shadow border">
            <?php require 'education.php'; ?>
        </div>

        <div class="shadow border">
            <?php require 'experience.php'; ?>
        </div>
    </div>

    <div class="col-md-4">
        <div class="shadow border">
            <?php require 'about.php'; ?>
        </div>
    </div>
</div>

<?php

require_once 'footer.php';
?>