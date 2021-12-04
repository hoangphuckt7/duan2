<section class="content p-3">
    <div class="box-header">
        <h2 class="box-title text-center text-uppercase">
            Thêm Điểm Giao Khu Vực <p style="color: red"><?php echo $infor->tenKhuVuc?></p>
        </h2>  
    </div>
    <div class="menu_action">
        <ul>
            <li><i class="fa fa-list-alt p-1"></i><a href="<?php echo admin_url('quanlykhuvuc');?>">
                Danh sách
            </a></li>
        </ul>
    </div>

    <div class="clear"></div>
    <div class="box-footer pb-3 text-right">                
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Thêm</button>
    </div>
    <table class="table table-dark table-bordered table-hover text-center">
        <thead>
            <tr>
              <th>TÊN ĐIỂM GIAO</th>
              <th>KINH ĐỘ</th>
              <th>VĨ ĐỘ</th>
              <th>ĐỊA CHỈ</th>
              <th>TÊN KHU VỰC</th>
              <th>TRẠNG THÁI</th>
              <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $row): ?>
                <tr>
                    <td><?php echo $row->tenDiemGiao?></td>
                    <td><?php echo $row->longitude?></td>
                    <td><?php echo $row->latitude?></td>
                    <td><?php echo $row->diaChi?></td>
                    <td><?php echo $row->tenKhuVuc?></td>
                    <td><?php echo $row->trangThai?></td>
                    <td class="option">                
                        <a href="<?php echo admin_url('add_diemgiao/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
                            <i class="fa fa-trash " style="margin-left: 20px;"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Điểm Giao</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('add-diemgiao')?>" method="post">
                <input type="hidden" name="id" value="<?=$id?>">
                    <div class="modal-body">
                        <div class="box-body p-3 form-control-file ">
                            <div class="form-group mb-3">
                                <label for="name">Tên Điểm Giao :</label>
                                <input type="text" class="form-control" name="name" id="name" value="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="tenkhuvuc">Tên Khu Vực :</label>
                                <input type="text" class="form-control" name="tenkhuvuc" id="tenkhuvuc" value="Hồ Chí Minh">
                            </div>
                            <div class="form-group mb-3">
                                <label for="diachi">Địa Chỉ :</label>
                                <input type="text" class="form-control" name="diachi" id="diachi" value="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="kinhdo">Kinh Độ:</label>
                                <input type="text" class="form-control" name="kinhdo" id="kinhdo" value="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="vido">Vĩ Độ:</label>
                                <input type="text" class="form-control" name="vido" id="vido" value="">
                            </div>
                            <div class="form-group">
                                <label for="trangthai">Trạng Thái :</label>
                                <input type="text" class="form-control" name="trangthai" id="trangthai" value="">
                            </div>
                        </div>
                    </div>
                    <div id="alert-msg"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="submit" name="submit" class="btn btn-success">Save changes</button>
                    </div>
                    <?php echo form_close(); ?>
                </form>
            </div>
        </div>
    </div>
</section>
