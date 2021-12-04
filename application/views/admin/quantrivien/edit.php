<section class="content p-3">
    <div class="box-header">
        <h2 class="box-title text-center text-uppercase">Chỉnh Sửa Thông Tin</h2>  
    </div>
    <div class="menu_action">
        <ul>
            <li><i class="fa fa-plus-circle p-1"></i><a href="<?php echo admin_url('quantrivien/add');?>">
                Thêm mới
            </a></li>
            
            <li><i class="fa fa-list-alt p-1"></i><a href="<?php echo admin_url('quantrivien');?>">
                Danh sách
            </a></li>
        </ul>
  </div>

    <div class="clear"></div>
    <form class="form-horizontal" action="<?php admin_url('quantrivien/edit')?>" method="post">
        <div class="box-body p-3">
            <div class="form-group">
                <label for="name">Họ Và Tên :</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $infor->name?>">
                <span name="name_autocheck" class="autocheck"></span>
                <div name="name_error" style="color: red;"><?php echo form_error('name')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="username">Tài Khoản :</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $infor->username?>">
                <span name="name_autocheck" class="autocheck"></span>
                <div name="name_error" style="color: red;"><?php echo form_error('username')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="phone">Số Điện Thoại :</label>
                <input type="number" class="form-control" name="phone" id="phone" value="<?php echo $infor->phone?>">
                <span name="Email_autocheck" class="autocheck"></span>
                <div name="Phone_error" style="color: red;"><?php echo form_error('phone')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $infor->email?>">
                <span name="Email_autocheck" class="autocheck"></span>
                <div name="Email_error" style="color: red;"><?php echo form_error('email')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="address">Address :</label>
                <input type="text" class="form-control" name="address" id="address" value="<?php echo $infor->address?>">
                <span name="Address_autocheck" class="autocheck"></span>
                <div name="Address_error" style="color: red;"><?php echo form_error('address')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="password">Mật Khẩu :</label>
                <input type="password" class="form-control" name="password" id="password" value="<?php echo $infor->password?>">
                <span name="password_autocheck" class="autocheck"></span>
                <div name="password_error" style="color: red;"><?php echo form_error('password')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="re_password">Xác Nhận Mật Khẩu :</label>
                <input type="password" class="form-control" name="re_password" id="re_password">
                <span name="re_password_autocheck" class="autocheck"></span>
                <div name="re_password_error" style="color: red;"><?php echo form_error('re_password')?></div>
            </div>
        </div>
        <div class="box-footer p-3">                
            <input type="submit" class="btn btn-success float-end" value="Sửa">
        </div>
    </form>
</section>