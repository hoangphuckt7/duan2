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
              <td>
                <?php echo $row->id?>
              </td>
              <td><?php echo $row->tenKhuVuc?></td>
              <td class="d-flex justify-content-around">
                <input type="checkbox" name="checkbox[]" data-id="<?= $row->id; ?>" <?=$row->trangThai?"checked":""?>>
              </td>
              <td class="option">
                <a href="<?php echo admin_url('quanlykhuvuc/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
                  <i class="fa fa-edit" style="margin-left: 20px;"></i>
                </a>                    
                <a href="<?php echo admin_url('quanlykhuvuc/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
                  <i class="fa fa-trash " style="margin-left: 20px;"></i>
                </a>
                <a href="<?php echo admin_url('quanlykhuvuc/diemgiao/'.$row->id); ?>" title="thêm" class="tipS verify_action" >
                  <i class="fas fa-map-pin " style="margin-left: 20px;"></i>
                </a>
              </td>
            </tr>
        
        <?php endforeach;?>
      </tbody>
      </table>
      <!-- <form method="POST" name="edit" action="<?php echo admin_url('quanlykhuvuc/update')?>"></form> -->
</section>
<script type="text/javascript" >
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );

  var checkBox = $('input[name="checkbox[]"]');
  var editForm = $('form[name="edit"]');

  checkBox.click(function(){
        //console.log(this.getAttribute("data-id"));
        let id = this.getAttribute("data-id");
        let trangThai = 0;
        if(this.checked){
            console.log("true");
            trangThai = 1;
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