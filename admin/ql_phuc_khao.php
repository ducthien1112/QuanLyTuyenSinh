<?php 
    include_once '../connectdb.php'; 
    include_once 'danh_sach_phong_thi_functions.php'; 
    include_once 'ql_diem_functions.php';
    include_once 'ql_phuc_khao_functions.php';
    $page = "ql_phuc_khao";
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quản lí phúc khảo</title>
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
                                <h2 class="pageheader-title">Quản lí phúc khảo</h2>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group-append be-addon mb-2">
                                    <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" aria-expanded="false">Môn thi: 
                                        <?= ($mon_filter=='') ? "Chọn môn" : getTenMon($mon_filter); ?>
                                        <?= ($mon_filter == 1 || $mon_filter == 2) ? ' chung' 
                                        : (($mon_filter=='') ? " " 
                                        : " chuyên")  ?> (Số đơn PK: <?= getSLPhucKhao($mon_filter) ?>)
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(801px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <?php
                                            $listMon = getListMon(); 
                                            foreach ($listMon as $mon) {
                                                if($mon['id_mon']==$mon_filter){continue;}
                                            ?>
                                                    <a href="ql_phuc_khao.php?mon=<?= $mon['id_mon'] ?>" class="dropdown-item"><?= $mon['ten_mon'] ?><?= ($mon['loai_mon']=='chung') ? ' chung' : ' chuyên' ?> (Số đơn PK: <?= getSLPhucKhao($mon['id_mon']) ?>)</a>
                                            <?php } ?>
                                    </div>
                                </div>
                                <?php 
                                    if($mon_filter==""){
                                         echo '<div class="card-body border-top">
                                            <h4>Thông báo!</h4>
                                            <div class="alert alert-danger" role="alert">
                                                <p>Vui lòng chọn môn thi!</p>
                                            </div>
                                        </div> ';
                                    }
                                    else{
                                        echo '<div class="card-body border-top">
                                            <h4>Thông báo!</h4>
                                            <div class="alert alert-info" role="alert">
                                                <p>Số đơn phúc khảo đang chờ: '.getSLPhucKhaoDangCho($mon_filter).'</p>
                                            </div>
                                        </div> ';
                                    }


                                 ?>
                            </div>
                        </div>
                    </div>


                    <?php
                        $listPhongThi = getListPhongThiPhucKhao($mon_filter);

                        if($mon_filter != '' && $trangThaiSapXepPhong==true){
                     ?>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                                <div class="tab-vertical">
                                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                        <?php
                                        $activeFirstElm = 'active';
                                        if(isset($_POST['idPhongUpdateScore'])){
                                            $activeFirstElm = '';
                                        }
                                        
                                        $activePhongThiLastUpdate = '';
                                        foreach ($listPhongThi as $key => $phongThi) {
                                            if(isset($_POST['idPhongUpdateScore']) && $key==$_POST['idPhongUpdateScore']){
                                                $activePhongThiLastUpdate = 'active';
                                            }
                                            echo '<li class="nav-item">
                                            <a class="nav-link '.$activeFirstElm.$activePhongThiLastUpdate.'" id="home-vertical-tab" data-toggle="tab" href="#'.$key.'" role="tab" aria-controls="home" aria-selected="true">Phòng '.$phongThi[0]['ten_phong'].'</a>
                                        </li>';
                                            $activeFirstElm = '';
                                            $activePhongThiLastUpdate = '';
                                        } ?>
                                    </ul>
                                    <form method="post">
                                    <div class="tab-content" id="myTabContent3">
                                            <?php 
                                                if(isset($_POST['btnSaveScore'])){
                                                    $listSBD = $_POST['sbd'];
                                                    $listScore = $_POST['score'];

                                                    $fieldName = getFieldName($mon_filter);
                                                    foreach ($listSBD as $key => $sbd) {
                                                        $diem = $listScore[$key];
                                                        if($diem==''){
                                                            $diem = 'NULL';
                                                        }
                                                        else{
                                                            $diem = round($diem, 2);
                                                        }
                                                        $sql = "UPDATE `diem` SET `$fieldName`=$diem WHERE `sbd`='$sbd'";
                                                        mysqli_query($conn, $sql);
                                                        $sql = "UPDATE `don_phuc_khao` SET `trang_thai`=1 WHERE `sbd`='$sbd' AND id_mon='$mon_filter'";
                                                        mysqli_query($conn, $sql);
                                                    }
                                                    echo '<div class="alert alert-success" role="alert">
                                                            <p>Cập nhật điểm thành công!</p>
                                                        </div>';
                                                }



                                                if($errorExcel != []){
                                                    echo '<div class="alert alert-danger" role="alert">
                                                            <p>Nhập điểm bằng file Excel thất bại!</p>
                                                        </div>';
                                                    foreach ($errorExcel as $value) {
                                                        echo '<div class="alert alert-warning" role="alert">
                                                            <p>'.$value.'</p>
                                                        </div>';
                                                    }
                                                }

                                                if($isImportExcel){
                                                    echo '<div class="alert alert-success" role="alert">
                                                            <p>Nhập điểm bằng file Excel thành công!</p>
                                                        </div>';
                                                }
                                             ?>
                                            
                                            <?php
                                                $activeFirstElm = 'active';
                                                if(isset($_POST['idPhongUpdateScore'])){
                                                    $activeFirstElm = '';
                                                }

                                                $activePhongThiLastUpdate = '';
                                                foreach ($listPhongThi as $key => $phongThi) {
                                                    if(isset($_POST['idPhongUpdateScore']) && $key==$_POST['idPhongUpdateScore']){
                                                        $activePhongThiLastUpdate = 'active';
                                                    }

                                                    echo '<div class="tab-pane fade show '.$activeFirstElm.$activePhongThiLastUpdate.'" id="'.$key.'" role="tabpanel" aria-labelledby="home-vertical-tab">
                                                            <form method="post"> 
                                                                <input type="submit" name="btnSaveScore" class="btn btn-primary mb-3 float-right" value="Lưu điểm">
                                                                <input type="hidden" name="idPhongUpdateScore" value="'.$key.'">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped table-bordered first">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Số báo danh</th>
                                                                                <th style="width: 200px">Họ và tên</th>
                                                                                <th>Ngày sinh</th>
                                                                                <th>Giới tính</th>
                                                                                <th>Số điện thoại</th>
                                                                                <th style="width: 85px;">Trạng thái phúc khảo</th>
                                                                                <th>Điểm trước phúc khảo</th>
                                                                                <th>Điểm sau phúc khảo</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>';
                                                                            foreach ($phongThi as $key => $thiSinh) {
                                                                                $scoreTruocPK = getDiemTruocPk($thiSinh['id_hoc_sinh'], $thiSinh['id_phong_thi']);
                                                                                $scoreSauPK = (getTrangThaiPk($thiSinh['id_hoc_sinh'], $thiSinh['id_phong_thi'])) ? getScore($mon_filter, $thiSinh['id_hoc_sinh']) : "";
                                                                                echo '<tr>
                                                                                        <td><input type="hidden" name="sbd[]" value="'.$thiSinh['id_hoc_sinh'].'">'.$thiSinh['id_hoc_sinh'].'</td>
                                                                                        <td>'.$thiSinh['ten'].'</td>
                                                                                        <td>'.date("d-m-Y", strtotime($thiSinh['ngay_sinh'])).'</td>
                                                                                        <td>'.$thiSinh['gioi_tinh'].'</td>
                                                                                        <td>'.$thiSinh['phone'].'</td>
                                                                                        <td>'.displayTrangThaiPK($thiSinh).'</td>
                                                                                        <td>'.
                                                                                        '<input type="text" name="score_old" style="width: 100px;" value="'.$scoreTruocPK.'" disabled>'.'</td>
                                                                                         <td><input class="ip-float-number" type="text" name="score[]" style="width: 100px;" value="'.$scoreSauPK.'"></td>
                                                                                    </tr>';
                                                                            }
                                                                    echo '</tbody>
                                                                    </table>
                                                                </div>
                                                            </form>
                                                        </div>';
                                                        $activeFirstElm = '';
                                                        $activePhongThiLastUpdate = '';
                                            }

                                            if($listPhongThi==[]){
                                                echo '<div class="alert alert-danger" role="alert">
                                                        <p>Không tìm thấy đơn phúc khảo của môn thi này!</p>
                                                    </div>';
                                            } 
                                             ?>
                                            
                                    </div>
                                        </form>
                                </div>
                            </div>
                    <?php   }
                            else if($mon_filter != ''){
                                echo '<div class="card-body border-top">
                                            <h4>Thông báo!</h4>
                                            <div class="alert alert-danger" role="alert">
                                                <p>Danh sách phòng thi chưa được sắp xếp!</p>
                                            </div>
                                        </div>';
                            } 
                        ?>

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
    <script>
        $(document).ready(function() {
            $('.ip-float-number').on('input', function() {
              this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');
              this.value = (this.value > 10) ? 0 : this.value;
            });





            
        });
    </script>
</body>
 
</html> 