<?php 
    include_once '../connectdb.php'; 
    include_once 'danh_sach_tsdk_functions.php';
    include_once 'ql_phuc_khao_functions.php'; 
    $page = "danh_sach_tsdk";

    $mon_filter = '';
    if(isset($_GET['mon'])){
        if(getTenMon($_GET['mon'])!=''){
            $mon_filter = $_GET['mon'];
        }
    }


    $listMonChuyen = getListMonChuyen();
    $listTS = getListTS();
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Danh sách thí sinh đăng kí</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <?php require_once 'header.php'; ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include_once "side_bar.php" ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Danh sách thí sinh đăng kí</h2>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <?php $listTS = getListTS($mon_filter); ?>    
                            <h5 class="card-header text-success">Tổng số thí sinh: <?= count($listTS); ?></h5>
                            <form method="post">
                                <div class="card-body">
                                    <?php if($isUpdatePayment){
                                        echo '<div class="alert alert-success" role="alert">
                                                    <p>Thay đổi trạng thái thanh toán thành công!</p>
                                                </div>';
                                    } ?>
                                    <div class="input-group-append be-addon mb-2">
                                        <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" aria-expanded="false">Môn chuyên: <?= ($mon_filter=='') ? "Chọn môn" : getTenMon($mon_filter); ?></button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(801px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <?php 
                                                if($mon_filter!=''){
                                                    echo "<a href='danh_sach_tsdk.php' class='dropdown-item'>Tất cả</a>";
                                                }                                                
                                            ?>
                                                    
                                            <?php 
                                                foreach ($listMonChuyen as $mon) {
                                                    if($mon['id_mon']==$mon_filter){continue;}
                                                ?>
                                                        <a href="danh_sach_tsdk.php?mon=<?= $mon['id_mon'] ?>" class="dropdown-item"><?= $mon['ten_mon'] ?></a>
                                                <?php } ?>
                                        </div>
                                        <button type="submit" name='savePayment' class="btn btn-success ml-auto">Lưu trạng thái thanh toán</button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px;" title="Số thứ tự">STT</th>
                                                    <th style="width: 100px;">Họ và tên</th>
                                                    <th style="width: 55px;">Ngày sinh</th>
                                                    <th>Dân tộc</th>
                                                    <th>Hộ khẩu</th>
                                                    <th>Nơi sinh</th>
                                                    <th>Giới tính</th>
                                                    <th>Trường THCS</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Ảnh</th>
                                                    <th style="width: 20px;">Môn thi chuyên</th>
                                                    <th style="width: 55px;">Đã thanh toán</th>
                                                    <th style="width: 55px;">Ngày đăng kí</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $stt = 0;
                                                    foreach ($listTS as $thiSinh) {
                                                ?>      
                                                <tr>
                                                    <td><?php echo ++$stt; ?></td>
                                                    <td><?= $thiSinh['ten'] ?></td>
                                                    <td><?= date("d-m-Y", strtotime($thiSinh['ngay_sinh'])) ?></td>
                                                    <td><?= $thiSinh['dan_toc'] ?></td>
                                                    <td><?= $thiSinh['ho_khau'] ?></td>
                                                    <td><?= $thiSinh['noi_sinh'] ?></td>
                                                    <td><?= $thiSinh['gioi_tinh'] ?></td>
                                                    <td><?= $thiSinh['truong_thcs'] ?></td>
                                                    <td><?= $thiSinh['phone'] ?></td>
                                                    <td><img style="max-width: 100px;"  src="<?= '../Images/'.$thiSinh['anh'] ?>"></td>
                                                    <td><?= $thiSinh['ten_mon'] ?></td>
                                                    <td><input style="height: 25px;" type="checkbox" class="form-control" name="id_ho_so_payment[]" value="<?= $thiSinh['id_ho_so'] ?>" <?= ($thiSinh['thanh_toan_le_phi']==1) ? 'checked' : '' ?>></td>
                                                    <td><?= $thiSinh['ngay_dk'] ?></td>
                                                </tr>
                                                <?php
                                                    }
                                                 ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Website quản lí tuyển sinh - Phát triển phần mềm linh hoạt
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>