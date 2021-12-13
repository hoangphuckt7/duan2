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
                <div class="condition"><?php echo $row->trangThai?></div>
                <!-- <input type="checkbox" data-toggle onclick="check();"> -->
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
</section>
<script type="text/javascript" >
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
  // function check(){
  //   var condition = document.querySelector('.condition');
  //   var dataToggle = document.querySelector('[data-toggle]');
  //   if(dataToggle.checked){
  //     condition.textContent = "online"
  //   }
  //   else{
  //     condition.textContent = "offline"
  //     console.log(condition.innerText);
  //   }
  // }
</script>