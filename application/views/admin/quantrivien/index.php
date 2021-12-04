<section class="content p-3">
  <?php $this->load->view('admin/quantrivien/head');?>
  <p><?php echo $this->session->flashdata('message'); ?></p>
  <table id="myTable" class="table text-center">
    <thead>
            <tr>
              <th>STT</th>
              <th>HỌ VÀ TÊN</th>
              <th>TÀI KHOẢN</th>
              <th>EMAIL</th>
              <th>PHONE</th>
              <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($list as $row):?>

            <tr>
            <td><?php echo $row->id?></td>
            <td><?php echo $row->name?></td>
            <td><?php echo $row->username?></td>
            <td><?php echo $row->email?></td>
            <td><?php echo $row->phone?></td>
            <td class="option">
              <a href="<?php echo admin_url('quantrivien/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
              <i class="fa fa-edit" style="margin-left: 20px;"></i>
              </a>                    
              <a href="<?php echo admin_url('quantrivien/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
              <i class="fa fa-trash " style="margin-left: 20px;"></i>
            </a>
          </td>
        </tr>
        
        <?php endforeach;?>
      </tbody>
    </table>
  </section>
<style>
  .dataTables_length{
    display: none;
  }
</style>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>