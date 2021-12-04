<section class="content p-3">
    <div class="box-header">
        <h2 class="box-title text-center text-uppercase">Chỉnh Sửa Thông Tin</h2>  
    </div>
    <div class="menu_action">
        <ul>
            <li><i class="fa fa-plus-circle p-1"></i><a href="<?php echo admin_url('quanlyNV/add');?>">
                Thêm mới
            </a></li>
            
            <li><i class="fa fa-list-alt p-1"></i><a href="<?php echo admin_url('quanlyNV');?>">
                Danh sách
            </a></li>
        </ul>
  </div>

    <div class="clear"></div>
    <form class="form-horizontal" action="<?php admin_url('quanlyNV/edit')?>" method="post">
        <div class="box-body p-3">
            <div class="form-group">
                <label for="name">Họ Và Tên :</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $infor->tenNV?>">
                <span name="name_autocheck" class="autocheck"></span>
                <div name="name_error" style="color: red;"><?php echo form_error('name')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="username">Tài Khoản :</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $infor->taiKhoan?>">
                <span name="name_autocheck" class="autocheck"></span>
                <div name="name_error" style="color: red;"><?php echo form_error('username')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="phone">Số Điện Thoại :</label>
                <input type="number" class="form-control" name="phone" id="phone" value="<?php echo $infor->SDT?>">
                <span name="Phone_autocheck" class="autocheck"></span>
                <div name="Phone_error" style="color: red;"><?php echo form_error('phone')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="chucvu">Chức Vụ :</label>
                <input type="text" class="form-control" name="chucvu" id="chucvu" value="<?php echo $infor->chucVu?>">
                <span name="Chucvu_autocheck" class="autocheck"></span>
                <div name="Chucvu_error" style="color: red;"><?php echo form_error('chucvu')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="machucvu">Chức Vụ :</label>
                <input type="text" class="form-control" name="machucvu" id="machucvu" value="<?php echo $infor->maChucVu?>">
                <span name="Machucvu_autocheck" class="autocheck"></span>
                <div name="Machucvu_error" style="color: red;"><?php echo form_error('machucvu')?></div>
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