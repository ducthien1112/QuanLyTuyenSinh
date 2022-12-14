<?php 
    include_once '../connectdb.php'; 
    include_once "cong_dk_functions.php";
    include_once 'ql_phuc_khao_functions.php';
    $page = "index";
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css?t=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Cổng đăng kí</title>
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
        <?php require_once 'side_bar.php'; ?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper" style="min-height: 100vh !important;">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Quản lí chung</h2>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <?php
                            $messageForm = ""; 
                            if(isset($_POST['btnSave'])){
                                $start_time = $_POST['start_time'];
                                $end_time = $_POST['end_time'];
                                $isValid = true;
                                $msgError = "";
                                if($start_time==null || $end_time==null){
                                    $isValid = false; 
                                    $msgError = "Vui lòng chọn thời gian bắt đầu hoặc kết thúc!";
                                }
                                if($isValid == true && $start_time > $end_time){
                                    $isValid = false; 
                                    $msgError = "Thời gian bắt đầu phải xảy ra trước thời gian kết thúc!";
                                }


                                if($isValid){
                                    $isSuccess = updateCongDK($start_time, $end_time);
                                    $messageForm =  $isSuccess ? "<div class='alert alert-success' role='alert'>
                                            Thay đổi thành công!
                                        </div>" : "<div class='alert alert-danger' role='alert'>
                                        Không thể thay đổi. Vui lòng liên hệ quản trị viên!
                                    </div>";              
                                }
                                else{
                                    $messageForm =  "<div class='alert alert-danger' role='alert'>
                                        $msgError
                                    </div>"; 
                                }
                                
                            }


                            $congDK = getCongDk();
                            
                            

                         ?>
                        <div class="row">
                            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Thông tin thời gian mở/đóng cổng đăng kí</h5>
                                    <div class="card-body p-0">
                                        <ul class="traffic-sales list-group list-group-flush">
                                            <li class="traffic-sales-content list-group-item text-success font-weight-bold">
                                                <span class="traffic-sales-name">Mở cổng vào</span>
                                                    <span class="traffic-sales-amount "><?=$congDK['start_time']?>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item text-danger font-weight-bold">
                                                <span class="traffic-sales-name">Đóng cổng vào</span>    
                                                    <span class="traffic-sales-amount"><?=$congDK['end_time']?></span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Sửa đổi thông tin thời gian mở/đóng cổng đăng kí</h5>
                                    <div class="card-body">
                                        <?=$messageForm?>
                                        <form class="needs-validation" novalidate="" method="post">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <label for="start_time" class="form-label">Thời gian bắt đầu</label>
                                                    <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="<?php echo $congDK['start_time']; ?>">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <label for="end_time" class="form-label">Thời gian kết thúc</label>
                                                    <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="<?php echo $congDK['end_time']; ?>">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                                    <button class="btn btn-primary" type="submit" name="btnSave">Lưu lại</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- Đăng kí  -->
                            <!-- ============================================================== -->
                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Tổng thí sinh đăng kí</h5>
                                            <h2 class="mb-0"> 24,763</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                            <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- ============================================================== -->
                            <!-- end Đăng ki  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new thanh toán  -->
                            <!-- ============================================================== -->
                           <!--  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Số thí sinh thanh toán</h5>
                                            <h2 class="mb-0"> 10000</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                            <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- ============================================================== -->
                            <!-- end đã thanh toán  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
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
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>