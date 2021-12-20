<section class="content p-3">
    <?php $this->load->view('admin/quanlykhuvuc/head');?>
      <table id="myTable" class="table text-center">
        <thead>
            <tr>
              <th>MÃ KHU VỰC</th>
              <th>TÊN KHU VỰC</th>
              <th>TRẠNG THÁI</th>
              <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($list as $row):?>

            <tr>
              <td class="id">
                <?= $row->id?>
              </td>
              <td><?php echo $row->tenKhuVuc?></td>
              <td class="d-flex justify-content-around">
                <input type="checkbox" name="checkbox[]" data-id="<?= $row->id; ?>" <?=$row->trangThai?"checked":""?>
                <?=$row->id == "01"? "disabled":""?>>
              </td>
              <td class="option">
                <a href="<?php echo admin_url('quanlykhuvuc/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS " <?=$row->id == "01"? "hidden":""?>>
                  <i class="fa fa-edit" style="margin-left: 20px;"></i>
                </a>                    
                <a href="<?php echo admin_url('quanlykhuvuc/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" <?=$row->id == "01"? "hidden":""?>>
                  <i class="fa fa-trash " style="margin-left: 20px;"></i>
                </a>
                <a href="<?php echo admin_url('quanlykhuvuc/diemgiao/'.$row->id); ?>" title="thêm" class="tipS verify_action add" > <!-- <?=$row->id == "01"? "":"" ?> <?=$row->trangThai?"":"hidden"?> -->
                  <i class="fas fa-map-pin " style="margin-left: 20px;"></i>
                </a>
              </td>
            </tr>
        
        <?php endforeach;?>
      </tbody>
      </table>
</section>
<script type="text/javascript" >
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );

  var checkBox = $('input[name="checkbox[]"]');
  var editForm = $('form[name="edit"]');

  checkBox.click(function(){
        let id = this.getAttribute("data-id");
        let trangThai = "0";
        if(this.checked){
            trangThai = "1";
        }

        let obj = {
            id,
            trangThai
        };

        $.ajax({
            url: "<?php echo admin_url('quanlykhuvuc/update')?>",
            type: "POST",
            data: obj,
            success: function(result){
                console.log(result);
            }
        });

        //console.log(obj);
    })
</script>