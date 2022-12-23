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
                        <div id="submenu-1" class="collapse submenu <?php echo (in_array($page, ["index", "danh_sach_tsdk", "danh_sach_phong_thi", "ql_diem"])) ? "show" : ""; ?>" style="">
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
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/cards.html">Cards <span class="badge badge-secondary">New</span></a>
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