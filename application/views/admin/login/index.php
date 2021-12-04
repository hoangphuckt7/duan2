<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <meta name="robots" content="all,follow">
        <meta name="description" content="">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/sass/style_login.css">
        <link rel="stylesheet" href="<?php echo base_url()?>public/admin/themify-icons/themify-icons.css">
        <link rel="icon" href="<?php echo base_url()?>public/admin/img/user_img/logo.png" type="image/gif" sizes="16x16">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    </head>

    <body style="overflow: hidden;">
        <div id="main">
            <div class="mt-5 d-flex justify-content-center align-items-center box_logo">
                <div class="box_logo--img">
                    <img src="<?php echo base_url()?>public/admin/img/user_img/logo.png" alt="">
                </div>
                <h3>Giao Hàng Thái Sơn</h3>
            </div>
            <div class="box_right"></div>
            <div class="box_left"></div>
            <div class="container d-flex box_center">
                <div class="col-md-5 box_center--form">
                    <h2>Trang Đăng Nhập</h2>
                    <form action="<?php echo admin_url('login/index');?>" method="post">
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
                    <?php echo form_error('login');?>
                </div>
                <div class="col-md-7 box_center--img">
                    <img src="https://www.misa.vn/sites/misa/images/pages/home/img-banner.png?ver=2" alt="">
                </div>
            </div>
        </div>
    </body>

</html>