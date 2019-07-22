<?php
session_start();
include 'function.php';
if (is_logged_in()) {
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>viyadethweb</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/png" href="images/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">

    <style>
        @import url(//fonts.googleapis.com/earlyaccess/notosanslao.css);

        *,
        h1 {

            font-family: 'Noto Sans Lao', sans-serif;
        }

        .top {
            position: absolute;
            top: 20%;
            text-align: center;
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcK1a0UAAAAAMgfS7ODzLGBYEHzJMGa4I0KXY_Q"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcK1a0UAAAAAMgfS7ODzLGBYEHzJMGa4I0KXY_Q', {
                action: 'login'
            }).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
</head>

<body>
    <?php
    echo is_logged_in();
    ?>
    <div class="container top">
        <div class="col-md-6 offset-md-4">
            <h1>ເຂົ້າສູ່ລະບົບ</h1>
            <?php
            if (isset($_SESSION['error'])) {
                error_msg($_SESSION['error']['msg'], $_SESSION['error']['no']);
            }
            ?>
            <form action="login_process.php" method="post">
                <div class="form-group">
                    <div class="row justify-content-md-center">
                        <div class="col-md-3">
                            <label for="username">ຊື່ຜູ່ໃຊ້:</label>
                        </div>
                        <div class="col-md-9">
                            <input name="username" type="text" class="form-control" placeholder="Enter user name">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row justify-content-md-center">
                        <div class="col-md-3">
                            <label for="username">ລະຫັດຜ່ານ:</label>
                        </div>
                        <div class="col-md-9">
                            <input name="password" type="password" class="form-control" placeholder="Enter password">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="ເຂົ້າສູ່ລະບົບ" class="btn btn-success">
                    <a href="#" id="forgot" class="btn btn-link text-secondary">ລືມລະຫັດຜ່ານ</a>
                </div>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </form>

            <a href="signup.php" class="btn btn-link" style="margin-top:10px;">ລົງທະບຽນ</a>

        </div>
    </div>
    <div id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
<script>
    var timeout = 5000;
    setTimeout(() => {
        $("#alert").fadeOut("slow");
    }, timeout);

    $("#forgot").click(function() {
        $.ajax({
            type: "POST",
            url: "forgot.php",
            success: function(response) {
                $("#forgotModal").append(response);
                // $('#forgotModal').modal('show')
            }
        });
    });
</script>

</html>