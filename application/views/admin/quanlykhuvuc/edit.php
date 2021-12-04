<section class="content p-3">
    <div class="box-header">
        <h2 class="box-title text-center text-uppercase">Chỉnh Sửa Khu Vực <?php echo $infor->tenKhuVuc?></h2>  
    </div>
    <div class="menu_action">
        <ul>
            <li><i class="fa fa-plus-circle p-1"></i><a href="<?php echo admin_url('quanlykhuvuc/add');?>">
                Thêm mới
            </a></li>
            
            <li><i class="fa fa-list-alt p-1"></i><a href="<?php echo admin_url('quanlykhuvuc');?>">
                Danh sách
            </a></li>
        </ul>
  </div>

    <div class="clear"></div>
    <form class="form-horizontal" action="<?php admin_url('quanlykhuvuc/edit')?>" method="post">
        <div class="box-body p-3">
            <div class="form-group">
                <label for="name">Tên Khu Vực :</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $infor->tenKhuVuc?>">
                <span name="name_autocheck" class="autocheck"></span>
                <div name="name_error" style="color: red;"><?php echo form_error('name')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="makhuvuc">Mã Khu Vực :</label>
                <input type="text" class="form-control" name="makhuvuc" id="makhuvuc" value="<?php echo $infor->maKhuVuc?>">
                <span name="Makhuvuc_autocheck" class="autocheck"></span>
                <div name="Makhuvuc_error" style="color: red;"><?php echo form_error('makhuvuc')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="trangthai">Trạng Thái :</label>
                <input type="text" class="form-control" name="trangthai" id="trangthai" value="<?php echo $infor->trangThai?>">
                <span name="Trangthai_autocheck" class="autocheck"></span>
                <div name="Trangthai_error" style="color: red;"><?php echo form_error('trangthai')?></div>
            </div>
        </div>
        <div class="box-footer p-3 text-center">                
            <input type="submit" class="btn btn-success" value="Sửa">
        </div>
    </form>
</section>