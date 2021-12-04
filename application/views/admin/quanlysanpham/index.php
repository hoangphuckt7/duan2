<section class="content p-3">
    <?php $this->load->view('admin/quanlysanpham/head');?>
      <table id="myTable" class="table text-center">
        <thead>
            <tr>
              <th>MÃ SẢN PHẨM</th>
              <th>TÊN SẢN PHẨM</th>
              <th>ĐƠN GIÁ</th>
              <th>MÔ TẢ</th>
              <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($list as $row):?>

            <tr>
            <td>_000<?php echo $row->id?></td>
            <td><?php echo $row->tenSP?></td>
            <td><?php echo $row->donGia?></td>
            <td><?php echo $row->moTa?></td>
            <td class="option">
              <a href="<?php echo admin_url('quanlysanpham/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
              <i class="fa fa-edit" style="margin-left: 20px;"></i>
              </a>                    
              <a href="<?php echo admin_url('quanlysanpham/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
              <i class="fa fa-trash " style="margin-left: 20px;"></i>
            </a>
          </td>
        </tr>
        
        <?php endforeach;?>
      </tbody>
      </table>
</section>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>