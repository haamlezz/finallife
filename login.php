<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.map.css">
    <link rel="stylesheet" href="css/style.css">
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
</head>

<body>
    <div class="container top">
        <h1>ເຂົ້າສູ່ລະບົບ</h1>


        <div class="mx-auto col-md-8 ">
            <?php
            if (isset($_GET['error'])) {
                echo '<div class="alert alert-danger">
            ຂໍ້ມູນຜິດພາດ
        </div>';
            }
            ?>
            <form action="login_process.php" method="post">
                <div class="form-group">
                    <div class="row justify-content-md-center">
                        <div class="col-md-2">
                            <label for="username">User Name:</label>
                        </div>
                        <div class="col-md-10">
                            <input name="username" type="text" class="form-control" placeholder="Enter user name">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row justify-content-md-center">
                        <div class="col-md-2">
                            <label for="username">Password:</label>
                        </div>
                        <div class="col-md-10">
                            <input name="password" type="password" class="form-control" placeholder="Enter password">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-2">
                    </div>
                    <input type="submit" value="Login" class="btn btn-success">
                    <a href="signup.php" class="btn btn-link">Signup</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>