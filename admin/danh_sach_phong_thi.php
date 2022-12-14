<?php 
    include_once '../connectdb.php'; 
    include_once 'danh_sach_phong_thi_functions.php'; 
    include_once 'ql_phuc_khao_functions.php';
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
                                
                                if(!$trangThaiSapXepPhong){
                                    echo '<div class="card-body border-top">
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

                                if($msg_SapXep){
                                    echo '<div class="card-body border-top">
                                            <h4>Thông báo!</h4>
                                            <div class="alert alert-success" role="alert">
                                                <p>Danh sách phòng thi đã được sắp xếp thành công!</p>
                                            </div>
                                        </div> ';
                                }

                                if($msg_EndTimeCDK){
                                    echo '<div class="card-body border-top">
                                            <h4>Thông báo!</h4>
                                            <div class="alert alert-danger" role="alert">
                                                <p>Chức năng sắp xếp phòng thi chỉ thực hiện khi đã kết thúc thời gian đăng kí tuyển sinh!</p>
                                            </div>
                                        </div> ';
                                }

                            ?>  
                             

                            <?php if($trangThaiSapXepPhong){ ?>                                         
                            <div class="card-body">
                                <div class="input-group-append be-addon mb-2">
                                    <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" aria-expanded="false">Môn thi: 
                                        <?= ($mon_filter=='') ? "Chọn môn" : getTenMon($mon_filter); ?>
                                        <?= ($mon_filter == 1 || $mon_filter == 2) ? ' chung' 
                                        : (($mon_filter=='') ? " " 
                                        : " chuyên") ?>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(801px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <?php
                                            $listMon = getListMon(); 
                                            foreach ($listMon as $mon) {
                                                if($mon['id_mon']==$mon_filter){continue;}
                                            ?>
                                                    <a href="danh_sach_phong_thi.php?mon=<?= $mon['id_mon'] ?>" class="dropdown-item"><?= $mon['ten_mon'] ?><?= ($mon['loai_mon']=='chung') ? ' chung' : ' chuyên' ?></a>
                                            <?php } ?>
                                    </div>
                                </div>
                                <?php 
                                    if($mon_filter==""){
                                         echo '<div class="card-body border-top">
                                            <h4>Thông báo!</h4>
                                            <div class="alert alert-danger" role="alert">
                                                <p>Vui lòng chọn môn để xem danh sách phòng thi!</p>
                                            </div>
                                        </div> ';
                                    }
                                 ?>
                            </div>
                        <?php } ?>
                        </div>
                    </div>


                    <?php
                        $listPhongThi = getListPhongThi($mon_filter);

                        if($mon_filter != '' && $trangThaiSapXepPhong==true){
                     ?>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                                <div class="tab-vertical">
                                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                        <?php
                                        $activeFirstElm = 'active';
                                        foreach ($listPhongThi as $key => $phongThi) {
                                            echo '<li class="nav-item">
                                            <a class="nav-link '.$activeFirstElm.'" id="home-vertical-tab" data-toggle="tab" href="#'.$key.'" role="tab" aria-controls="home" aria-selected="true">Phòng '.$phongThi[0]['ten_phong'].'</a>
                                        </li>';
                                            $activeFirstElm = '';
                                        } ?>
                                    </ul>
                                    <div class="tab-content" id="myTabContent3">
                                        <?php
                                            $activeFirstElm = 'active';
                                            foreach ($listPhongThi as $key => $phongThi) {
                                                echo '<div class="tab-pane fade show '.$activeFirstElm.'" id="'.$key.'" role="tabpanel" aria-labelledby="home-vertical-tab">
                                                        <form method="post">
                                                            <input type="hidden" name="idPhong" value="'.$key.'">
                                                            <input type="submit" name="btnExcel" class="btn btn-primary mb-3 float-right" value="Xuất ExceL">    
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered first">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Số báo danh</th>
                                                                            <th>Họ và tên</th>
                                                                            <th>Ngày sinh</th>
                                                                            <th>Giới tính</th>
                                                                            <th>Số điện thoại</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>';
                                                                        foreach ($phongThi as $key => $thiSinh) {
                                                                            echo '<tr>
                                                                                    <td>'.$thiSinh['id_hoc_sinh'].'</td>
                                                                                    <td>'.$thiSinh['ten'].'</td>
                                                                                    <td>'.date("d-m-Y", strtotime($thiSinh['ngay_sinh'])).'</td>
                                                                                    <td>'.$thiSinh['gioi_tinh'].'</td>
                                                                                    <td>'.$thiSinh['phone'].'</td>
                                                                                </tr>';
                                                                        }
                                                                echo '</tbody>
                                                                </table>
                                                            </div>
                                                        </form>
                                                    </div>';
                                                    $activeFirstElm = '';
                                        }
                                         ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

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