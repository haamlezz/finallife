<?php require 'header.php'; ?>
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
<div class="container">
    <h1 class="text-center">ຝາກປະຫວັດໄວ້</h1>
    <p class="text-center">ຂັ້ນຕອນງ່າຍໆທີ່ທ່ານຈະໄດ້ວຽກ ພຽງແຕ່ສະມັກເວັບໄຊ້ຂອງພວກເຮົາ</p>

    <div class="row">
        <div class="col-md-6 pad-left">

        </div>
        <div class="col-md-6 pad-right">
            <h1>ສະມັກສະມາຊິກ</h1>
            <form action="signup_process.php" method="post">
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="1">
                        <label class="form-check-label" for="gender1">ເພດຊາຍ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="2">
                        <label class="form-check-label" for="gender2">ເພດຍິງ</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="f_name" placeholder="ຊື່">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="l_name" placeholder="ນາມສະກຸນ">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input required type="text" pattern=".{5,10}" name="username" id="username" class="form-control" placeholder="ຊື່ຜູ່ໃຊ້ ເປັນພາສາອັງກິດ 5-10 ໂຕອັກສອນ">
                </div>
                <div class="form-group">
                    <input required type="email" name="email" id="email" class="form-control" placeholder="ອີເມວ">
                </div>
                <div class="form-group">
                    <input required type="password" pattern=".{8}" name="password" id="password" class="form-control" placeholder="ລະຫັດຜ່ານ ເປັນພາສາອັງກິດ 8 ໂຕອັກສອນຂຶ້ນໄປ">
                </div>
                <div class="form-group">
                    <input type="submit" value="ລົງທະບຽນ" class="btn btn-success">
                    <a href="login.php" class="btn btn-link">ເຂົ້າສູ່ລະບົບ</a>
                </div>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </form>
        </div>
    </div>

</div>

<?php require 'footer.php'; ?>