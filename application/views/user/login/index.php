<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('user/meta') ?>
</head>

<body>
    <div id="main">
        <div class="mt-5 d-flex justify-content-center align-items-center box_logo">
            <div class="box_logo--img">
                <img src="<?php echo base_url()?>public/user/img/user_img/logo.png" alt="">
            </div>
            <h3>Giao Hàng Thái Sơn</h3>
        </div>
        <div class="box_right"></div>
        <div class="box_left"></div>
        <div class="container d-flex box_center">
            <div class="col-md-5 box_center--form">
                <h2>Trang Đăng Nhập</h2>
                <form action="#" method="post">
                    <div class="input_form">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="input_form">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="input_form">
                        <input type="submit" value="Đăng Nhập">
                    </div>
                </form>
            </div>
            <div class="col-md-7 box_center--img">
                <img src="https://www.misa.vn/sites/misa/images/pages/home/img-banner.png?ver=2" alt="">
            </div>
        </div>
    </div>
</body>

</html>