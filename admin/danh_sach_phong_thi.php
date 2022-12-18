<?php 
    include_once '../connectdb.php'; 
    include_once 'danh_sach_phong_thi_functions.php'; 
    $page = "danh_sach_phong_thi";

    
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Danh sách phòng thi</title>
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
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">QLTS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fas fa-th"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Username</h5>
                                    <span class="status"></span><span class="ml-2">Hoạt động</span>
                                </div>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
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
                                <h2 class="pageheader-title">Danh sách phòng thi</h2>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <?php 
                                $trangThaiSapXepPhong = getTrangThaiSapXepPhong();
                                if(!$trangThaiSapXepPhong){
                                    echo '<div class="card-body border-top">
                                            <h4>Thông báo!</h4>
                                            <div class="alert alert-primary" role="alert">
                                                <p>Phòng thi chưa được sắp xếp theo danh sách thí sinh đăng kí! Vui lòng chọn thực hiện sắp xếp phòng thi tự động</p>
                                                <hr>
                                                <p class="mb-0">
                                                    <form action="" method="post">
                                                        <button name="btnSapXep" class="btn btn-primary">Thực hiện sắp xếp</button>
                                                    </form>
                                                </p>
                                            </div>
                                        </div>  ';
                                }

                                 ?>  
                                                                      
                            <?php
                                $so_luong_mot_phong = 20;

                                // Lấy tất cả danh sách hồ sơ đã thanh toán được sort theo mon_thi_chuyen
                                $listHoSo = getListHoSo();

                                // Lấy ra danh sách phòng thi toán chung
                                $listPhongToan = getlistPhongToan();
                            
                                // Lấy ra danh sách phòng thi toán chung
                                $listPhongVan = getlistPhongVan();;
                                


                                // Sắp xếp phòng thi chung
                                $listHoSo = sapXepPhongThiChung($listHoSo, $listPhongToan, $listPhongVan, $so_luong_mot_phong);

                                // Lấy ra danh sách phong thi cho tất cả môn chuyên
                                $listPhongThiChuyen = getListPhongThiChuyen();

                                
                                // Sắp xếp phòng thi chung
                                $listHoSo = sapXepPhongThiChuyen($listHoSo, $listPhongThiChuyen, $so_luong_mot_phong);

                                
                                // Cất dữ liệu thông tin danh sách phòng thi 
                                sapXepDanhSachPhongThi($listHoSo);
                                echo "Thực hiện sắp xếp phòng thi thành công!";

                             ?>    
                            <!-- <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px;" title="Số thứ tự">STT</th>
                                                <th>Phòng thi</th>
                                                <th>Ngày thi</th>
                                                <th>Môn thi</th>
                                                <th>Loại môn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $stt = 0;
                                                foreach ($listPhongThi as $phongThi) {
                                            ?>      
                                            <tr>
                                                <td><?php echo ++$stt; ?></td>
                                                <td><?= $phongThi['ten_phong'] ?></td>
                                                <td><?= $phongThi['thoi_gian_thi'] ?></td>
                                                <td><?= $phongThi['ten_mon'] ?></td>
                                                <td><?= $phongThi['loai_mon']=='chuyen' ? "Chuyên"  : "Chung" ?></td>
                                            </tr>
                                            <?php
                                                }
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
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