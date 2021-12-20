        <!-- Counts Section -->
        <section class="py-5">
            <div class="container-fluid">
                <div class="row d-flex justify-content-around">
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
                        <div class="d-flex">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                                <use xlink:href="#user-1"> </use>
                            </svg>
                            <div class="ms-2">
                                <h3 class="h4 text-dark text-uppercase fw-normal">Nhân Viên</h3>
                                <p class="display-6 mb-0"><?= $total ?> </p> Người
                            </div>
                        </div>
                    </div>
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
                        <div class="d-flex">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                                <use xlink:href="#survey-1"> </use>
                            </svg>
                            <div class="ms-2">
                                <h3 class="h4 text-dark text-uppercase fw-normal">Khu Vực</h3>
                                <p class="display-6 mb-0"><?= $khuvuc_total ?></p> Khu Vực
                            </div>
                        </div>
                    </div>
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
                        <div class="d-flex">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                                <use xlink:href="#list-details-1"> </use>
                            </svg>
                            <div class="ms-2">
                                <h3 class="h4 text-dark text-uppercase fw-normal">Điểm Giao</h3>
                                <p class="display-6 mb-0"><?= $diemgiao_total ?></p> Điểm Giao
                            </div>
                        </div>
                    </div>
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
                        <div class="d-flex">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                                <use xlink:href="#paper-stack-1"> </use>
                            </svg>
                            <div class="ms-2">
                                <h3 class="h4 text-dark text-uppercase fw-normal">Sản Phẩm</h3>
                                <p class="display-6 mb-0"><?= $sanpham_total?></p> Sản Phẩm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Header Section-->
        <section class="bg-white py-5">
            <div class="container">
                <table id="myTable" class="table text-center">
                    <thead>
                        <tr>
                        <th>MÃ KHU VỰC</th>
                        <th>TÊN KHU VỰC</th>
                        <th>TRẠNG THÁI</th>
                        </tr>
                    </thead>
                        <tbody>
                        <?php foreach ($list as $row):?>

                            <tr <?=$row->id == "01"? "hidden":""?>>
                                <td><?= $row->id?></td>
                                <td><?= $row->tenKhuVuc?></td>
                                <td><input type="checkbox" name="checkbox[]" <?=$row->trangThai?"checked":""?> disabled ></td>
                            </tr>
                        
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </section>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid #bbb;   
    }
    .dataTables_length, .dataTables_filter, #myTable_paginate {
        display: none;
    }
</style>     
<script type="text/javascript" >
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );

</script>