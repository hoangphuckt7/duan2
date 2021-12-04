<section class="content p-3">
    <div class="box-header">
        <h2 class="box-title text-center text-uppercase">Chỉnh Sửa Thông Tin Sản Phẩm</h2>  
    </div>
    <div class="menu_action">
        <ul>
            <li><i class="fa fa-plus-circle p-1"></i><a href="<?php echo admin_url('quanlysanpham/add');?>">
                Thêm mới
            </a></li>
            
            <li><i class="fa fa-list-alt p-1"></i><a href="<?php echo admin_url('quanlysanpham');?>">
                Danh sách
            </a></li>
        </ul>
  </div>

    <div class="clear"></div>
    <form class="form-horizontal" action="<?php admin_url('quanlysanpham/edit')?>" method="post">
        <div class="box-body p-3">
            <div class="form-group">
                <label for="name">Tên Sản Phẩm:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $infor->tenSP?>">
                <span name="name_autocheck" class="autocheck"></span>
                <div name="name_error" style="color: red;"><?php echo form_error('name')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="price">Đơn Giá:</label>
                <input type="text" class="form-control" name="price" id="price" value="<?php echo $infor->donGia?>">
                <span name="price_autocheck" class="autocheck"></span>
                <div name="price_error" style="color: red;"><?php echo form_error('price')?></div>
            </div>
            <div class="form-group mt-3">
                <label for="description">Mô Tả:</label>
                <textarea type="text" class="form-control" name="description" id="description" value="<?php echo $infor->moTa?>"></textarea>
                <span name="description_autocheck" class="autocheck"></span>
                <div name="description_error" style="color: red;"><?php echo form_error('description')?></div>
            </div>
        </div>
        <div class="box-footer p-3">                
            <input type="submit" class="btn btn-success float-end" value="Sửa">
        </div>
    </form>
</section>