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
                    <td class="trangthai">
                        <input type="checkbox" name="checkbox[]" data-id="<?= $row->id; ?>" <?=$row->trangThai?"checked":""?>/>
                    </td>
                    <td class="option">         
                        <a href="" title="edit" class="tipS verify_action" <?=$id == "01"?"":"hidden" ?> data-toggle="modal" data-target="#add_khuvuc">
                            <i class="fa fa-edit " style="margin-left: 20px;"></i>
                        </a>
                        <a href="<?php echo admin_url('add_diemgiao/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
                            <i class="fa fa-trash " style="margin-left: 20px;"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<!-- form add -->
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

    <!-- form add_khuvuc -->
    <div class="modal fade" id="add_khuvuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Khu Vực</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo admin_url('Add_diemgiao/update')?>" method="post">
                    <div class="modal-body">
                        <div class="box-body p-3 form-control-file ">
                            <div class="form-group mb-3">
                                <input type="hidden" name="id" value="<?= $row->id; ?>">
                                <label for="makhuvuc">Mã Khu Vực :</label>
                                <select type="text" class="form-control select" name="makhuvuc" id="makhuvuc">
                                    <option>--Chọn Khu Vực--</option>
                                    <?php foreach ($list_khuvuc as $row): ?>
                                        <option value="<?= $row->id?>"><?= $row->id?> - <?= $row->tenKhuVuc?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="trangthai">Tên Khu Vực :</label>
                                <input type="text" class="form-control" name="trangthai" id="trangthai" readonly value="<?= $row->tenKhuVuc?>">
                            </div> -->
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

<script type="text/javascript">
    var checkBox = $('input[name="checkbox[]"]');
    var editForm = $('form[name="edit"]');

    checkBox.click(function(){
        //console.log(this.getAttribute("data-id"));
        let id = this.getAttribute("data-id");
        let trangThai = "0";
        if(this.checked){
            console.log("true");
            trangThai = "1";
        }

        let obj = {
            id,
            trangThai
        };

        $.ajax({
            url: "<?php echo admin_url('Add_diemgiao/edit')?>",
            type: "POST",
            data: obj,
            success: function(result){
                console.log(result);
            }
        });

        //console.log(obj);
    })
</script>