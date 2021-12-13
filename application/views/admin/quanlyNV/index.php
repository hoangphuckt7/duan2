<section class="content p-3">
    <?php $this->load->view('admin/quanlyNV/head');?>
      <table id="myTable" class="table text-center">
        <thead>
            <tr>
              <th>ID NHÂN VIÊN</th>
              <th>HỌ VÀ TÊN</th>
              <th>TÀI KHOẢN</th>
              <th>PHONE</th>
              <th>CHỨC VỤ</th>
              <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($list as $row):?>

            <tr>
            <td><?php echo $row->id?></td>
            <td><?php echo $row->tenNV?></td>
            <td><?php echo $row->taiKhoan?></td>
            <td><?php echo $row->SDT?></td>
            <td><?php echo $row->chucVu?></td>
            <td class="option">
              <a href="<?php echo admin_url('quanlyNV/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
              <i class="fa fa-edit" style="margin-left: 20px;"></i>
              </a>                    
              <a href="<?php echo admin_url('quanlyNV/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
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