<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="<?php echo (in_array($page, ["index", "danh_sach_tsdk"])) ? "true" : ""; ?>" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Quản lí chung<span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu <?php echo (in_array($page, ["index", "danh_sach_tsdk", "danh_sach_phong_thi", "ql_diem", "ql_phuc_khao", "danh_sach_thi_sinh_trung_tuyen"])) ? "show" : ""; ?>" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($page=="index") ? "active" : ""; ?>" href="index.php">Cổng đăng kí</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($page=="danh_sach_tsdk") ? "active" : ""; ?>" href="danh_sach_tsdk.php">Danh sách thí sinh đăng kí</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($page=="danh_sach_phong_thi") ? "active" : ""; ?>" href="danh_sach_phong_thi.php">Danh sách phòng thi</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($page=="ql_diem") ? "active" : ""; ?>" href="ql_diem.php">Quản lí điểm thi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($page=="ql_phuc_khao") ? "active" : ""; ?>" href="ql_phuc_khao.php">Quản lí phúc khảo (<?= getAllSLPhucKhaoDangCho() ?>)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($page=="danh_sach_thi_sinh_trung_tuyen") ? "active" : ""; ?>" href="danh_sach_thi_sinh_trung_tuyen.php">Danh sách trúng tuyển</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->